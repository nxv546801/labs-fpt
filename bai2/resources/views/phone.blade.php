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

		<form action="/phone/" method="post">
			@csrf {{--khi làm việc với form thì nên có dòng này--}}
			<div class="form-group">
				<label for="">Phone number:</label>
				<input type="text" name="phone" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection