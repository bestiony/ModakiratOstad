<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_plan_id','user_id','content'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function lessonPlan(){
        return $this->belongsTo(lessonplan::class,'lesson_plan_id');
    }
}
