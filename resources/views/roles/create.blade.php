@extends('layouts.appboot')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Create New Role</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
			<div class="row">
				<div class="col-md-12">
						<div class="col-md-12">
			          <div class="form-group">
			              <strong>Name:</strong>
			              {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
			          </div>

			          <div class="form-group">
			              <strong>Display Name:</strong>
			              {!! Form::text('display_name', null, array('placeholder' => 'Display Name','class' => 'form-control')) !!}
			          </div>

			          <div class="form-group">
			              <strong>Description:</strong>
			              {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
			          </div>
			      </div>
			      <div class="col-md-12">
			          <div class="form-group">
			              <h2>Permissions</h2>
										<div class="col-md-12">

												<ul style="list-style: none;">
													@if($count = -1)@endif
						              @foreach($permission as $value)
															@if($count +=1)@endif
																	@if($count % 4 === 0)
																	</ul></div><div class="col-md-4"><hr><ul>
																	@endif
																	<li style="list-style: none;">
										              	<label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
										              	{{ $value->display_name }}</label><br>
																	</li>
						              @endforeach

												</ul><hr></div>
										</div>
			          </div>
			      </div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<button type="submit" class="btn btn-primary pull-right">Submit</button>
			</div>
	</div>
	{!! Form::close() !!}
@endsection
