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
            'vision_desc' => 'required|string',
            'mission_desc'=>'required|string',
            'value_desc'=>'required|string',
            'photo' => 'required',
            'page_title'=>'required',
        ],
        [
            "title.required" => "Please enter your the title",
            "description.required" => "Please enter the about description",
            "vision_desc.required" => "Please enter the vision description",
            "value_desc.required" => "Please enter the values description",
            "mission_desc.required" => "Please enter the mission description",
            "photo.required" => "Please choose a photo",
            "page_title.required" => "Please enter seo page title",
        ]);
        $data=$request->all();
        $image=ImageStoreTrait::storeMultiImage($request->file('photo'),'backend/assets/images/about/',500,600);
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
            'vision_desc' => 'required|string',
            'mission_desc'=>'required|string',
            'value_desc'=>'required|string',
            'photo' => 'sometimes',
            'page_title'=>'required',
        ],
        [
            "title.required" => "Please enter your the title",
            "description.required" => "Please enter the about description",
            "vision_desc.required" => "Please enter the vision description",
            "value_desc.required" => "Please enter the values description",
            "mission_desc.required" => "Please enter the mission description",
            "photo.sometimes" => "Please choose a photo",
            "page_title.required" => "Please enter seo page title",
        ]);
        $data=$request->all();
        if($request->file('photo')){
            $image=ImageStoreTrait::storeMultiImage($request->file('photo'),'backend/assets/images/about/',500,600);
            $data['photo']=$image;
            $old_image=explode(',',$request->old_photo);
            foreach($old_image as $img){
                unlink($img);
            }
            $about->update($data);
            if($about)
            {
                return redirect()->route('about.index')->with('success' , 'The about updated');
            }else{

                return redirect()->back()->with('error' , 'Something Went Wrong');
            }
        }else{
            $about->update($data);
            if($about)
            {
                return redirect()->route('about.index')->with('success' , 'The about updated');
            }else{

                return redirect()->back()->with('error' , 'Something Went Wrong');
            }
        }
    }
    public function destroy($id)
    {
        if($about=AboutUs::find($id))
        {
           $about->delete();
           $old_image=explode(',',$about->photo);
           foreach($old_image as $img){
               unlink($img);
           }
           return redirect()->route('about.index')->with('success' , 'The about is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }
}
