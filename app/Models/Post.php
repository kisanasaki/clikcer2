<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public static function getcomment($question_id){
      $comments = Post::select('name','comment')
      ->join('users','users.id','=','posts.user_id')
      ->where('question_id',$question_id)
      ->get();
      return $comments;
    }

}
