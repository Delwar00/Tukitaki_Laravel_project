<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   //protected $fillable = ['id','service_name', 'service_details', 'service_button','service_image'];
     public function getSubServices(){
       return $this->hasMany('App\SubService','service_id','id');//service_id as a foriegn key
       // and id as a primary key
     }
     public function getSubAreas(){
       return $this->hasMany('App\SubServicesArea','sub_service_id','id');//service_id as a foriegn key
       // and id as a primary key
     }


}
