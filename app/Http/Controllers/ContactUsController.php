<?php

namespace App\Http\Controllers;

use App\Exports\ExportMessage;
use App\Models\Message;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts=ContactUs::orderBy('id','DESC')->paginate(10);
        return view('admin.contact.index' ,compact('contacts'));
    }
    public function create()
    {
        return view('admin.contact.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'head_phone' => 'required|string|max:255',
            'head_email' => 'required|string|max:255',
            'head_address' => 'required',
            'head_openinig_time' => 'required',
            'branch_phone'=>'nullable|string|max:255',
            'branch_email'=>'nullable|string|max:255',
            'branch_address'=>'nullable',
            'branch_opening_time'=>'nullable',
        ],
        [
            "head_phone.required" => "Please enter the head office phone",
            "head_email.required" => "Please enter the head office email",
            "head_address.required" => "Please enter the head office address",
            "head_openinig_time.required" => "Please enter the opening time",
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
            'head_phone' => 'required|string|max:255',
            'head_email' => 'required|string|max:255',
            'head_address' => 'required',
            'head_openinig_time' => 'required',
        ],
        [
            "head_phone.required" => "Please enter the head office phone",
            "head_email.required" => "Please enter the head office email",
            "head_address.required" => "Please enter the head office address",
            "head_openinig_time.required" => "Please enter the opening time",
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
