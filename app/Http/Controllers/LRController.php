<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class LRController extends BaseController
{
    public function register_form(){
      if(Session::get('user_id')) {return redirect('Home');}
      return view('Register');
    }

    public function login_form(){
      if(Session::get('user_id')) {return redirect('Home');}

      $error=Session::get('error');
      Session::forget("error");

      return view('Login')->with('error', $error);
    }

    public function do_register(){

      if(Session::get('user_id')) {return redirect ('Home');}

      //Salvataggio su tabella
      $utente = new User;
      $utente->username = request('username');
      $utente->password = password_hash(request('password'), PASSWORD_BCRYPT);
      $utente->email = request('email');
      $utente->name = request('name');
      $utente->surname = request('surname');

      $utente->save();

      //Login
      Session::put('user_id', $utente->id);

      //Redirect
      return redirect('Home');
    }

    public function do_login(){
      if(Session::get('user_id')) {return redirect('Home');}

      $utente=User::where('username', request('username'))->first();

      if(strlen(request('username')) == 0 || strlen(request('password')) == 0){
        Session::put('error', 'erroreVuoto');
        return redirect('Login')->withInput();
      }

      if(!$utente || !password_verify(request('password'), $utente->password)){
        Session::put('error', 'erroreErrato');
        return redirect('Login')->withInput();
      }

      //Login
      Session::put('user_id', $utente->id);

      //Redirect
      return redirect('Home');
    }

    public function checkUsername(){

      $exist=User::where('username', request('username'))->exists();
      if($exist){
        $response = array('esito' => true);
      }else{
        $response = array('esito' => false);
      }

      return $response;
    }

    public function checkEmail(){

      $exist=User::where('email', request('email'))->exists();
      if($exist){
        $response = array('esito' => true);
      }else{
        $response = array('esito' => false);
      }
      return $response;
    }
}
