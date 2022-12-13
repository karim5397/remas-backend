<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\ImageStoreTrait;

class BannerController extends Controller
{
    public function index()
    {
        $banners=Banner::orderBy('id','DESC')->paginate(10);
        return view('admin.banner.index' ,compact('banners'));
    }
    public function bannerStatus(Request $request)
    {
        if($request->mode=='true')
        {
             DB::table('banners')->where('id' , $request->id)->update(['status' => 'active']);
        }else{
             DB::table('banners')->where('id' , $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg'=>'Status Successfully Updated' , 'status' => true]);
    }
    public function create()
    {
        return view('admin.banner.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'required',
            'status'=>'required|in:active,inactive',
        ],
        [
            "title.required" => "Please enter the title",
            "photo.required" => "Please choose a photo",
            "status.required" => "Please choose banner status",
        ]);
        $data=$request->all();
        $image=ImageStoreTrait::storeImage($request->photo,$request->file('photo'),'frontend/assets/images/bg/',1920,800);
        $data['photo']=$image;
        $banner=Banner::create($data);
        if($banner){
            return redirect()->route('banner.index')->with('success','The banner created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    public function edit($id)
    {
        $banner=Banner::find($id);
        return view('admin.banner.edit',compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner=Banner::find($id);
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'sometimes',
            'status'=>'required|in:active,inactive',
        ],
        [
            "title.required" => "Please enter the title",
            "photo.sometimes" => "Please choose a photo",
            "status.required" => "Please choose banner status",
        ]);
        $data=$request->all();
        if($request->file('photo')){
            $old_image=$request->old_photo;
            $image=ImageStoreTrait::storeImage($request->photo,$request->file('photo'),'frontend/assets/images/bg/',1920,800);
            $data['photo']=$image;
            $banner->update($data);
            if($banner){
                if(file_exists($old_image)){
                    unlink($old_image);
                }
                return redirect()->route('banner.index')->with('success','The banner updated successfully');
            }else{
                return back()->with('error','Something went wrong');
            }
        }else{
            $banner->update($data);
            if($banner){
                return redirect()->route('banner.index')->with('success','The banner updated successfully');
            }else{
                return back()->with('error','Something went wrong');
            }
        }
    }

    public function destroy($id)
    {
        $banner=Banner::find($id);
        if($banner)
        {
            $old_image=$banner->photo;
            $banner->delete();
            if($old_image != null){
                if(file_exists($old_image)){
                    unlink($old_image);
                }
            }
           return redirect()->route('banner.index')->with('success' , 'The banner is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }
}
