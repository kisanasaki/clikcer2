<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Auth;

class Dislikeds extends Model
{
    //
    public static function adddisliked($question_id){
      //TODO：下のコードを書き換える
      //TODO：question_idは取る関数をとってきて引数で渡す

      $user_id = Auth::id();
      $disliked = Dislikeds::insert(
        ['user_id'=>$user_id,'question_id'=>$question_id,'flag'=>0,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
      );
    }

    public static function subtractdisliked(){

    }

    public static function checkdisliked(){

    }

    public static function getdislikedcount(){

    }
}
