<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'question_id',
        'user_id',
        'message'
    ];

    public  function userQuestion (){
        return $this->belongsTo(UserQuestion::class, 'question_id', 'id');
    }

    public  function creator (){
        return $this->hasOne(User::class,'id','user_id');
    }
}
