<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads=Download::orderBy('id','DESC')->paginate(10);
        return view('admin.download.index' ,compact('downloads'));
    }


    public function create()
    {
        return view('admin.download.create');

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:pdf,xlsx,docx',
            'title' => 'required|string|max:255',
        ],
        [
            "file.required" => "Please enter the download url ",
            "title.required" => "Please enter the download title",
        ]);
        if($request->hasFile('file')){
            $file_uniqi=hexdec(uniqid()).'.'.$request->file->getClientOriginalExtension();
            $path="backend/assets/files/";
            $file_name=$path.$file_uniqi;
            $request->file->move($path, $file_uniqi);
        }
        $data=$request->all();
        $data['file']=$file_name;

        $download=Download::create($data);
        if($download){
            return redirect()->route('download.index')->with('success','The download created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    public function edit($id)
    {
        $download=Download::find($id);
        return view('admin.download.edit',compact('download'));
    }

    public function update(Request $request, $id)
    {
        $download=Download::find($id);
        $this->validate($request,[
            'file' => 'somtimes|mimes:pdf,xlsx,docx',
            'title' => 'required|string|max:255',
        ],
        [
            "file.somtimes" => "Please enter the download url ",
            "title.required" => "Please enter the download title",
        ]);
        if($request->hasFile('file')){
            $file_uniqi=hexdec(uniqid()).'.'.$request->file->getClientOriginalExtension();
            $path="backend/assets/files/";
            $file_name=$path.$file_uniqi;
            $request->file->move($path, $file_uniqi);
            $data=$request->all();
            $data['file']=$file_name;
        }else{
            $data=$request->all();
        }
        $download->update($data);
        if($download){
            return redirect()->route('download.index')->with('success','The download updated successfully');
        }else{
            return back()->with('error','Something went wrong');
        }
    }

    public function destroy($id)
    {
        $download=Download::find($id);
        if($download)
        {
            $download->delete();
           return redirect()->route('download.index')->with('success' , 'The download is deleted');
        }else{

            return back()->with('error' , 'Something Went Wrong');
        }
    }
}
