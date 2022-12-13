<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Traits\ImageStoreTrait;

class AboutUsController extends Controller
{

    public function index()
    {
        $abouts=AboutUs::orderBy('id' ,'DESC')->paginate(10);
        return view('admin.about.index' ,compact('abouts'));
    }


    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required',
            'page_title'=>'required',
            'mission'=>'required|string',
            'vision'=>'required|string',
        ],
        [
            "title.required" => "Please enter your the title",
            "description.required" => "Please enter the about description",
            "photo.required" => "Please choose a photo",
            "page_title.required" => "Please enter seo page title",
            "mission.required" => "Please enter the mission",
            "vision.required" => "Please enter the vision",
        ]);
        $data=$request->all();
        $image=ImageStoreTrait::storeImage($request->photo,$request->file('photo'),'frontend/assets/images/bg/',700,500);
        $data['photo']=$image;
        $about=AboutUs::create($data);
        if($about){
            return redirect()->route('about.index')->with('success','The about created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function edit($id)
    {
        $about=AboutUs::find($id);
        return view('admin.about.edit',compact('about'));
    }
    public function update(Request $request, $id)
    {
        $about=AboutUs::find($id);
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'sometimes',
            'page_title'=>'required',
            'mission'=>'required|string',
            'vision'=>'required|string',
        ],
        [
            "title.required" => "Please enter your the title",
            "description.required" => "Please enter the about description",
            "mission.required" => "Please enter the mission",
            "vision.required" => "Please enter the vision",
            "photo.sometimes" => "Please choose a photo",
            "page_title.required" => "Please enter seo page title",
        ]);
        $data=$request->all();
        if($request->file('photo')){
            $old_image=$request->old_photo;
            $image=ImageStoreTrait::storeImage($request->photo,$request->file('photo'),'frontend/assets/images/bg/',700,500);
            $data['photo']=$image;
            $about->update($data);
            if($about){
                if(file_exists($old_image)){
                    unlink($old_image);
                }
                return redirect()->route('about.index')->with('success','The about updated successfully');
            }else{
                return back()->with('error','Something went wrong');
            }
        }else{
            $about->update($data);
            if($about){
                return redirect()->route('about.index')->with('success','The about updated successfully');
            }else{
                return back()->with('error','Something went wrong');
            }
        }
        
    }
    public function destroy($id)
    {
       
        $about=AboutUs::find($id);
        if($about)
        {
            $old_image=$about->photo;
            $about->delete();
            if($old_image != null){
                if(file_exists($old_image)){
                    unlink($old_image);
                }
            }
           return redirect()->route('about.index')->with('success' , 'The about is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }
}
