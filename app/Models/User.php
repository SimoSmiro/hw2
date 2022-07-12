<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model{

    
  public function prefer(){
    return $this->hasMany('App\Models\Prefers');
  }

  public $timestamps = false;


  //necessario per modificare le variabili nel db (mass update exceptions)
  protected $fillable = ['name', 'surname', 'username', 'email', 'password'];

}
