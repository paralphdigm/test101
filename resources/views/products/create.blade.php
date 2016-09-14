@extends('layouts.app')

@section('content')
<div class="cold-md-12 row container">
  <div class="col-md-12 col-md-offset-0">

		{!! Form::open([
				'route' => 'products.store',
        'files' => true,
		]) !!}

            <h1>Add new Product Category</h1>
            <p class="lead">Add a new product or <a href="{{ route('products.index') }}">Go back to all Products .</a></p>
            <hr>
            @include('partials.alerts.errors')
            @include('partials.alerts.flash_msg')

                  <img  class = "img-circle sr-only" src="http://placehold.it/100x100" alt="" />

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
            			    {!! Form::label('productcategory_id', 'Product Categories:', ['class' => 'control-label']) !!}
            			    {!! Form::select('productcategory_id', $productcategories,null, ['class' => 'form-control','required']) !!}
            					<!-- {!! Form::hidden('category',  null,  ['class' => 'form-control','readonly']) !!} -->
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
                  <div class="form-group">
    									{!! Form::label('availability', 'availability: ', ['class' => 'control-label']) !!}
    									{!! Form::select('availability', array('yes' => 'yes', 'no' => 'no'),null, ['class' => 'form-control']) !!}
  								</div>
                  <div class="form-group">
    									{!! Form::label('featured', 'featured: ', ['class' => 'control-label']) !!}
    									{!! Form::select('featured', array('yes' => 'yes', 'no' => 'no'),null, ['class' => 'form-control']) !!}
  								</div>

              {!! Form::submit('Add New Product', ['class' => 'btn btn-primary pull-right']) !!}
            	{!! Form::close() !!}

			</div>
	</div>


@stop
