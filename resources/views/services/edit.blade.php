@extends('layouts.app')

@section('content')
<div class="cold-md-12 row container">
  <div class="col-md-12 col-md-offset-0">

    {!! Form::model($service, [
       'method' => 'PATCH',
       'route' => ['services.update', $service->id],
       'files' => true,
    ]) !!}

            <h1>Edit new service</h1>
            <p class="lead">Add a new category for services or <a href="{{ route('services.index') }}">Go back to all services .</a></p>
            <hr>
            @include('partials.alerts.errors')
            @include('partials.alerts.flash_msg')

                    <div class="col-md-12" style="padding: 5%;">

                        <div class="file-field input-field">
                          <div class="btn">
                            <span>File</span>
                          {!! Form::file('ClientPic', null, ['class' => 'form-control','required']) !!}
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('servicecategory_id', 'service Categories:', ['class' => 'control-label']) !!}
                            {!! Form::select('servicecategory_id', $servicecategories,null, ['class' => 'form-control','required']) !!}

                        </div>
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
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
      											{!! Form::label('price', 'Price:', ['class' => 'control-label']) !!}
      								 		 {!! Form::text('price', null, ['class' => 'form-control','required']) !!}
      										 @if ($errors->has('price'))
      												 <span class="help-block">
      														 <strong>{{ $errors->first('price') }}</strong>
      												 </span>
      										 @endif
      									</div>
                      </div>
        
                  <!-- <img  class = "img-circle sr-only" src="http://placehold.it/100x100" alt="" /> -->




              {!! Form::submit('Update service', ['class' => 'btn btn-primary pull-right']) !!}
            	{!! Form::close() !!}

			</div>
	</div>

@stop
