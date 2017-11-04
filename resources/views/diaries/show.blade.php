@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div>
            <h3>{{$user->name}}</h3>
          </div>
        </div>
        <div class="col-sm-4">
          @foreach($diaries as $diary)
            <div class="panel panel-primary">
              <div class="panel-heading">{{date('M  d Y',strtotime($diary->created_date))}} <a class="btn btn-warning" href="/user/{{Auth::user()->id}}/edit-diary/{{$diary->id}}">Edit</a></div>
              <div class="panel-body">
                  {{$diary->diaries_paragraph}}
              </div>
            </div>
          @endforeach
        </div>
        {{ $diaries->links() }}
      </div>
    </div>

@endsection
