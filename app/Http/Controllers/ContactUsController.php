<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Exports\ExportMessage;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts=ContactUs::orderBy('id','DESC')->paginate(10);
        return view('admin.contact.index' ,compact('contacts'));
    }
    public function contactStatus(Request $request)
    {
        if($request->mode=='true')
        {
             DB::table('contact-us')->where('id' , $request->id)->update(['status' => 'active']);
        }else{
             DB::table('contact-us')->where('id' , $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['status' => true]);
    }
    public function create()
    {
        return view('admin.contact.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'address' => 'required',
            'map_url' => 'required',
            'status'=>'required|in:active,inactive',
        ],
        [
            "title.required" => "Please enter the  title",
            "phone.required" => "Please enter the  phone",
            "email.required" => "Please enter the  email",
            "address.required" => "Please enter the  address",
            "map_url.required" => "Please enter the map url",
            "status.required" => "Please choose the status",
        ]);
        $data=$request->all();
        $contact=ContactUs::create($data);
        if($contact){
            return redirect()->route('contact.index')->with('success','The contact created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function edit($id)
    {
        $contact=ContactUs::find($id);
        return view('admin.contact.edit',compact('contact'));
    }
    public function update(Request $request, $id)
    {
        $contact=ContactUs::find($id);
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'address' => 'required',
            'map_url' => 'required',
            'status'=>'required|in:active,inactive',
        ],
        [
            "title.required" => "Please enter the  title",
            "phone.required" => "Please enter the  phone",
            "email.required" => "Please enter the  email",
            "address.required" => "Please enter the  address",
            "map_url.required" => "Please enter the map url",
            "status.required" => "Please choose the status",
        ]);
        $data=$request->all();
        $contact->update($data);
        if($contact){
            return redirect()->route('contact.index')->with('success','The contact updated successfully');
        }else{
            return back()->with('error','Something went wrong');
        }
    }
    public function destroy($id)
    {
        $contact=ContactUs::find($id);
        if($contact)
        {
            $contact->delete();
           return redirect()->route('contact.index')->with('success' , 'The contact is deleted');
        }else{

            return back()->with('error' , 'Something Went Wrong');
        }
    }

    public function clientMessage()
    {
        $messages=Message::latest()->paginate(10);
        return view('admin.contact.client_message',compact('messages'));
    }
    public function deleteMessage($id)
    {
        $message=Message::find($id);
        $message->delete();
        if($message){
            return back()->with('success' , 'the message deleted successfully');
        }else{
            return back()->with('error' , 'Something went wrong');
        }
    }
    public function exportMessage(Request $request){
        return Excel::download(new ExportMessage, 'message.xlsx');
    }
}
