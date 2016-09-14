@extends('layouts.app', ['page_title' => "Inquiries"])

@section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><script>
  $(document).ready(function() {
      $("#inquiries").show();
      $("#forcheckingform").show();
      $("#checkedform").hide();

        $("#checked").click(function() {
          $("#inquiries").show();
          $("#forcheckingform").hide();
          $("#checkedform").show();

        });

        $("#forchecking").click(function() {
          $("#inquiries").show();
          $("#checkedform").hide();
          $("#forcheckingform").show();
        });

  });
</script>
<div class="container">
  <div class="col-md-12">
    <div class="col-md-5">
      <h1>Inquiries</h1>
    </div>
    <div class="col-md-7">
      <div class="pull-right"><hr>
        <a href="#" class="btn btn-info " id="forchecking">For Checking</a>
        <a href="#" class="btn btn-info " id="checked">Checked</a><hr>
      </div>
    </div>
  </div>
  <div class="col-md-12"><br><br><hr></div>
  <div class="col-md-12" id="inquiries">
    <div class="col-md-12" id="forcheckingform">
        @include('inquiries.checking')
    </div>
    <div class="col-md-12" id="checkedform">
        @include('inquiries.checked')
    </div>

  </div>

@stop
