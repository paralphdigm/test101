@extends('layouts.app')

@section('content')

<div class="col-md-5 col-md-offset-1" style="margin-top: 100px;">
@include('partials.alerts.errors')
@include('partials.alerts.flash_msg')


	{!! Form::open([
			'route' => 'security.store'
	]) !!}

	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			{!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
		 {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
		 @if ($errors->has('name'))
				 <span class="help-block">
						 <strong>{{ $errors->first('name') }}</strong>
				 </span>
		 @endif

	</div>

	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			 {!! Form::label('email', 'Email Address:', ['class' => 'control-label']) !!}
			 {!! Form::email('email', null, ['class' => 'form-control','required']) !!}
			 @if ($errors->has('email'))
					 <span class="help-block">
							 <strong>{{ $errors->first('email') }}</strong>
					 </span>
			 @endif

	</div>
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			 {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
			 {!! Form::password('password', null, ['class' => 'form-control','required']) !!}
			 @if ($errors->has('password'))
					 <span class="help-block">
							 <strong>{{ $errors->first('password') }}</strong>
					 </span>
			 @endif

	</div>
	<br>
	<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
			 {!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'control-label']) !!}
			 {!! Form::password('password_confirmation', null, ['class' => 'form-control','required']) !!}
			 @if ($errors->has('password_confirmation'))
					 <span class="help-block">
							 <strong>{{ $errors->first('password_confirmation') }}</strong>
					 </span>
			 @endif

	</div>




{!! Form::submit('Create Account', ['class' => 'btn btn-primary pull-right']) !!}

{!! Form::close() !!}

</div>


	<div class="col-md-5 col-md-offset-0">
		<img src="{{url('/components/assets/img/mak.png')}}" style="width: 90%; margin-top: -50px;">
	</div>


@stop
