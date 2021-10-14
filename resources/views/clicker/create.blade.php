@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新規作成</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ Route('clicker.store') }}" >
                      @csrf
                      <label for="question">質問内容</label>
                      <textarea id="question" name="question"></textarea>
                      <input type="submit" value="送信">
                    </form>
                    <a href="{{ Route('clicker.index')}}">戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
