@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-4">
          @include('diaries.partial.details')
        </div>
        <div class="col-md-8">
          {!! BootForm::open() !!}
          {!! BootForm::date('Date', 'created_date') !!}
          {!! BootForm::textarea('Diary Paragraph', 'diary_paragraph') !!}
          {!! BootForm::close() !!}
        </div>
    </div>
  </div>
@endsection