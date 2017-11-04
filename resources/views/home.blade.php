@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome To You Diary Profile</div>
                <div class="panel-body">
                    <a href="/user/{{Auth::user()->id}}/create-diary" class="btn btn-primary">Create Diary</a>
                    <a href="/user/{{Auth::user()->id}}/show-diaries" class="btn btn-primary">Show Diaries</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
