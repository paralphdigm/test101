@extends('layouts.app', ['page_title' => "blogs"])


@section('content')

<div id="test" class="main col s12">
	<div class="row">
		<div class="col s12 m3 black-text">
			<style>
			#test .tabs{
				background: transparent;

			}
			#test ul.tabs{
				flex-direction: column;
				height: 100%;
				float: left;

			}
			#test ul.tabs li{
				width: 100%;

			}
			#testul .tabs li a{
				color: black;
				width: 500px;
			}
			#test ul .tabs li a:hover{
				color: red;
			}
			ul.tabs .indicator{
				  display: none;
			}


			</style>

			<ul class="tabs">
				@foreach($blogs as $bloglist)
        <li class="tab">
					<a href="#{{$bloglist->id}}" onclick="Materialize.fadeInImage('#'{{$bloglist->id}})')">
						<p>
							{{ $bloglist->blogname }}
						</p>
					</a>
				</li>
					@endforeach
      </ul>
		</div>
		<div class="col s12 m9">
			@foreach($blogs as $bloglist)
				<div id="{{$bloglist->id}}">
					<h1>{{ $bloglist->blogname }}</h1>
					<p class="lead">
							{!! html_entity_decode($bloglist->blogdescription) !!}
						</p>

				</div>
			@endforeach

		</div>
	</div>
</div>
@stop
