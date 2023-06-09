<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;
use Session;

class AdminController extends Controller
{
    public function index(){
        return view('backend.pages.index');
    }
    public function login(Request $request){
        if($request->isMethod('post')){
            $data= $request->all();
            if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password'], 'status'=>1])){
                // dd('ture',Auth::guard('admin'));
                Toastr::success('Loggedin Successfully!','Success!');
                return redirect('admin/dashboard');die;

            }else{
                // dd('else',Auth::guard('admin'));
                Toastr::error('Incorrect email And password!','Sorry!');
                return redirect()->back();die;
            }
        }
        return view('backend.pages.login');
    }



    public function printdata (Request $request){
       if($request->isMethod('post')){
        $text = $request->alt;
       // return $request->all();
         return view('backend.pages.admin.print-page', compact('text'));
       } else {
          return view('backend.pages.admin.print-form');
       }

    }





    public function money_receipt (Request $request){
       if($request->isMethod('post')){
        $to = $request->to;
        $amount = $request->amount;
        $for = $request->work;
        $current_balance = $request->current_balance;
        $payable_amount = $request->payable_amount;
        $due = $request->due;
        $method = $request->method;
        $receiver = $request->receipt_by;
        $rnumber = $request->rnumber;
        $date = $request->date;
       // return $request->all();
         return view('backend.pages.admin.money_receipt_view', compact('to', 'amount', 'for', 'current_balance', 'payable_amount', 'due', 'method', 'receiver', 'date', 'rnumber'));
       } else {
          return view('backend.pages.admin.money_receipt');
       }

    }


    public function logout(){
        Auth::guard('admin')->logout();
        Toastr::success('Success!', ' Signed out!');
        return redirect('/admin');
    }

    public function all_users(){
       $users= Admin::all()->toArray();
       return view('backend.pages.admin.all-admin')->with(compact('users'));
    }
    public function add_user(Request $request){
          if($request->isMethod('post')){
            $request->validate([
                'email' => 'required|email|unique:admins',
                'name' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,svg|max:1024',
                'mobile' => 'required',
                'type' => 'required',
                'password' => 'required',
            ]);
            $data= $request->all();
            if($request->hasFile('image'))
            {

             $image=$request->file('image');
             $currentDate=Carbon::now()->toDateString();
             $imageName=$currentDate.'-'.uniqid().$image->getClientOriginalExtension();

             if(!Storage::disk('public')->exists('images/admin/avatar'))
             {
                Storage::disk('public')->makeDirectory('images/admin/avatar');
             }
             $profileImage = Image::make($image)->resize(400,400)->stream();
             Storage::disk('public')->put('images/admin/avatar/'.$imageName,$profileImage);
            }else{
                $imageName= "user.png";
            }
            $admin = New Admin;
            $admin->name=$data['name'];
            $admin->email=$data['email'];
            $admin->mobile=$data['mobile'];
            $admin->type=$data['type'];
            $admin->password=bcrypt($data['password']);
            $admin->image=$imageName;
            $admin->status=1;
            $admin->save();
            Session::set('auth_user_name', $data['name']);
            Toastr::success('New user added!','Success!');
            return redirect('admin/all-users');die;

        }
        return view('backend.pages.admin.add');
    }
    public function edit_user(Request $request, $id){
        $user= Admin::find($id);
        // dd($user);
        if($request->isMethod('post')){
           $data= $request->all();
            $request->validate([
                'name' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,svg|max:1024',
                'mobile' => 'required',
            ]);
           if($request->hasFile('image'))
           {

            $image=$request->file('image');
            $currentDate=Carbon::now()->toDateString();
            $imageName=$currentDate.'-'.uniqid().$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('images/admin/avatar'))
            {
               Storage::disk('public')->makeDirectory('images/admin/avatar');
            }
            if(Storage::disk('public')->exists('images/admin/avatar'.$user->image))
            {
            Storage::disk('public')->delete('images/admin/avatar'.$user->image);
            }
            $profileImage = Image::make($image)->resize(400,400)->stream();
            Storage::disk('public')->put('images/admin/avatar/'.$imageName,$profileImage);
           }else{
               $imageName=$user->image;
           }

           $user->name=$data['name'];
           if(isset($data['email'])){
            $user->email=$data['email'];
           }
           $user->mobile=$data['mobile'];
           if(!empty($data['password'])){
            $user->password=bcrypt($data['password']);
           }
           $user->image=$imageName;
           $user->status=1;
           $user->update();
           Toastr::success('User info updated!','Success!');
           return redirect('admin/all-users');die;
        };
        return view('backend.pages.admin.edit')->with(compact('user'));
    }
    public function updateUserStatus(Request $request){
        if($request->ajax()){
            $data= $request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            Admin::where('id',$data['user_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id'=>$data['user_id']]);
        }
    }
   public function delete_user($id){
       $user= Admin::find($id);
       if(Storage::disk('public')->exists('images/admin/avatar'.$user->image))
       {
       Storage::disk('public')->delete('images/admin/avatar'.$user->image);
       }
       $user->delete();
       Toastr::success('User deleted!','Success!');
       return redirect('admin/all-users');die;
   }
   public function settings(Request $request, $id){
       $user=Admin::find($id);
       if($request->isMethod('post')){
           $data=$request->all();
        //    dd($data);
          if(!Hash::check($data['old'],$user['password'])){
            Toastr::error('Current password is incorrect!','Sorry!');
            return redirect()->back();die;
          }else{
            $user->update(['password'=>Hash::make($data['confirm'])]);
            // Auth::guard('admin')->logout();
            Toastr::success('Password updated!','Success!');
            return redirect()->back();die;
          }
       }
       return view('backend.pages.admin.setting')->with(compact('user'));
   }


   public function view(){
	$menus = DB::table('menubar')->get();
	return view('backend.menubar.view_menu',compact('menus'));
     }

   public function add(){
	return view('backend.menubar.add_menu');
   }

   public function store(Request $request){
	    $validated = $request->validate([
              'name' => 'required',
    	    ]);

	   $data = array();
  	   $data['name'] = $request->name;
	   $data['url'] = $request->url;
	   DB::table('menubar')->insert($data);
	   return redirect()->route('view_menu');

	}

	public function edit($id){
		$editData = DB::table('menubar')->where('id',$id)->first();
		return view('backend.menubar.edit_menu',compact('editData'));
	}

	public function update(Request $request, $id){
	   $data = array();
  	   $data['name'] = $request->name;
	   $data['url'] = $request->url;
	   DB::table('menubar')->where('id',$id)->update($data);
	   return redirect()->route('view_menu');
	}

	public function delete($id){
	   DB::table('menubar')->where('id',$id)->delete();
	   return redirect()->back();

	}



}
