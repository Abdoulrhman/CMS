<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReplay extends Model
{
    protected $fillable = [

        'comment_id',
        'is_active',
        'author',
        'photo',
        'email',
        'body'
    ];

    public function comment(){

        return $this->belongsTo('App\comment');
    }
}
