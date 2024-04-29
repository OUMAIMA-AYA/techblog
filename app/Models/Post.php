<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function Comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
       // return $this->morphToMany(Tag::class, 'post_tag');
    }
}
