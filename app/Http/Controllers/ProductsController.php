<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Session;
use App\Http\Requests;

class ProductsController extends Controller
{
  public function __construct()
  {
    // $this->middleware('auth');
  }
  public function index(){

    $search = \Request::get('search'); //<-- we use global request to get the param of URI

    $products = Product::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(6);
    return view('products.index',compact('products'));


  }// end of index

  public function create()
  {
      $productcategories = ProductCategory::lists('name','id');
      return view('products.create',compact('productcategories'));
  }

  public function store(Request $request)
  {
      $input = $request->all();
      if($request['ClientPic'] != null){
        $file = Input::file('ClientPic');
        $img = Image::make($file);
        Response::make($img->encode('jpeg'));
        $input['ClientPic'] = $img;
      }
      Product::create($input);
      Session::flash('flash_message', 'Product successfully added!');
      return redirect()->back();
  }

  public function edit($id)
  {
    $product = Product::findOrFail($id);

    // dd($products);
    $productcategories = ProductCategory::lists('name','id');

    return view('products.edit',compact('product','productcategories'));
  }
  public function update($id, Request $request)
  {
      $product = Product::findOrFail($id);
      $input = $request->all();
      if($request['ClientPic'] != null){
        $file = Input::file('ClientPic');
        $img = Image::make($file);
        Response::make($img->encode('jpeg'));
        $input['ClientPic'] = $img;
      }
      $product->fill($input)->save();
      Session::flash('flash_message', 'Product successfully updated!');
      return redirect()->back();
  }
  public function destroy($id)
  {
      $product = Product::findOrFail($id);
      $product->delete();
      Session::flash('flash_message', 'Product successfully deleted!');
      return redirect()->route('products.index');
  }
  public function show($id){
    $search = \Request::get('search'); //<-- we use global request to get the param of URI
    $products = Product::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(6);

    $product = Product::findOrFail($id);
    return view('productcategories.show',compact('products','product'));

  }// end of show
}
