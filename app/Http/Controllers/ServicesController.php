<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\ServiceCategory;
use Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Session;
use App\Http\Requests;

class ServicesController extends Controller
{
  public function __construct()
  {
    // $this->middleware('auth');
  }
  public function index(){

    $search = \Request::get('search'); //<-- we use global request to get the param of URI

    $services = Service::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(6);
    return view('services.index',compact('services','service'));

  }// end of index

  public function create()
  {
      $servicecategories = ServiceCategory::lists('name','id');
      return view('services.create',compact('servicecategories'));
  }

  public function store(Request $request)
  {
      $input = $request->all();
      Service::create($input);
      Session::flash('flash_message', 'Service successfully added!');
      return redirect()->back();
  }

  public function edit($id)
  {
    $service = Service::findOrFail($id);

    // dd($products);
    $servicecategories = ServiceCategory::lists('name','id');

    return view('services.edit',compact('service','servicecategories'));
  }
  public function update($id, Request $request)
  {
      $service = Service::findOrFail($id);
      $input = $request->all();
      $service->fill($input)->save();
      Session::flash('flash_message', 'Product successfully updated!');
      return redirect()->back();
  }
  public function destroy($id)
  {
      $service = Service::findOrFail($id);
      $service->delete();
      Session::flash('flash_message', 'Servvice successfully deleted!');
      return redirect()->route('services.index');
  }
  public function show($id){
    $search = \Request::get('search'); //<-- we use global request to get the param of URI
    $services = Service::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(6);

    $service = Service::findOrFail($id);
    return view('servicecategories.show',compact('services','service'));

  }// end of show
}
