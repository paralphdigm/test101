@extends('layouts.app')

@section('content')
<div class="cold-md-12 row container">
  <div class="col-md-12 col-md-offset-0">

    {!! Form::model($blog, [
       'method' => 'PATCH',
       'route' => ['blogs.update', $blog->id],
       'files' => true,
    ]) !!}

            <h1>Edit new blog</h1>
            <p class="lead">Edit Blog or <a href="{{ route('blogs.index') }}">Go back to all blogs .</a></p>
            <hr>
            @include('partials.alerts.errors')
            @include('partials.alerts.flash_msg')

                    <div class="col-md-12" style="padding: 5%;">
                      <div class="col-md-4">
                        <h4>Name: {{$blog->blogname}}</h4><hr>
                        @if($blog->ClientPic != null)
                          <img class = "thumbnail" width  = "100%" src="data:image/jpeg;base64,{{base64_encode($blog->ClientPic)}}" alt="" />
                        @else
                          <img class = "thumbnail"  width  = "100%" src="data:image/jpeg;base64,{{base64_encode($blog->ClientPic)}}" alt="" />
                        @endif
                      </div>
                      <div class="col-md-8">
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
                      </div>
                    </div>
                  <!-- <img  class = "img-circle sr-only" src="http://placehold.it/100x100" alt="" /> -->




              {!! Form::submit('Update blog', ['class' => 'btn btn-primary pull-right']) !!}
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
