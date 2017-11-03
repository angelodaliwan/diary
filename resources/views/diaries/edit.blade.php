@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				@include('diaries.partial.details')
			</div>
			<div class="col-md-4">
				{!! BootForm::open() !!}
				{!! BootForm::bind($diary) !!}
				{!! BootForm::date('Created At', 'created_date') !!}
				{!! BootForm::textarea('Diary Paragraph', 'diaries_paragraph') !!}
				{!! BootForm::submit('Update') !!}
			</div>
		</div>
	</div>
@endsection
