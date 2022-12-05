<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\ImageStoreTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users=User::orderBy('id','DESC')->paginate(10);
        Session::forget(['status', 'search']);
        return view('admin.user.index' ,compact('users'));
    }
    public function userStatus(Request $request)
    {
        if($request->mode=='true')
        {
             DB::table('users')->where('id' , $request->id)->update(['status' => 'active']);
        }else{
             DB::table('users')->where('id' , $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['status' => true]);
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'email|required|unique:users,email',
            'photo' => 'required',
            'status'=>'required|in:active,inactive',
            'password'=>'required|string|min:8',
        ],
        [
            "fist_name.required" => "Please enter your first name",
            "last_name.required" => "Please enter your last name",
            "email.required" => "Please enter your email",
            "photo.required" => "Please choose a photo",
            "status.required" => "Please choose user status",
            "password.required" => "Please enter your password and must more than 8 character",
        ]);
        $data=$request->all();
        $data['password']=Hash::make($request->password);
        $image=ImageStoreTrait::storeImage($request->photo,$request->file('photo'),'frontend/assets/images/users/',150,150);
        $data['photo']=$image;
        $user=User::create($data);
        if($user){
            return redirect()->route('user.index')->with('success','The user created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function edit($id)
    {
        $user=User::find($id);
        return view('admin.user.edit',compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $this->validate($request,[
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => "required|unique:users,email,{$id}",
            'photo' => 'sometimes',
            'status'=>'required|in:active,inactive',
        ],
        [
            "fist_name.required" => "Please enter your first name",
            "last_name.required" => "Please enter your last name",
            "email.required" => "Please enter your email",
            "photo.sometimes" => "Please choose a photo",
            "status.required" => "Please choose user status",
        ]);
        $data=$request->all();
        if($request->file('photo')){
            $old_image=$request->old_photo;
            $image=ImageStoreTrait::storeImage($request->photo,$request->file('photo'),'frontend/assets/images/users/',150,150);
            $data['photo']=$image;
            unlink($old_image);
            $user->update($data);
            if($user){
                return redirect()->route('user.index')->with('success','The user updated successfully');
            }else{
                return back()->with('error','Something went wrong');
            }
        }else{
            $user->update($data);
            if($user){
                return redirect()->route('user.index')->with('success','The user updated successfully');
            }else{
                return back()->with('error','Something went wrong');
            }
        }
    }
    public function destroy($id)
    {
        if(auth()->user()->id == $id){
            return back()->with('error' , "you can't delete this user because it's login");
        }else{

            $user=User::find($id);
            if($user){
                $old_image=$user->photo;
                $user->delete();
                if($old_image != null){
                    unlink($old_image);
                }
               return redirect()->route('user.index')->with('success' , 'The user is deleted');
            }else{
                return back()->with('error' , 'Something Went Wrong');
            }
        }
    }
    public function search(Request $request)
    {
        $data=User::query();
        if(request('search')){
            $data->where('first_name','LIKE','%'.$request['search'].'%')
            ->orWhere('last_name','LIKE','%'.$request['search'].'%')
            ->orWhere('email','LIKE','%'.$request['search'].'%')->paginate(10);
        }
        if(request('status')){
            $data->where('status' , $request->status)->paginate(10);
        }
        $users=$data->paginate(10);
        Session::flash('search',$request->search);
        Session::flash('status',$request->status);
        return view('admin.user.index' ,compact('users'));
    }
}
