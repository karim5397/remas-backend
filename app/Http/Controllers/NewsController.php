<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\ImageStoreTrait;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_news=News::orderBy('id','DESC')->paginate(10);
        return view('admin.news.index' ,compact('all_news'));
    }

    public function newsStatus(Request $request)
    {
        if($request->mode=='true')
        {
             DB::table('news')->where('id' , $request->id)->update(['status' => 'active']);
        }else{
             DB::table('news')->where('id' , $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg'=>'Status Successfully Updated' , 'status' => true]);
    }
    public function create()
    {
       return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required',
            'status'=>'required|in:active,inactive',
            'date'=>'required',
            // 'page_title'=>'required',
        ],
        [
            "title.required" => "Please enter the title",
            "description.required" => "Please enter the description",
            "date.required" => "Please enter the date",
            "photo.required" => "Please choose a photo",
            "status.required" => "Please choose news status",
            "page_title.required" => "Please enter seo page title",
        ]);
        $data=$request->all();
        $image=ImageStoreTrait::storeImage($request->photo,$request->file('photo'),'frontend/assets/images/news/',610,400);
        $data['photo']=$image;
        $news=News::create($data);
        if($news){
            return redirect()->route('news.index')->with('success','The news created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }


    public function edit($id)
    {
        $news=News::find($id);
        return view('admin.news.edit',compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news=News::find($id);
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'sometimes',
            'status'=>'required|in:active,inactive',
            'date'=>'required',
            // 'page_title'=>'required',

        ],
        [
            "fist_name.required" => "Please enter your first name",
            "last_name.required" => "Please enter your last name",
            "email.required" => "Please enter your email",
            "photo.sometimes" => "Please choose a photo",
            "status.required" => "Please choose news status",
            "page_title.required" => "Please enter seo page title",

        ]);
        $data=$request->all();
        if($request->file('photo')){
            $old_image=$request->old_photo;
            $image=ImageStoreTrait::storeImage($request->photo,$request->file('photo'),'frontend/assets/images/news/',640,400);
            $data['photo']=$image;
            unlink($old_image);
            $news->update($data);
            if($news){
                return redirect()->route('news.index')->with('success','The news updated successfully');
            }else{
                return back()->with('error','Something went wrong');
            }
        }else{
            $news->update($data);
            if($news){
                return redirect()->route('news.index')->with('success','The news updated successfully');
            }else{
                return back()->with('error','Something went wrong');
            }
        }
    }

    public function destroy($id)
    {
        $news=News::find($id);
        if($news)
        {
            $old_image=$news->photo;
            $news->delete();
            unlink($old_image);
           return redirect()->route('news.index')->with('success' , 'The news is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }
}
