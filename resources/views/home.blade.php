@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @if ( $authcheck == 0)
                    <a href="{{ Route('clicker.index') }}">clickerへ</a>
                    @elseif ($authcheck == 1)
                    <a href="{{ Route('answer.index') }}">answerへ</a>
                    @else
                    @endif
                    <a href="{{ Route('post') }}">postへ</a>

                    <a href="{{ Route('test') }}">テスト用ルート</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
