@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
						<div class="panel-heading">
							 <h4>Edit Profile</h4>
						</div>
						<div class="panel-body">
							{!! BootForm::open()->action('/user/'. Auth::user()->id)->put() !!}
							{!! BootForm::bind($user) !!}
							{!! BootForm::text('Name', 'name') !!}
							{!! BootForm::email('Email', 'email') !!}
							{!! BootForm::password('Password', 'password') !!}
							{!! BootForm::submit('Update')->addClass('btn btn-warning') !!}
							<a href="/home" class="btn btn-danger">Cancel</a>
							{!! BootForm::close() !!}
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection
