<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Reply extends Model
{
    protected $fillable = ['body', 'user_id', 'post_id'];

    use HasFactory;//for some mistery this used to be the only thing needed in here and now I'm adding the following:

    public function owner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function thread(){
        return $this->belongsTo(Thread::class);
    }
}
