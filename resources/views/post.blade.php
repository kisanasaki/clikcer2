@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @foreach ($questions as $question)
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><a href="{{ Route('detail',['question_id'=>$question->id]) }}">{{$question['question']}}</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <a href="{{ Route('liked',['question_id'=>$question->id]) }}">◯</a>
                    <a href="{{ Route('disliked',['question_id'=>$question->id]) }}">×</a>
                    <a href="{{ Route('answer.create',['question_id'=>$question->id]) }}">コメント</a>
              </div>
            </div>
        </div>

        @endforeach

    </div>
<a href="{{ Route('home') }}">戻る</a>
</div>
@endsection
