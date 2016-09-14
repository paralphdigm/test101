@extends('layouts.app', ['page_title' => "ProductCategories"])

@section('content')

<div class="container">

  <h1>All Product Categories</h1>
  <p class="lead">Modify Product Categories or <a href="{{ route('productcategories.index') }}">go back to all Product Categories .</a></p>
   {!! Form::open(['method'=>'GET','url'=>'productcategories','class'=>'navbar-form','role'=>'search'])  !!}
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
        @foreach($productcategories as $productcategory)
          <tr>
             <td>{{$productcategory->name}}</td>
             <td>{{$productcategory->description}}</td>

             <td><div  class="pull-right"><a href="#{{$productcategory->id}}" class="btn btn-info inquirymodal-trigger">View Message</a>&nbsp;
                <a href="{{ route('productcategories.edit', $productcategory->id) }}" class="btn btn-primary pull-right">Edit </a></div>

               <div id="{{$productcategory->id}}" class="modal" style="height: 50%;">
                   <a href="#!" class="modal-action modal-close btn btn-primary pull-right red accent-4">X</a>
                   <div class="" style="padding: 5%;">
                        <h4>{{$productcategory->name}}</h4><hr>
                        <p>{{$productcategory->description}}</p>
                        <div class="modal-footer pull-right">
                             {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['productcategories.destroy', $productcategory->id],
                                'id' => 'myform'
                            ]) !!}
                              {!! Form::button('<i class="fa fa-trash-o"></i>'. ' Delete Product', ['class'=>'btn btn-danger delete']) !!}
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

 {{ $productcategories->links() }}
<br><br><br><hr>
<a href="{{ route('productcategories.create') }}" class="btn btn-primary pull-right">Add New Product Category</a>
</div>



<script type="text/javascript">
window.onload = function(){
  $('button.delete').on('click', function(){
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover this data",
			type: "warning",
			showCancelButton: true,
		  confirmButtonColor: "#CF1600",
		  confirmButtonText: "Yes, delete it",
		  cancelButtonText: "No, cancel",
		  closeOnConfirm: false,
		  closeOnCancel: false

    },
         function(isConfirm){
					 if (isConfirm) {
						 $("#myform").submit();
    		 			swal("Deleted!", "Loan Application has been deleted.", "success");
  				}y
					else {
    				swal("Cancelled", "Loan Application is safe :)", "error");
  				}

    });
  })

}
</script>

@stop
