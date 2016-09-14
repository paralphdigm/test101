@extends('layouts.app')

@section('content')
<div class="cold-md-12 row container">
  <div class="col-md-12 col-md-offset-0">

		{!! Form::open([
				'route' => 'servicecategories.store'
		]) !!}

            <h1>Add new Service Category</h1>
            <p class="lead">Add a new category for services or <a href="{{ route('servicecategories.index') }}">Go back to all Service Categories .</a></p>
            <hr>
            @include('partials.alerts.errors')
            @include('partials.alerts.flash_msg')


									<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
											{!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
								 		 {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
										 @if ($errors->has('name'))
												 <span class="help-block">
														 <strong>{{ $errors->first('name') }}</strong>
												 </span>
										 @endif
									</div>

                  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
											{!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
								 		 {!! Form::textarea('description', null, ['class' => 'materialize-textarea','required']) !!}
										 @if ($errors->has('description'))
												 <span class="help-block">
														 <strong>{{ $errors->first('description') }}</strong>
												 </span>
										 @endif
									</div>

              {!! Form::submit('Add New Service Category', ['class' => 'btn btn-primary pull-right']) !!}
            	{!! Form::close() !!}

			</div>
	</div>


@stop
