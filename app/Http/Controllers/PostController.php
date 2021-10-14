<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
      $questions = \App\Models\Question::getquestion();
      return view('post',compact('questions'));
    }

    public function liked($question_id){
      $checkliked =\App\Models\Likeds::checkliked($question_id);
      if($checkliked == 0){
        $likeds = \App\Models\Likeds::addliked($question_id);
        return redirect('post');
      }else if($checkliked == 1){
        $likeds = \App\Models\Likeds::updateliked($question_id);
        return redirect('post');
      }
    }




    public function disliked($question_id){
      $checkliked =\App\Models\Likeds::checkliked($question_id);
      if($checkliked == 0){
        $likeds = \App\Models\Likeds::adddisliked($question_id);
        return redirect('post');
      }else if($checkliked == 1){
        $likeds = \App\Models\Likeds::subtractliked($question_id);
        return redirect('post');
      }
    }

    public function detail($question_id){
      $question = \App\Models\Question::getquestiondetail($question_id);
      $likedcount = \App\Models\Likeds::getlikedcount($question_id);
      $dislikedcount = \App\Models\Likeds::getdislikedcount($question_id);
      $comments = \App\Models\Post::getcomment($question_id);
      // $user_id = Auth::id();
      // return view('detail',compact('user_id'));
      return view('detail',compact('question','likedcount','dislikedcount','comments'));
    }


}
