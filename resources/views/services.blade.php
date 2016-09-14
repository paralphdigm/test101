<section class="center black-text" id="services">
  <div class="servicespan">
    <div style="padding: 7%;">
      <h1 class="center black-text"><b>WHAT WE OFFER</b></h1>

        <div id="services-slider" class="owl-carousel">

          @foreach($services as $service)
            <div class="post-slide" style="background: transparent; border: none; padding: 3%;">
              <h4>{{$service->name}}</h4>
              <p class="tags">{{$service->name}}</p>
              <p>
                {{$service->description}}
              </p>
            </div>
          @endforeach

        </div>

      </div>
  </div>
</section>
