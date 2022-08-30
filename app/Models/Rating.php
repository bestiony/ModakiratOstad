<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_plan_id','user_id','value'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function lessonPlan(){
        return $this->belongsTo(lessonplan::class,'lesson_plan_id');
    }
}
