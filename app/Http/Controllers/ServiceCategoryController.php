<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceCategory;
use Session;
use App\Http\Requests;

class ServiceCategoryController extends Controller
{
  public function __construct()
  {
      // $this->middleware('auth');
  }
  public function index(){

    $search = \Request::get('search'); //<-- we use global request to get the param of URI

    $servicecategories = ServiceCategory::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(6);


    return view('servicecategories.index',compact('servicecategories'));

  }// end of index

  public function create()
  {
      return view('servicecategories.create',compact('servicecategories'));
  }

  public function store(Request $request)
  {
      $input = $request->all();
      ServiceCategory::create($input);
      Session::flash('flash_message', 'Service Category successfully added!');
      return redirect()->back();
  }

  public function edit($id)
  {
    $servicecategory = ServiceCategory::findOrFail($id);
    return view('servicecategories.edit',compact('servicecategory'));
  }
  public function update($id, Request $request)
  {
      $servicecategory = ServiceCategory::findOrFail($id);
      $input = $request->all();
      $servicecategory->fill($input)->save();
      Session::flash('flash_message', 'Service Category successfully updated!');
      return redirect()->back();
  }
  public function destroy($id)
  {
      $servicecategory = ServiceCategory::findOrFail($id);
      $servicecategory->delete();
      Session::flash('flash_message', 'Service Category successfully deleted!');
      return redirect()->route('servicecategories.index');
  }
  public function show($id){
    $search = \Request::get('search'); //<-- we use global request to get the param of URI
    $servicecategories = ServiceCategory::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(6);

    $servicecategory = ServiceCategory::findOrFail($id);
    return view('servicecategories.show',compact('servicecategories','servicecategory'));

  }// end of show
}
