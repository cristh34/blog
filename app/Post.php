<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){
    	return $this->belongsTo(Category::class);
    }
    
    public function post(){
    	return $this->belongsTo(Post::class);
    }
    public function user(){
    	return $this->belongsTo(User::class);
    }
	public function tags(){
	    	return $this->belongsToMany(Tag::class);
	    }
     
}
