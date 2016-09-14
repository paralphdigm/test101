@extends('layouts.app')

@section('content')
<div class="cold-md-12 row container">
  <div class="col-md-12 col-md-offset-0">

		{!! Form::open([
				'route' => 'blogs.store',
        'files' => true,
		]) !!}

            <h1>Add new Blog</h1>
            <p class="lead">Add a new blog or <a href="{{ route('blogs.index') }}">Go back to all Blogs .</a></p>
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

									<div class="form-group{{ $errors->has('blogname') ? ' has-error' : '' }}">
											{!! Form::label('blogname', 'Blog Name:', ['class' => 'control-label']) !!}
								 		 {!! Form::text('blogname', null, ['class' => 'form-control','required']) !!}
										 @if ($errors->has('blogname'))
												 <span class="help-block">
														 <strong>{{ $errors->first('blogname') }}</strong>
												 </span>
										 @endif
									</div>

                  <div class="form-group{{ $errors->has('blogdescription') ? ' has-error' : '' }}">
											{!! Form::label('blogdescription', 'Blog Description:', ['class' => 'control-label']) !!}
								 		 {!! Form::textarea('blogdescription', null, ['class' => 'materialize-textarea','required']) !!}
										 @if ($errors->has('blogdescription'))
												 <span class="help-block">
														 <strong>{{ $errors->first('blogdescription') }}</strong>
												 </span>
										 @endif
									</div>


              {!! Form::submit('Add New Blog', ['class' => 'btn btn-primary pull-right']) !!}
            	{!! Form::close() !!}

			</div>
	</div>
  <script type="text/javascript" charset="utf-8">
      window.onload = function(){
      $(document).ready(function(){

      $('textarea').ckeditor();

          });
      }

  </script>
@stop
