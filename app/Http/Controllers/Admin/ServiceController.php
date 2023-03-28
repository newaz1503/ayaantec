<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ServiceController extends Controller
{
    public function index(){
        $services= Service::get();
        return view('backend.pages.Services.index')->with(compact('services'));
    }
    public function create(Request $request){
        if($request->isMethod('post')){
            $data=new Service;
            $request->validate([
                'name'=>'required',
                'details'=>'required',
            ]);
            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $currentDate=Carbon::now()->toDateString();
                $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                if(!Storage::disk('public')->exists('images/admin/services/'.$data->image))
                {
                    Storage::disk('public')->makeDirectory('images/admin/services/'.$data->image);
                }
                $NewsImage = Image::make($image)->resize(512,512)->stream();
                Storage::disk('public')->put('images/admin/services/'.$imageName,$NewsImage);
                $data->image=$imageName;
            }else{
                $imageName= "default.png";
            }
            
            $data->name=$request->name;
            $data->details=$request->details;
            $data->status=1;
            $data->save();
            Toastr::success('Uploaded!','Success!');
            return redirect('admin/services/index');die;
        }
        
        $items= Service::get();
        return view('backend.pages.Services.add')->with(compact('items'));

    }
    

    public function Edit(Request $request, $id){
      $service= Service::find($id);
      if($request->isMethod('post')){
        $request->validate([
            'name'=>'required',
            'details'=>'required',
             
        ]);
       if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $currentDate=Carbon::now()->toDateString();
            $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(Storage::disk('public')->exists('images/admin/services'))
            {
               Storage::disk('public')->makeDirectory('images/admin/services');
            }
            if(Storage::disk('public')->exists('images/admin/services/'.$service->image))
            {
               Storage::disk('public')->delete('images/admin/services/'.$service->image);
            }
                $newsImage = Image::make($image)->resize(512,512)->stream();
                Storage::disk('public')->put('images/admin/services/'.$imageName,$newsImage);
                $service->image=$imageName;
            }else{
                $imageName= $service->image;
            }
       
            $service->name=$request->name;
            $service->details=$request->details;
            $service->status=1;
            $service->save();
            Toastr::success("Updated successfully!" ,'Success!');
            return redirect('admin/services/index');die;
         }
            return view('backend.pages.Services.edit',compact('service'));
    }
    public function updateServiceStatus(Request $request){
        if($request->ajax()){
            $data= $request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            Service::where('id',$data['service_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id'=>$data['service_id']]);
        }

    }
    public function delete($id){
        // Services::where('parent_id',$id)->delete();
        Service::find($id)->delete();
        Toastr::success("Deleted!",'Success!');
        return redirect('admin/services/index');die;
    }
}
