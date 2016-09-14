
<div id="navbar" class="navbar-fixed">
     <nav class="red accent-4">
       <!--dropdown structure-->
        <div class="container">
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="#contactme" class="blue-text" onclick="Materialize.fadeInImage('#contactme')">Link1</a></li>
            <li><a href="#aboutme" onclick="Materialize.fadeInImage('#aboutme')">Link2</a></li>
            <li class="divider"></li>
            <li><a href="#educ" onclick="Materialize.fadeInImage('#educ')">Link3</a></li>
          </ul>
          <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">Link1</a></li>
            <li><a href="#!">Link2</a></li>
            <li class="divider"></li>
            <li><a href="#!">Link3</a></li>
          </ul>
          <ul id="dropdown3" class="dropdown-content">
            <li><a href="#!">Link1</a></li>
            <li><a href="#!">Link2</a></li>
            <li class="divider"></li>
            <li><a href="#!">Link3</a></li>
          </ul>
          <div class="nav-wrapper">
            <a href="#!" onclick="Materialize.fadeInImage('#aboutme')" class="brand-logo"><img src="{{ url('/components/assets/img/biggsmaklogo.png')}}" style="width: 180px; margin-top: -25px"></a>
            <ul class="right hide-on-med-and-down">
              @permission('dashboard-list')
                <li><a href="{{ url('/welcome') }}"><i class="material-icons">view_module</i></a></li>
              @endpermission
              @if (Auth::guest())
                  <li><a href="{{ url('/login') }}" style="color: white;">Login</a></li>
                  <li><a href="{{ url('/register') }}" style="color: white;">Signup</a></li>
              @else
                  <li><a href="#" style="color: white;">{{ Auth::user()->name }}</a></li>
                  <li><a href="{{ url('/logout') }}" style=" color: white;">Logout</a></li>
              @endif
            </ul>

        </div>
      </div>
    </nav>
  </div>
