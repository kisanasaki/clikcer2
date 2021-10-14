@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{$question[0]['question']}}
                    <br>liked={{$likedcount}}
                    <br>disliked={{$dislikedcount}}
                </div>

            </div>
            @foreach ($comments as $comment)
              <!-- {{$comment['name']}} さんは-->
              {{$comment['comment']}}といっている<br>
            @endforeach
        </div>
        <a href="{{ Route('post') }}">戻る</a>
    </div>
</div>
@endsection
