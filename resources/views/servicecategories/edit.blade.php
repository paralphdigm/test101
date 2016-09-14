@extends('layouts.app', ['page_title' => "ServiceCategories"])

@section('content')
  <div class="cold-md-12 row container">
    <div class="col-md-12 col-md-offset-0">
      <h1>Editing "{{ $servicecategory->name }}"</h1>
      <p class="lead">Edit and save this Service Category below, or <a href="{{ route('servicecategories.index') }}">go back to all Product Service Categories .</a></p>
      <hr>
      @include('partials.alerts.errors')
      @include('partials.alerts.flash_msg')

      {!! Form::model($servicecategory, [
         'method' => 'PATCH',
         'route' => ['servicecategories.update', $servicecategory->id]
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

      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
          {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
         {!! Form::textarea('description', null, ['class' => 'materialize-textarea','required']) !!}
         @if ($errors->has('description'))
             <span class="help-block">
                 <strong>{{ $errors->first('description') }}</strong>
             </span>
         @endif
      </div>



      {!! Form::submit('Update Service Category', ['class' => 'btn btn-primary pull-right']) !!}

      {!! Form::close() !!}

    </div>
  </div>


@stop
