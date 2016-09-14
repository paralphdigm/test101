<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Session;
use App\Http\Requests;

class BlogController extends Controller
{
  public function __construct()
  {
    // $this->middleware('auth');
  }
  public function index(){

    $search = \Request::get('search'); //<-- we use global request to get the param of URI

    $blogs = Blog::where('blogname','like','%'.$search.'%')
        ->orderBy('blogname')
        ->paginate(6);
    return view('blogs.index',compact('blogs'));

  }// end of index

  public function create()
  {
      return view('blogs.create');
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
      Blog::create($input);
      Session::flash('flash_message', 'Blog successfully added!');
      return redirect()->back();
  }

  public function edit($id)
  {
    $blog = Blog::findOrFail($id);

    return view('blogs.edit',compact('blog'));
  }
  public function update($id, Request $request)
  {
      $blog = Blog::findOrFail($id);
      $input = $request->all();
      if($request['ClientPic'] != null){
        $file = Input::file('ClientPic');
        $img = Image::make($file);
        Response::make($img->encode('jpeg'));
        $input['ClientPic'] = $img;
      }
      $blog->fill($input)->save();
      Session::flash('flash_message', 'Blog successfully updated!');
      return redirect()->back();
  }
  public function destroy($id)
  {
      $blog = Blog::findOrFail($id);
      $blog->delete();
      Session::flash('flash_message', 'Blog successfully deleted!');
      return redirect()->route('blogs.index');
  }
  public function show($id){
    $search = \Request::get('search'); //<-- we use global request to get the param of URI
    $blogs = Blog::where('blogname','like','%'.$search.'%')
        ->orderBy('id')
        ->paginate(6);

    $blog = Blog::findOrFail($id);

    return view('blogs.show',compact('blogs','blog'));

  }// end of show
}
