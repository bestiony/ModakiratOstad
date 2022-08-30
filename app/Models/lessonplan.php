<?php

namespace App\Models;

use App\Models\Rating;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class lessonplan extends Model
{
    use HasFactory;
    protected $fillable = ['lesson_id','user_id'];

    public function comments(){
        return $this->hasMany(Comment::class,'comment_id');
    }

    public function ratings(){
        return $this->hasMany(Rating::class,'rating_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    
}
