<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Prefer;

class PrefersController extends BaseController
{
  public function carica_preferiti(){
    $pref= Prefer::where("user_id", Session::get('user_id'))->get();
    return $pref;
  }

  public function remove_preferiti(){
    $id_pref=Prefer::find(request('id'));
    
    if($id_pref->delete()){
      $response = array('esito' => true);
    }else{
      $response = array('esito' => false);
    }
    return $response;
  }


}