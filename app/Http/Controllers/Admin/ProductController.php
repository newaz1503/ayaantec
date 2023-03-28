<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class ProductController extends Controller
{
    public function index(){
        $products= Product::get();
        return view('backend.pages.product.index')->with(compact('products'));
    }
    public function create(Request $request){
        if($request->isMethod('post')){
        $data=new Product;
        $request->validate([
            'image'=>'image|required',
            'name'=>'required',
            'details'=>'required',
        ]);
        if($request->hasFile('image'))
        {

        $image=$request->file('image');
        $currentDate=Carbon::now()->toDateString();
        $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
        if(!Storage::disk('public')->exists('images/admin/product/'.$data->image))
        {
           Storage::disk('public')->makeDirectory('images/admin/product/'.$data->image);
        }
        $productImage = Image::make($image)->resize(1500,1000)->stream();
        Storage::disk('public')->put('images/admin/product/'.$imageName,$productImage);
        $data->image=$imageName;
        }else{
            $imageName= "default.png";
        }
        $data->name=$request->name;
        $data->details=$request->details;
        $data->status=1;
        $data->save();
        Toastr::success('Uploaded!','Success!');
        return redirect('admin/product/index');die;
      }
      return view('backend.pages.product.add');
    }

    public function edit($id){
        $product=Product::find($id);
        return view('backend.pages.product.edit')->with(compact('product'));
    }

    public function update(Request $request ,$id){
        $data=Product::find($id);
        $request->validate([
            'image'=>'image|max:5000',
            'name'=>'required',
            'details'=>'required',
        ]);
        if($request->hasFile('image'))
        {

        $image=$request->file('image');
        $currentDate=Carbon::now()->toDateString();
        $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
        if(Storage::disk('public')->exists('images/admin/product'))
        {
           Storage::disk('public')->makeDirectory('images/admin/product');
        }
        if(Storage::disk('public')->exists('images/admin/product/'.$data->image))
        {
           Storage::disk('public')->delete('images/admin/product/'.$data->image);
        }
        $productImage = Image::make($image)->resize(1500,1000)->stream();
        Storage::disk('public')->put('images/admin/product/'.$imageName,$productImage);
        $data->image=$imageName;
        }
        $data->name=$request->name;
        $data->details=$request->details;
        $data->save();
        Toastr::success('Updated!','Success!');
        return redirect("admin/product/index");die;
    }
    public function updateProductStatus(Request $request){
        if($request->ajax()){
            $data= $request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            Product::where('id',$data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id'=>$data['product_id']]);
        }
    }
    public function delete($id){
        $data= Product::find($id);
        if(Storage::disk('public')->exists('images/admin/product/'.$data->image))
        {
           Storage::disk('public')->delete('images/admin/product/'.$data->image);
        }
        $data->delete();
        Toastr::success('Deleted!','Success!');
      return redirect()->back();die;
    }
}
