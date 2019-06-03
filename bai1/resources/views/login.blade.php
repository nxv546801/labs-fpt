@extends('layouts.app')

@section('content')
	<div>
		@if ($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<strong>{{ $error }}</strong><br>
			@endforeach
		</div>
		@endif

		<form action="/login" method="post">
			@csrf {{--khi làm việc với form thì nên có dòng này--}}
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection