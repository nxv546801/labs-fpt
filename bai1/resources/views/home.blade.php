@extends('layouts.app')

@section('content')
	<div class="flex-center position-ref full-height">
		<div class="content">
			<div class="title m-b-md">
				@if (session('email'))
				    <div class="alert alert-success">
				        Wellcome to Laravel. Your email is {{ session('email') }}
				    </div>
				@endif
			</div>
		</div>
	</div>
@endsection
