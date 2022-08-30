<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function lessonPlans(){
        return $this->hasMany(lessonplan::class,'lesson_id');
    }
}
