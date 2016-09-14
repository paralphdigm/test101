<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;
use App\Service;
use App\ServiceCategory;
use App\ProductCategory;
use Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Session;
use DB;
class HomeController extends Controller
{

    public function index()
    {
      $productcategories = DB::table('productcategories')->get();
      $products = DB::table('products')->get();
      $services = DB::table('services')->get();
      $servicecategories = DB::table('servicecategories')->get();
      $blogs = DB::table('blogs')->get();
      return view('/home',compact('products','productcategories','services','servicecategories','blogs'));
    }
    public function index2()
    {
      $productcategories = DB::table('productcategories')->get();
      $products = DB::table('products')->get();
      $services = DB::table('services')->get();
      $servicecategories = DB::table('servicecategories')->get();
      return view('/',compact('products','productcategories','services','servicecategories'));
    }
    public function onlineshop()
    {
      $productcategories = DB::table('productcategories')->get();
      $products = DB::table('products')->get();
      $services = DB::table('services')->get();
      $servicecategories = DB::table('servicecategories')->get();
      return view('onlineshop.onlineshop',compact('products','productcategories','services','servicecategories'));
    }
}
