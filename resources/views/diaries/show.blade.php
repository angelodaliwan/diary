@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div>
            <h3>{{Auth::user()->name}}</h3>
          </div>
        </div>
        <div class="col-sm-4">
          @forelse($diaries as $diary)
            <div class="panel panel-primary">
              <div class="panel-heading">{{date('M  d Y',strtotime($diary->created_date))}} <a class="btn btn-warning" href="/user/{{Auth::user()->id}}/edit-diary/{{$diary->id}}">Edit</a>
                <div style="float:right">
                  {!! BootForm::open()->action('/diary/'. $diary->id)->delete() !!}
                  {!! BootForm::submit('delete')->addClass('btn btn-danger') !!}
                  {!! BootForm::close() !!}
                </div>
              </div>
              <div class="panel-body">
                  {{$diary->diaries_paragraph}}
              </div>
            </div>
            @empty
            <i style="font-color: red;">No Diaries</i>
          @endforelse
        </div>
        {{ $diaries->links() }}
      </div>
    </div>

@endsection
