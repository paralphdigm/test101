
<section id="education" class="main root-sec grey lighten-5 padd-tb-120 education-wrap">
          <h1 class="center"><b>FEATURED PRODUCTS</b></h1>
          <div class="row">
            <div class="education-inner">
              <div class="clearfix section-head education-text">
                <div class="col s12 center">

                </div>
              </div>
              <div class="col s12 m11 card-box-wrap">
                <div class="row">

                  <div class="col s12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="educationSlider" class="clearfix card-element-wrapper" style="padding: 20px;">
                          @foreach($products as $product)
                          <div class="row">
                            <div class="col s12 m11">
                              <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                  <!-- <img class="activator" src="/components/assets/img/head2.png" alt=""> -->
                                  @if($product->ClientPic != null)
                                    <img class="activator" src="data:image/jpeg;base64,{{base64_encode($product->ClientPic)}}" alt="" />
                                  @else
                                    <img class="activator" src="data:image/jpeg;base64,{{base64_encode($product->ClientPic)}}" alt="" />
                                  @endif
                                </div>
                                <div class="card-content">
                                  <span class="card-title activator grey-text text-darken-4">{{$product->name}}<i class="material-icons right">more_vert</i></span>
                                  <p><a href="#">{{strip_tags(str_limit($product->description,$limit = 20, $end = '...'))}}</a></p>
                                </div>
                                <div class="card-reveal">
                                  <span class="card-title grey-text text-darken-4">{{$product->name}}<i class="material-icons right">close</i></span>
                                  <p>{{$product->description}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp edu-ctrl">
                <a class="btn-floating waves-effect waves-light btn-medium white go go-left"><i class="small material-icons grey darken-4">fast_rewind</i></a>
                <a class="btn-floating waves-effect waves-light btn-medium white go go-right"><i class="small material-icons grey darken-4">fast_forward</i></a>
              </div>
            </div>
          </div>

      </section>
