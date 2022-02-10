<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{

    use HasFactory;//for some mistery this used to be the only thing needed in ehre and now I'm adding the following:

    public function path(){
        return'/threads/'. $this->id;
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }

    public function owner(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function addReply(Array $parameters){
        $model=$this->replies()->create($parameters);
        return $model;
        // $this->replies()->create($reply);

    }


}
