@extends('layouts.app', ['page_title' => "blogs"])

@section('content')

<div class="container">

  <h1>All Blogs</h1>
  <p class="lead">Modify blogs or <a href="{{ route('blogs.index') }}">go back to all blogs .</a></p>
   {!! Form::open(['method'=>'GET','url'=>'blogs','class'=>'navbar-form','role'=>'search'])  !!}
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
        @foreach($blogs as $blog)
          <tr>
             <td>{{$blog->blogname}}</td>
             <td>{{strip_tags(str_limit($blog->blogdescription,$limit = 100, $end = '...'))}}</td>
             <td><div  class="pull-right"><a href="#{{$blog->id}}" class="btn btn-info inquirymodal-trigger">View Details</a>&nbsp;
                <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-primary pull-right">Edit </a></div>

               <div id="{{$blog->id}}" class="modal" style="height: 100%;">
                   <a href="#!" class="modal-action modal-close btn btn-primary pull-right red accent-4">X</a>
                   <div class="col-md-12" style="padding: 5%;">
                     <div class="col-md-4">
                       @if($blog->ClientPic != null)
                         <img class = "thumbnail" height = "250px" width  = "250px" src="data:image/jpeg;base64,{{base64_encode($blog->ClientPic)}}" alt="" />
                       @else
                         <img class = "thumbnail" height = "250px" width  = "250px" src="data:image/jpeg;base64,{{base64_encode($blog->ClientPic)}}" alt="" />

                       @endif
                     </div>
                     <div class="col-md-1"></div>
                     <div class="col-md-7">
                        <h4><span>Name: &nbsp;</span>{{$blog->blogname}}</h4><hr>
                         <p><span>Description: &nbsp;</span>{{$blog->blogdescription}}</p><hr>
                        <div class="modal-footer pull-right">
                             {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['blogs.destroy', $blog->id]
                            ]) !!}
                                {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                  </div>
                </div>
              </div>
             </td>
         </tr>
        @endforeach

     </tbody>
   </table>

 {{ $blogs->links() }}
<br><br><hr>
<a href="{{ route('blogs.create') }}" class="btn btn-primary pull-right">Add New Blog</a>
</div>



@stop
