<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use Session;
use App\Http\Requests;

class InquiriesController extends Controller
{
  public function __construct()
  {

  }
  public function index(){

    $search = \Request::get('search'); //<-- we use global request to get the param of URI

    $inquiries = Inquiry::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(6);
    return view('inquiries.index',compact('inquiries'));

  }// end of index

  public function create()
  {
      return view('inquiries.create',compact('inquiries'));
  }

  public function store(Request $request)
  {
      $input = $request->all();
      // Inquiry::create($input);
      \DB::table('inquiry')
     ->insert([
          'name' => $input['name'],
          'email' => $input['email'],
          'celnumber' => $input['celnumber'],
          'telnumber' => $input['telnumber'],
          'message' => $input['message'],
          'status' => '0',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now(),
         ]);
      Session::flash('flash_message', 'Inquiry successfully added!');
      return redirect()->back();
  }

  public function edit($id)
  {
    $inquiry = Inquiry::findOrFail($id);
    $inquiries = Inquiry::where($inquiry->status)->first();
    dd($inquiry->status);
    return view('branches.edit',compact('inquiry'));
  }
  public function update($id, Request $request)
  {
      $inquiry = Inquiry::findOrFail($id);
      $input = $request->all();
      $inquiry->fill($input)->save();
      Session::flash('flash_message', 'Inquiry successfully updated!');
      return redirect()->back();
  }
  public function destroy($id)
  {
      $inquiry = Inquiry::findOrFail($id);
      $inquiry->delete();
      Session::flash('flash_message', 'Inquiry successfully deleted!');
      return redirect()->route('inquiries.index');
  }


  public function show($id){
    $search = \Request::get('search'); //<-- we use global request to get the param of URI
    $inquiries = Inquiry::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(6);

    $inquiry = Inquiry::findOrFail($id);
    return view('inquiries.show',compact('inquiries','inquiry'));

  }// end of show
}
