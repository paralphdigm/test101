
  <div id="blogs" class="indigo lighten-5 center" style="position:relative; color: #000;">
    <div class="blogspan">
      <div class="row" style="padding: 5%;">
          <div class="col s12">
            <h1 class="center"><b>MY BLOGS</b></h1>
              <div id="news-slider" class="owl-carousel">

                @foreach($services as $service)
                  <div class="post-slide" style="background: transparent; border: none; padding: 3%;">
                    <h3>{{$service->name}}</h3>
                    <p class="tags">{{$service->name}}</p>
                    <p>
                      {{$service->description}}
                    </p>
                  </div>
                @endforeach

              </div>
          </div>
        </div>
      </div>
  </div>
