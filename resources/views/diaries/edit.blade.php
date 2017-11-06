@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				@include('diaries.partial.details')
			</div>
			<div class="col-md-4">
				<div>
					{!! BootForm::open()->action('/diary/' . $edit_diary->id)->put() !!}
					{!! BootForm::bind($edit_diary) !!}
					<input type="file" name="myImage" />
					{!! BootForm::date('Created At', 'created_date') !!}
					{!! BootForm::textarea('Diary Paragraph', 'diaries_paragraph') !!}
					{!! BootForm::submit('Update') !!}
					{!! BootForm::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
