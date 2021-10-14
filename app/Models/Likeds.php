<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Auth;

class Likeds extends Model
{
    //flag=0でinsert
    public static function addliked($question_id){
      $user_id = Auth::id();
      $liked = Likeds::insert(
        ['user_id'=>$user_id,'question_id'=>$question_id,'flag'=>0,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
      );
    }
    //flag=1でinsert
    public static function adddisliked($question_id){
      $user_id = Auth::id();
      $liked = Likeds::insert(
        ['user_id'=>$user_id,'question_id'=>$question_id,'flag'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
      );
    }
    //flag=1からflag=0に変更
    public static function updateliked($question_id){
      $user_id = Auth::id();
      $liked = Likeds::where('user_id',$user_id)
      ->where('question_id',$question_id)
      ->update(
        ['flag'=>0,'updated_at'=>Carbon::now()]
      );
    }
    //flag=0からflag=1に変更
    public static function subtractliked($question_id){
      $user_id = Auth::id();
      $liked = Likeds::where('user_id',$user_id)
      ->where('question_id',$question_id)
      ->update(
        ['flag'=>1,'updated_at'=>Carbon::now()]
      );
    }

    public static function checkliked($question_id){
      $user_id = Auth::id();
      $liked = Likeds::select('flag')
      ->where('user_id',$user_id)
      ->where('question_id',$question_id)
      ->count();
      //count=0だったらいいねしていない
      //count=1かつflagをgetしたら0だった→いいねしてある,flagをgetしたら1だった→いいねしてない
      if($liked == 0){
        return 0;
      }else if($liked == 1){
        return 1;
      }

    }

    public static function getlikedcount($question_id){
      $liked = Likeds::where('flag',0)
      ->where('question_id',$question_id)
      ->count();
      return $liked;
    }
    public static function getdislikedcount($question_id){
      $disliked = Likeds::where('flag',1)
      ->where('question_id',$question_id)
      ->count();
      return $disliked;
    }
}
