<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Content;
use App\Models\Prefer;


class HomeController extends BaseController
{

  public function view_home(){
    return view("Home");
  }

  public function view_prefers(){
    return view("Preferiti");
  }

  public function carica_contents(){
    $contenuti= Content::all();
    return $contenuti;
  }

  public function addPreferito(){
    $pref = new Prefer;
    $pref->user_id = Session::get('user_id');
    $pref->url = request('immagine');
    $pref->testo = request('testo');

    if($pref->save())
    {
      $response = array('esito' => true);
    }else{
      $response = array('esito' => false);
    }

    return $response;
  }
    
  public function API_DriverStandings(){
      header('Content-Type: application/json');

      $year=urlencode(request('anno'));

      $rest_url = 'https://ergast.com/api/f1/'.$year.'/driverStandings/1.json';

      $curl=curl_init();

      curl_setopt($curl, CURLOPT_URL, $rest_url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

      $result = curl_exec($curl);

      curl_close($curl);

    return $result;
    }
    
}
