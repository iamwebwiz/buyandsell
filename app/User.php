<?php

namespace App;

// use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function ads(){
    	return $this->hasMany(UserAds::class);
    }
}
