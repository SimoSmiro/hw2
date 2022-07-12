<?php

namespace App\Http\Controllers;

use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class ProfileController extends BaseController
{

  public function view_profile(){
    if(!Session::get('user_id')) {return redirect('Login');}

    $utente=User::find(Session::get('user_id'));

    return view("Profilo")->with(['Nome'=>$utente->name, 'Cognome'=>$utente->surname, 'Email'=>$utente->email, 'Username'=>$utente->username]);
  }

  public function logout(){
    Session::flush();
    return redirect('Login');
  }

  public function modifica(){

    if(!Session::get('user_id')) {return redirect('Login');}

    $utente=User::find(Session::get('user_id'))->first();

    if(strlen(request('new_name'))!=0){
      $name = request('new_name');

      $update = $utente->update(['name' => $name]);

      if($update)
      {
        $result = array('esito'=>true);
      }
      else
      {
        $result = array('esito'=>false);
      }

      return $result;
    }


    if(strlen(request('new_surname'))!=0){
      $surname = request('new_surname');

      $update = $utente->update(['surname' => $surname]);

      if($update)
      {
        $result = array('esito'=>true);
      }
      else
      {
        $result = array('esito'=>false);
      }

      return $result;
    }


    if(strlen(request('new_username'))!=0 && strlen(request('new_username'))<=16){
      $username = request('new_username');

      $update = $utente->update(['username' => $username]);

      if($update)
      {
        $result = array('esito'=>true);
      }
      else
      {
        $result = array('esito'=>false);
      }

      return $result;
    }else if(strlen(request('new_username'))>16){
      $result = array('esito'=>false, 'value'=>1);
      return $result;
    }


    if(strlen(request('new_email'))!=0){
      $email = request('new_email');

      $validator=new EmailValidator();
      $valid=$validator->isValid($email, new RFCValidation());

      if($valid){

        $update = $utente->update(['email' => $email]);

        if($update)
        {
          $result = array('esito'=>true);
        }
        else
        {
          $result = array('esito'=>false);
        }
        return $result;
      }
      else if(!$valid)
      {
      $result = array('esito'=>false, 'value'=>2);
      return $result;
      }
    }


    if(strlen(request('new_password'))!=0 && strlen(request('new_password'))>=8){
      $password = request('new_password');

      $update = $utente->update(['password' => password_hash($password, PASSWORD_BCRYPT)]);

      if($update)
      {
        $result = array('esito'=>true);
      }
      else
      {
        $result = array('esito'=>false);
      }

      return $result;
    }else if(strlen(request('new_password'))<8){
      $result = array('esito'=>false, 'value'=>3);
      return $result;
    }
  }
}
?>