<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model{

    public  function friend_info(){
        return $this->hasOne(User::class,'id','user_A');
    }

}
