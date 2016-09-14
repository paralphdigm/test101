@extends('layouts.app')

@section('content')

    <div id="portfolio" style="padding: 50px; z-index: 1; position: relative;" class="col">
        <br><div class= "container"><hr class="style14"></div>
        <h3 style="text-align:center;">Portfolio</h3>
        <div class= "container"><hr class="style14"><br></div>
    		<ul id="filters" class="clearfix">

          @foreach($productcategories as $productcategory)
			       <li><span class="filter" data-filter=".{{$productcategory->name}}">{{$productcategory->name}}</span></li>
         @endforeach
    		</ul>
    		<div id="portfoliolist">
          @foreach($productcategories as $productcategory)
            @foreach($products as $product)
              @if($product->productcategory_id == $productcategory->id)

          			<div class="portfolio {{$productcategory->name}}" data-cat="{{$productcategory->name}} ">
          				<div class="portfolio-wrapper">
                    @if($product->ClientPic != null)
                      <img width="100%" src="data:image/jpeg;base64,{{base64_encode($product->ClientPic)}}" alt="" />
                    @else
                      <img width="100%" src="data:image/jpeg;base64,{{base64_encode($product->ClientPic)}}" alt="" />
                    @endif
          					<div class="label">
          						<div class="label-text">
          							<a class="text-title">Bird Document</a>
          							<span class="text-category">Logo</span>
          						</div>
          						<div class="label-bg"></div>
          					</div>
          				</div>
          			</div>
                @endif
              @endforeach
            @endforeach
        </div>
      </div>




@endsection
