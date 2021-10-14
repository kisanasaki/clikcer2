<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Question extends Model
{
    //
    public static function getquestion(){
      $today=Carbon::today();
      $questions = Question::whereDate('created_at', $today)
      ->get();
      return $questions;
    }

    public static function getquestiondetail($question_id){
      $question = Question::where('id',$question_id)
      ->get();
      return $question;
    }
}
