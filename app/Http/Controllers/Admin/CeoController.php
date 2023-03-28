<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Ceo;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class CeoController extends Controller
{
    public function ceo(){
        $ceos = Ceo::all();
        return view('backend.pages.ceo.ceo', [
            'ceos' => $ceos,
        ]);
    }

    public function create(){
        return view('backend.pages.banner.add');
    }

    public function store(Request $request){
        $data=new Ceo();
        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg,gif|max:5000',
            'alt'=>'required',
            'ceosays' => 'required',
            'paraceo' => 'required',
        ]);
        if($request->hasFile('image'))
        {

        $image=$request->file('image');
        $currentDate=Carbon::now()->toDateString();


        if(!Storage::disk('public')->exists('images/admin/ceo/'.$data->image))
        {
           Storage::disk('public')->makeDirectory('images/admin/ceo/'.$data->image);
        }
         $imageName = Storage::disk('public')->put('images/admin/ceo/',$image);
        $data->image=$imageName;
        }else{
            $imageName= "default.png";
        }
        $data->alt=$request->alt;
        $data->ceosays=$request->ceosays;
        $data->paraceo=$request->paraceo;
        $data->save();
        Toastr::success('Ceo Image Upload!','Success!');
        return redirect('admin/ceo');die;
    }

    // public function edit($id){
    //     $banner=Banner::find($id);
    //     return view('backend.pages.banner.edit')->with(compact('banner'));
    // }

    // public function update(Request $request ,$id){
    //     $data=Banner::find($id);
    //     $request->validate([
    //        'image'=>'required|mimes:png,jpg,jpeg,gif|max:5000',
    //        'alt'=>'required',
    //     ]);
    //     if($request->hasFile('image'))
    //     {

    //     $image=$request->file('image');
    //     $currentDate=Carbon::now()->toDateString();
    //     if(Storage::disk('public')->exists('images/admin/banner'))
    //     {
    //        Storage::disk('public')->makeDirectory('images/admin/banner');
    //     }
    //     if(Storage::disk('public')->exists('images/admin/banner/'.$data->image))
    //     {
    //        Storage::disk('public')->delete('images/admin/banner/'.$data->image);
    //     }
    //     $imageName = Storage::disk('public')->put('images/admin/banner/',$image);
    //     $data->image=$imageName;
    //     }
    //     $data->alt=$request->alt;
    //     $data->save();
    //     Toastr::success('Banner Uploaded!','Success!');
    //     return redirect('admin/banner/index');die;
    // }

    public function ceodelete($id){
        $data= Ceo::find($id);
        if(Storage::disk('public')->exists('/storage/'.$data->image))
        {
           Storage::disk('public')->delete('/storage/'.$data->image);
        }
        $data->delete();
        Toastr::success('Ceo data Deleted!','Success!');
      return back();
    }
}
