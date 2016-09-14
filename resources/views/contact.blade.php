<div class="main white black-text">
  <section id="contact">
        <h1 class="center black-text"><b>Contact Us</b></h1>
        <div class="row">
          <div class="col s12">
              <div class="col s12 m6">
                  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                  <div id='gmap_canvas' style='height:400px;width:100%;'>
                  </div>
                  <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                  <script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(13.64177148601483,123.18591346511232),mapTypeId: google.maps.MapTypeId.TERRAIN};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(13.64177148601483,123.18591346511232)});infowindow = new google.maps.InfoWindow({content:'<strong>Contact me</strong><br>Haring Canaman Philippines<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
              </div>

              <form class="col s12 m6">
                <div class="row">
                  <div class="input-field">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                </div>
              </form>
          </div>
        </div>

  </section>
</div>
