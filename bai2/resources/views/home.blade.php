@extends('layouts.app')

@section('content')
	<div class="flex-center position-ref full-height">
		<div class="content">
			<div class="title m-b-md">
				@if (session('phone'))
				    <div class="alert alert-{{session('alertMessage')}}">
				        Wellcome to Laravel. Your email is {{ session('phone') }}
				    </div>
				@endif
			</div>

		</div>
	</div>
@endsection
