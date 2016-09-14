@extends('layouts.app', ['page_title' => "services"])

@section('content')

<div class="container">

  <h1>All services</h1>
  <p class="lead">Modify services or <a href="{{ route('services.index') }}">go back to all services .</a></p>
   {!! Form::open(['method'=>'GET','url'=>'services','class'=>'navbar-form','role'=>'search'])  !!}
   <div class="input-group custom-search-form pull-right">
       <input type="text" class="form-control" name="search" placeholder="Search...">
       <span class="input-group-btn">
           <button class="btn btn-default-sm" type="submit">
               <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--></i>
           </button>
       </span>
   </div>

   {!! Form::close() !!}
   <table class="table">
    <thead class="thead-inverse">
       <tr>
         <th>Name</th>
         <th>Description</th>
         <th>Price</th>
       </tr>
     </thead>
     <tbody>
        @foreach($services as $service)
          <tr>
             <td>{{$service->name}}</td>
             <td>{{$service->description}}</td>
             <td>₱: {{$service->price}}</td>
             <td><div  class="pull-right"><a href="#{{$service->id}}" class="btn btn-info inquirymodal-trigger">View Details</a>&nbsp;
                <a href="{{ route('services.edit',$service->id) }}" class="btn btn-primary pull-right">Edit </a></div>

               <div id="{{$service->id}}" class="modal" style="height: 100%;">
                   <a href="#!" class="modal-action modal-close btn btn-primary pull-right red accent-4">X</a>
                   <div class="col-md-12" style="padding: 5%;">

                        <h4><span>Name: &nbsp;</span>{{$service->name}}</h4><hr>
                         <p><span>Description: &nbsp;</span>{{$service->description}}</p><hr>
                         <p><span>Price(₱): &nbsp;</span>{{$service->price}}</p>
                        <div class="modal-footer pull-right">
                             {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['services.destroy', $service->id]
                            ]) !!}
                                {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                  </div>

             </td>
         </tr>
        @endforeach

     </tbody>
   </table>

 {{ $services->links() }}
<br><br><hr>
<a href="{{ route('services.create') }}" class="btn btn-primary pull-right">Add New services</a>
</div>



@stop
