@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clicker</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="" action="#" method="post">

                    </form>
                    <a href="{{ Route('clicker.create') }}">新規作成</a>
                    <a href="{{ Route('home') }}">戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
