<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model{
    public $timestamps = false;
    protected $fillable = [
     'id',
     'user_id',
     'subject',
     'message'
    ];

    public  function comments(){
        return $this->hasMany(Comment::class, 'question_id', 'id')->orderBy('created_at', 'DESC');
    }

    public  function creator (){
        return $this->hasOne(User::class,'id','user_id');
    }
}
