@extends('layouts.app', ['page_title' => "Products"])

@section('content')

<div class="container">
  <h1>All Products</h1>
  <p class="lead">Modify Products or <a href="{{ route('products.index') }}">go back to all Products .</a></p>
   {!! Form::open(['method'=>'GET','url'=>'products','class'=>'navbar-form','role'=>'search'])  !!}
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
        @foreach($products as $product)
          <tr>
             <td>{{$product->name}}</td>
             <td>{{$product->description}}</td>
             <td>P: {{$product->price}}</td>
             <td>

               <div  class="pull-right"><a href="#{{$product->id}}" class="btn btn-info inquirymodal-trigger">View Details</a>&nbsp;
                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary pull-right">Edit </a></div>

               <div id="{{$product->id}}" class="modal" style="height: 100%;">
                   <a href="#!" class="modal-action modal-close btn btn-primary pull-right red accent-4">X</a>
                   <div class="col-md-12" style="padding: 5%;">
                     <div class="col-md-4">
                       @if($product->ClientPic != null)
                         <img class = "thumbnail" height = "250px" width  = "250px" src="data:image/jpeg;base64,{{base64_encode($product->ClientPic)}}" alt="" />
                       @else
                         <img class = "thumbnail" height = "250px" width  = "250px" src="data:image/jpeg;base64,{{base64_encode($product->ClientPic)}}" alt="" />
                       @endif
                     </div>
                     <div class="col-md-1"></div>
                     <div class="col-md-7">
                        <h4>{{$product->name}}</h4><hr>
                        <p>{{$product->description}}<br><p>Php:{{$product->price}}</p></p>
                        <div class="modal-footer pull-right">
                          {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['products.destroy', $product->id],
                               'id' => 'myform'
                           ]) !!}
                               {!! Form::button('<i class="fa fa-trash-o"></i>'. ' Delete Product', ['class'=>'btn btn-danger delete']) !!}
                           {!! Form::close() !!}

                            <div class="pull-left">

	</div>
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

 {{ $products->links() }}
<br><br><br><hr>
@permission('product-create')
<a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Add New Products</a>
@endpermission
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
  				}
					else {
    				swal("Cancelled", "Loan Application is safe :)", "error");
  				}

    });
  })

}
</script>

@stop
