
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Answer</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    create

                    <form class="" action="{{ Route('answer.store') }}" method="post">
                      @csrf
                      <label for="comment">コメント</label>
                      <textarea id="comment" name="comment"></textarea>
                      <label for="question_id">question_id</label>
                      <input type="hidden" id="question_id" name="question_id" value="{{$question_id}}">
                      <input type="submit" value="送信">
                    </form>
                    <a href="{{ Route('post') }}">戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
