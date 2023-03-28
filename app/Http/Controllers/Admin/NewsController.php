<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(){
        $newses= News::get();
        return view('backend.pages.news.index')->with(compact('newses'));
    }
    public function add(Request $request){
        if($request->isMethod('post')){
            $data=new News;
            $request->validate([
                'image'=>'required|mimes:png,jpg,jpeg|max:1024',
                'name'=>'required',
                'details'=>'required',
            ]);
            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $currentDate=Carbon::now()->toDateString();
                $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                if(!Storage::disk('public')->exists('images/admin/news/'.$data->image))
                {
                Storage::disk('public')->makeDirectory('images/admin/news/'.$data->image);
                }
                $NewsImage = Image::make($image)->resize(1200,900)->stream();
                Storage::disk('public')->put('images/admin/news/'.$imageName,$NewsImage);
                $data->image=$imageName;
            }else{
                $imageName= "default.png";
            }
            $data->name=$request->name;
            $data->details=$request->details;
            $data->status=1;
            $data->save();
            Toastr::success('News Uploaded!','Success!');
            return redirect('admin/news/index');die;
        }
        
        return view('backend.pages.news.add');

    }

    public function edit(Request $request, $id){
      $news= News::find($id);
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
        if(Storage::disk('public')->exists('images/admin/news'))
        {
           Storage::disk('public')->makeDirectory('images/admin/news');
        }
        if(Storage::disk('public')->exists('images/admin/news/'.$news->image))
        {
           Storage::disk('public')->delete('images/admin/news/'.$news->image);
        }
        $newsImage = Image::make($image)->resize(1200,900)->stream();
        Storage::disk('public')->put('images/admin/news/'.$imageName,$newsImage);
        $news->image=$imageName;
        }
        $news->name=$request->name;
        $news->details=$request->details;
        $news->status=1;
        $news->save();
        Toastr::success('News updated!','Success!');
        return redirect('admin/news/index');die;
      }
    return view('backend.pages.news.edit')->with(compact('news'));
    }
    public function updateNewsStatus(Request $request){
        if($request->ajax()){
            $data= $request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            News::where('id',$data['news_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id'=>$data['news_id']]);
        }

    }
    public function delete($id){
        $news=News::find($id);
        if(Storage::disk('public')->exists('images/admin/news/'.$news->image))
        {
           Storage::disk('public')->delete('images/admin/news/'.$news->image);
        }
        $news->delete();
        Toastr::success("Deleted!",'Success!');
        return redirect('admin/news/index');die;
    }
}
