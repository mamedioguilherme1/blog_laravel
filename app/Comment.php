<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['name', 'comment', 'post_id'];
	public function replies(){	return $this->hasMany('\App\Reply'); }
    public function post(){	return $this->belongsTo('\App\Post'); }
}
