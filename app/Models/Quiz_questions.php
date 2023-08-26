<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_questions extends Model
{
    use HasFactory;

    public function quiz_relation(){
        return $this->belongsTo(Quiz::class,'quiz_id');
  }

  public function question_option_relation(){
    return $this->hasMany(Quiz_questions_options::class,'question_id');
}


public function question_options(){
    return $this->hasMany(Quiz_questions_options::class,'question_id');
}

   
}
 