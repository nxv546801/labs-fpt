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
				<label for="">Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Phone number</label>
				<input type="text" name="phone" class="form-control">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Date of birth</label>
				<input type="date" name="dateofbirth" class="form-control">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlSelect1">Gender</label>
			    <select class="form-control" id="exampleFormControlSelect1">
			      <option>Male</option>
			      <option>Female</option>
			    </select>
			  </div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection