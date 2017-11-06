@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-4">
          @include('diaries.partial.details')
        </div>
        <div class="col-md-8">
          {!! BootForm::open()->action('/user/' .auth()->user()->id.'/save-diary')->post() !!}
          {!! BootForm::date('Date', 'created_date') !!}
          {!! BootForm::textarea('Diary Paragraph', 'diaries_paragraph') !!}
          {!! BootForm::submit('Save') !!}
          {!! BootForm::close() !!}
        </div>
    </div>
  </div>
@endsection
