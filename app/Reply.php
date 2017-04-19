<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['name', 'reply', 'comment_id'];
    public function comment()
    {
    	return $this->belongsTo('\App\Comment');
    }
}
