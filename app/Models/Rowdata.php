<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Carbon\Carbon;

class Rowdata extends Model
{
    public static function index(){
      $start = microtime(true);
      echo $start;
      $count = True;
      for($i=1; $i<=10; $i++){
          Rowdata::func1();

          $end = microtime(true);
          $n = (($start + $i) - $end)*1000*1000;
          /*最初の1s目の時は ((10:50:24.566 + 1) - 10:50:25.566)*1000*1000=0
          //
          */
          if( $n > 0 ){
              usleep( $n );
          }

      }
    }

    public static function outputTime(){
      $unixTime = explode( '.', microtime(true) );
      $dispTime = date( 'Y/m/d H:i:s', $unixTime[0] ) . "." . substr( $unixTime[1].'0000', 0 , 3 );
      return $dispTime;
    }

    public static function func1(){
    echo Rowdata::outputTime().PHP_EOL;
    echo "1秒ごとに実行".PHP_EOL;
    usleep( 200*1000 ); // 0.2秒かかるとする
    }

    public static function brainlog($data,$poorSignal,$attention,$meditation,$delta,$theta,$lowAplpha,$highAplpha,$lowBeta,$highBeta,$lowGamma,$midGamma){
      $user_id = Auth::id();
      $data = Rowdata::insert(['user_id'=>$user_id,'data'=>$data,'poorSignal'=>$poorSignal,
      'attention'=>$attention,'meditation'=>$meditation,'delta'=>$delta,
      'theta'=>$theta,'lowAplpha'=>$lowAplpha,'highAplpha'=>$highAplpha,
      'lowBeta'=>$lowBeta,'highBeta'=>$highBeta,'lowGamma'=>$lowGamma,
      'midGamma'=>$midGamma,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
    }

    public static function user_brainshow(){
      $user_id = Auth::id();
      $data = Rowdata::select('theta')
      ->where('user_id',$user_id)
      ->get();
      return $data;
    }

    public static function all_brainshow(){
      //TODO:最新の時刻のレコード（20人分を取得する
      //
      // $dt = Carbon::now();
      // $data = Rowdata::where();
      // return $data;
    }
}
