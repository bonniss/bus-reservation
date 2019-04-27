<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    'name',
  ];

  //Get the buses of this company
  public function buses()
  {
    return $this->hasMany('App\Bus');
  }
  public function Company_routes(){
    return $this->hasMany('App\CompanyRoute')
  }
}
