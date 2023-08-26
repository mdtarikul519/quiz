<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz_questions;

class Quiz extends Model
{
    use HasFactory;

    public function quizQuestions()
    {
        return  $this->hasMany(Quiz_questions::class);

    }

}
