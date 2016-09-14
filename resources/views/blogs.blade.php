
  <div id="blogs" class="indigo lighten-5" style="position:relative; color: #000;">
    <div class="blogspan">
      <div class="row" style="padding: 5%;">
          <div class="col s12">
            <h1 class="center"><b>MY BLOGS</b></h1>
              <div id="blog-slider" class="owl-carousel">

                @foreach($blogs as $blog)
                  <div class="post-slide" style="padding: 3%;">

                        <div class="pic">
                          @if($blog->ClientPic != null)
                            <img  width="200px" height=" 150px" src="data:image/jpeg;base64,{{base64_encode($blog->ClientPic)}}" alt="" />
                          @else
                            <img  width="200px" height=" 150px" src="data:image/jpeg;base64,{{base64_encode($blog->ClientPic)}}" alt="" />
                          @endif
                            <ul class="post-category blue-grey darken-4 white-text">
                                <li><a href="blogs/{{$blog->id}}" target="_blank">READ MORE</a></li>
                            </ul>
                        </div>
                      <div class="post-description black-text">
                        <p>{{(str_limit($blog->blogname,$limit = 20, $end = '...'))}}</p>
                      </div>
                  </div>
                @endforeach

              </div>
          </div>
          <div class="col s12 m8"></div>
        </div>
      </div>
  </div>
