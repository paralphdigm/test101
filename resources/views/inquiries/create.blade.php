@extends('layouts.app')

@section('content')
<div class="cold-md-12 row container">
  <div class="col-md-12 col-md-offset-0">

		{!! Form::open([
				'route' => 'inquiries.store'
		]) !!}

					<div class="card" style="padding: 50px;">
            @include('partials.alerts.errors')
            @include('partials.alerts.flash_msg')

							<div class="card-block">
									<h1>Input Inquiry</h1><hr>
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
                  <div class="col-md-12 col-md-offset-0">
                      <div class="col-md-6">
        									<div class="form-group{{ $errors->has('celnumber') ? ' has-error' : '' }}">
        											{!! Form::label('celnumber', 'Cellphone Number:', ['class' => 'control-label']) !!}
        								 		 {!! Form::text('celnumber', null, ['class' => 'form-control','required']) !!}
        										 @if ($errors->has('celnumber'))
        												 <span class="help-block">
        														 <strong>{{ $errors->first('celnumber') }}</strong>
        												 </span>
        										 @endif
        									</div>
                      </div>
                      <div class="col-md-6">
        									<div class="form-group{{ $errors->has('telnumber') ? ' has-error' : '' }}">
        											{!! Form::label('telnumber', 'Telephone Number:', ['class' => 'control-label']) !!}
        								 		 {!! Form::text('telnumber', null, ['class' => 'form-control','required']) !!}
        										 @if ($errors->has('telnumber'))
        												 <span class="help-block">
        														 <strong>{{ $errors->first('telnumber') }}</strong>
        												 </span>
        										 @endif
        									</div>
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
											{!! Form::label('message', 'Message:', ['class' => 'control-label']) !!}
								 		 {!! Form::text('message', null, ['class' => 'materialize-textarea','required']) !!}
										 @if ($errors->has('message'))
												 <span class="help-block">
														 <strong>{{ $errors->first('message') }}</strong>
												 </span>
										 @endif
									</div>
							</div>
              {!! Form::submit('Inquire now', ['class' => 'btn btn-primary pull-right']) !!}
            	{!! Form::close() !!}
					</div>
			</div>
	</div>


@stop
