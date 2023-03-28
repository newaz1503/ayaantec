<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts = About::all();
        return view('backend.pages.about.index')->with(compact('abouts'));
    }
    public function edit(Request $request, $id){
        $about= About::find($id);
        if($request->isMethod('post')){
          $data= $request->all();
          $request->validate([
             'details'=>'required',
          ]);
         $about->details=$data['details'];
         $about->save();
         Toastr::success("Updated successfully!" ,'Success!');
         return redirect('admin/about/index');
        }
        return view('backend.pages.about.edit')->with(compact('about'));
      }
}
