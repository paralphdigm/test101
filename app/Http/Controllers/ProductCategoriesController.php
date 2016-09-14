<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use Session;
use App\Http\Requests;

class ProductCategoriesController extends Controller
{
  public function __construct()
  {
      // $this->middleware('auth');
  }
  public function index(){

    $search = \Request::get('search'); //<-- we use global request to get the param of URI

    $productcategories = ProductCategory::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(6);


    return view('productcategories.index',compact('productcategories'));

  }// end of index

  public function create()
  {
      return view('productcategories.create',compact('productcategories'));
  }

  public function store(Request $request)
  {
      $input = $request->all();
      ProductCategory::create($input);
      Session::flash('flash_message', 'Product Category successfully added!');
      return redirect()->back();
  }

  public function edit($id)
  {
    $productcategory = ProductCategory::findOrFail($id);
    return view('productcategories.edit',compact('productcategory'));
  }
  public function update($id, Request $request)
  {
      $productcategory = ProductCategory::findOrFail($id);
      $input = $request->all();
      $productcategory->fill($input)->save();
      Session::flash('flash_message', 'Product Category successfully updated!');
      return redirect()->back();
  }
  public function destroy($id)
  {
      $productcategory = ProductCategory::findOrFail($id);
      $productcategory->delete();
      Session::flash('flash_message', 'Product Category successfully deleted!');
      return redirect()->route('productcategories.index');
  }
  public function show($id){
    $search = \Request::get('search'); //<-- we use global request to get the param of URI
    $productcategories = ProductCategory::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(6);

    $productcategory = ProductCategory::findOrFail($id);
    return view('productcategories.show',compact('productcategories','productcategory'));

  }// end of show
}
