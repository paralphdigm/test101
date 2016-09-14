@extends('layouts.app')

@section('content')
@permission('dashboard-list')
<div class="sr-only">
@endpermission



    <div id="header">
      <div class="parallax-container">
            <div class="parallax">
                <div class="wrap">
                  <div class="row">
                        <h1>TEST<span>TEST SITE</span> TEST SITE. </h1>
                        <h5>THIS IS A TEST WEBSITE</h5><br><br>
                        <center><button class="btn waves-effect waves-light grey darken-4" type="submit" name="action">Find out More
                          <i class="material-icons right">send</i>
                          </button>
                          <br><br>
                          <a class="btn-floating btn-large waves-effect waves-light white" id="btndown"><i class="fa fa-arrow-down" aria-hidden="true" style="color:#212121;"></i></a>
                        </center>
                  </div>
                </div>
            </div>
        </div>
    </div>
    @include('welcome')
    <!-- @include('socialmedia') -->




    @include('services')
    @include('product')
    @include('portfolio')
    @include('blogs')
    @include('contact')
    @include('footer')

@permission('dashboard-list')
  </div>
@endpermission
@endsection
