<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ClientServiceRequest extends Model
{
    
     use SoftDeletes;

     public function getInfo(){
     	return $this->hasMany('App\SubService','id','selected_sub_service');
     }
     public function getAreaInfo(){
     	return $this->hasMany('App\SubServicesArea','id','selected_service_area');
     }
}
