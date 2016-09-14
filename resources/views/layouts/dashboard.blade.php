
  <div class="navbar-fixed" style="margin-top: -2px;">
    <nav class="grey darken-4">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#" class="brand-logo center">TEST SITE</a>

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            
            <ul class="side-nav" id="mobile-demo">
              <li><a href="sass.html">Sass</a>

              </li>
              <li><a href="badges.html">Components</a>

              </li>
              <li><a href="collapsible.html">Javascript</a>

              </li>
              <li><a href="mobile.html">Mobile</a>

              </li>
            </ul>


            <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li><a href="index.html">Home</a></li>
              <li><a href="port.html">Exclusives</a></li>
              <li><a href="collapsible.html">Contact Us</a></li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="port.html"><i class="material-icons">search</i></a></li>
              <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
              <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
              <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
            </ul>



          </div>
        </div>
      </nav>
    </div>


@permission('dashboard-list')
  <nav class="transparent" style="margin-top: -2px;">
    <div class="navbar navbar-default no-margin navbar-fixed-top grey darken-4" style="border: 0px;">
        <a href="#" class="brand-logo center">TEST SITE</a>
        <a href="#!" class="navbar-toggle collapse in pull-right material-icons" data-toggle="collapse" id="menu-toggle" style="border: 0px;">add</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#" style="color: white;">{{ Auth::user()->name }}</a></li>
            <li><a href="{{ url('/logout') }}" style=" color: white;">Logout</a></li>
        </ul>
    </div>
  </nav>
  @endpermission


  @permission('dashboard-list')
    <div id="wrapper" class="white">
        <div id="sidebar-wrapper" class="white">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu" style="margin-top: 0px;" aria-multiselectable="true">
              <li><a href="{{ url('/home') }}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-home fa-stack-1x "></i></span>Home</a></li>
              <li><a href="{{ url('/inquiries') }}"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-book fa-stack-1x"></i></span>Inquiries</a></li>
              <li><a href="{{ url('/services') }}"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-calendar-minus-o fa-stack-1x "></i></span>Services</a></li>
              <li><a href="{{ url('/servicecategories') }}"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-calendar-o fa-stack-1x "></i></span>Service Categories</a></li>
              <li><a href="{{ url('/products') }}"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-bookmark-o fa-stack-1x "></i></span>Products</a></li>
              <li><a href="{{ url('/productcategories') }}"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-archive fa-stack-1x "></i></span>Product Categories</a></li>
              <li><a href="{{ url('/blogs') }}"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-archive fa-stack-1x "></i></span>Blogs</a></li>

              <hr>
              @permission('user-list')
              <li><a href="{{ url('/users') }}"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cogs fa-stack-1x "></i></span>Settings:Users</a></li>
              @endpermission
              @permission('role-list')
              <li><a href="{{ url('/roles') }}"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cog fa-stack-1x "></i></span>Settings:Roles</a></li>
              @endpermission
          </ul>
        </div>
        @endpermission

        @permission('dashboard-list')
          <div id="page-content-wrapper" style="margin-top: 0px;" >
              <div class="container-fluid" >
                  <div class="row">
                      <div class="col-md-12">
          @endpermission
                        @yield('content')
          @permission('dashboard-list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpermission
