@extends('layouts.app', ['page_title' => "serviceCategories"])

@section('content')

<div class="container">

  <h1>All Service Categories</h1>
  <p class="lead">Modify Service Categories or <a href="{{ route('servicecategories.index') }}">go back to all Service Categories .</a></p>
   {!! Form::open(['method'=>'GET','url'=>'servicecategories','class'=>'navbar-form','role'=>'search'])  !!}
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
       </tr>
     </thead>
     <tbody>
        @foreach($servicecategories as $servicecategory)
          <tr>
             <td>{{$servicecategory->name}}</td>
             <td>{{$servicecategory->description}}</td>

             <td><div  class="pull-right"><a href="#{{$servicecategory->id}}" class="btn btn-info inquirymodal-trigger">View Message</a>&nbsp;
                <a href="{{ route('servicecategories.edit', $servicecategory->id) }}" class="btn btn-primary pull-right">Edit </a></div>

               <div id="{{$servicecategory->id}}" class="modal" style="height: 50%;">
                   <a href="#!" class="modal-action modal-close btn btn-primary pull-right red accent-4">X</a>
                   <div class="" style="padding: 5%;">
                        <h4>{{$servicecategory->name}}</h4><hr>
                        <p>{{$servicecategory->description}}</p>
                        <div class="modal-footer pull-right">
                             {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['servicecategories.destroy', $servicecategory->id]
                            ]) !!}
                                {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                  </div>
                </div>
              </div>
             </td>
         </tr>
        @endforeach

     </tbody>
   </table>

 {{ $servicecategories->links() }}
<br><hr>
<a href="{{ route('servicecategories.create') }}" class="btn btn-primary pull-right">Add New Service Category</a>
</div>



@stop
