<div class="main">
  <section class="filter-section">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-xs-12">

                <h1><b>PRODUCTS</b></h1>

                  <div class="filter-container isotopeFilters">
                      <ul class="list-inline filter">
                          <li class="active"><a href="#" data-filter="*">All </a><span>/</span></li>
                          @foreach($productcategories as $productcategory)
                            <li><a href="#" data-filter=".{{$productcategory->name}}">{{$productcategory->name}}</a><span>/</span></li>
                          @endforeach
                      </ul>
                  </div>

              </div>
          </div>
      </div>
  </section>
</div>
