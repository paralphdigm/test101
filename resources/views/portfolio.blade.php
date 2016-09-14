<div class="main">
    <section class="portfolio-section port-col">
        <div class="isotopeContainer">
          @foreach($productcategories as $productcategory)
            @foreach($products as $product)
              @if($product->productcategory_id == $productcategory->id)
                <div class="col-sm-3 isotopeSelector {{$productcategory->name}}">
                    <article class="">
                        <figure>
                            <img class="responsive-img" src="data:image/jpeg;base64,{{base64_encode($product->ClientPic)}}" alt="" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="inner-overlay-content with-icons">
                                        <a title="{{$product->name}}" class="fancybox-pop" rel="portfolio-1" href="data:image/jpeg;base64,{{base64_encode($product->ClientPic)}}"><i class="fa fa-search"></i></a>
                                        <a href="#{{$product->id}}" class="inquirymodal-trigger"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="article-title">{{$product->name}}</div>
                    </article>
                </div>
              @endif
            @endforeach
          @endforeach
        </div>
        @foreach($products as $product)
        <div id="{{$product->id}}" class="modal" style="width: 80%; height: 100%;">
            <a href="#!" class="modal-action modal-close btn btn-primary pull-right red accent-4">X</a>
            <div class="col s12" style="padding: 5%;">

                 <div class="col s4">
                   @if($product->ClientPic != null)
                     <img width="300px" height=" 250px" src="data:image/jpeg;base64,{{base64_encode($product->ClientPic)}}" alt="" />
                   @else
                     <img width="300px" height=" 250px" src="data:image/jpeg;base64,{{base64_encode($product->ClientPic)}}" alt="" />
                   @endif
                 </div>
                 <div class="col s8">
                  <p class="lead"><b>Name: </b> {{$product->name}}</p>
                  <hr>
                  <p class="lead"><b>Description: </b> {{strip_tags(str_limit($product->description,$limit = 20, $end = '...'))}}</p>
                  <hr>
                   <p class="lead"><b>Price: </b>P: {{$product->price}}</p>
                   <hr>
                 </div>
                 <hr>
           </div>
        </div>
        @endforeach
    </section>
</div>
