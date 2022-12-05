<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Traits\ImageStoreTrait;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates=Certificate::latest()->paginate(10);
        return view('admin.certificates.index' ,compact('certificates'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'photo' => 'required',
        ],
        [
            "photo.required" => "Please choose a photo",
        ]);
        $data=$request->all();
        $image=ImageStoreTrait::storeImage($request->photo,$request->file('photo'),'frontend/assets/images/certificates/',1200,800);
        $data['photo']=$image;
        $certificate=certificate::create($data);
        if($certificate){
            return redirect()->route('certificate.index')->with('success','The certificate created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function destroy($id)
    {
        $certificate=certificate::find($id);
        if($certificate)
        {
            $old_image=$certificate->photo;
            $certificate->delete();
            if($old_image != null){
                unlink($old_image);
            }
           return redirect()->route('certificate.index')->with('success' , 'The certificate is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }
}
