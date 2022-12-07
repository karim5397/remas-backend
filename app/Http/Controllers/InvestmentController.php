<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use App\Models\Decision;
use App\Models\DetailsShare;
use App\Models\Director;
use App\Models\Disclosure;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{

    //financial reports section

    public function financeShow()
    {
        $finances=Finance::latest()->paginate(10);
        return view('admin.investment.financial_reports' ,compact('finances'));
    }
    public function financeStore(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'year' => 'required',
            'file' => 'required|mimes:pdf|file|max:5000',
        ],
        [
            "title.required" => "Please enter  title",
            "year.required" => "Please enter  year",
            "file.required" => "Please choose a file",
        ]);
        if($request->hasFile('file')){
            $file_uniqi=hexdec(uniqid()).'.'.$request->file->getClientOriginalExtension();
            $path="frontend/assets/media/files/";
            $file_name=$path.$file_uniqi;
            $request->file->move($path, $file_uniqi);
        }
        $data=$request->all();
        $data['file']=$file_name;

        $finance=Finance::create($data);
        if($finance){
            return redirect()->route('finance.show')->with('success','Created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function financeDestroy($id)
    {
        $finance=Finance::find($id);
        $old_file=$finance->file;
        if($finance){
            $finance->delete();
            unlink($old_file);
           return redirect()->route('finance.show')->with('success' , 'The finance is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }



    //board of directors section

    public function directorShow()
    {
        $directors=Director::latest()->paginate(10);
        return view('admin.investment.board_of _directors' ,compact('directors'));
    }
    public function directorStore(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'year' => 'required',
            'file' => 'required|mimes:pdf|file|max:5000',
        ],
        [
            "title.required" => "Please enter  title",
            "year.required" => "Please enter  year",
            "file.required" => "Please choose a file",
        ]);
        if($request->hasFile('file')){
            $file_uniqi=hexdec(uniqid()).'.'.$request->file->getClientOriginalExtension();
            $path="frontend/assets/media/files/";
            $file_name=$path.$file_uniqi;
            $request->file->move($path, $file_uniqi);
        }
        $data=$request->all();
        $data['file']=$file_name;

        $director=Director::create($data);
        if($director){
            return redirect()->route('director.show')->with('success','Created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function directorDestroy($id)
    {
        $director=Director::find($id);
        $old_file=$director->file;
        if($director){
            $director->delete();
            unlink($old_file);
           return redirect()->route('director.show')->with('success' , 'The director is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }


    //board of disclosure section

    public function disclosureShow()
    {
        $disclosures=Disclosure::latest()->paginate(10);
        return view('admin.investment.disclosures_reports' ,compact('disclosures'));
    }
    public function disclosureStore(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'year' => 'required',
            'file' => 'required|mimes:pdf|file|max:5000',
        ],
        [
            "title.required" => "Please enter  title",
            "year.required" => "Please enter  year",
            "file.required" => "Please choose a file",
        ]);
        if($request->hasFile('file')){
            $file_uniqi=hexdec(uniqid()).'.'.$request->file->getClientOriginalExtension();
            $path="frontend/assets/media/files/";
            $file_name=$path.$file_uniqi;
            $request->file->move($path, $file_uniqi);
        }
        $data=$request->all();
        $data['file']=$file_name;

        $disclosure=Disclosure::create($data);
        if($disclosure){
            return redirect()->route('disclosure.show')->with('success','Created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function disclosureDestroy($id)
    {
        $disclosure=Disclosure::find($id);
        $old_file=$disclosure->file;
        if($disclosure){
            $disclosure->delete();
            unlink($old_file);
           return redirect()->route('disclosure.show')->with('success' , 'The disclosure is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }


    //general decision section

    public function decisionShow()
    {
        $decisions=Decision::latest()->paginate(10);
        return view('admin.investment.general_assembly_decisions' ,compact('decisions'));
    }
    public function decisionStore(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'year' => 'required',
            'file' => 'required|mimes:pdf|file|max:5000',
        ],
        [
            "title.required" => "Please enter  title",
            "year.required" => "Please enter  year",
            "file.required" => "Please choose a file",
        ]);
        if($request->hasFile('file')){
            $file_uniqi=hexdec(uniqid()).'.'.$request->file->getClientOriginalExtension();
            $path="frontend/assets/media/files/";
            $file_name=$path.$file_uniqi;
            $request->file->move($path, $file_uniqi);
        }
        $data=$request->all();
        $data['file']=$file_name;

        $decision=Decision::create($data);
        if($decision){
            return redirect()->route('decision.show')->with('success','Created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function decisionDestroy($id)
    {
        $decision=Decision::find($id);
        $old_file=$decision->file;
        if($decision){
            $decision->delete();
            unlink($old_file);
           return redirect()->route('decision.show')->with('success' , 'The decision is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }

    //details of shares
    public function shareShow()
    {
        $shares=DetailsShare::latest()->paginate(10);
        return view('admin.investment.details_of_shares' ,compact('shares'));
    }
    public function shareStore(Request $request)
    {
        $this->validate($request,[
            'instrument_type' => 'required',
            'par_value' => 'required',
            'issuances_details' => 'required',
            'number_shares' => 'required',
            'financial_year' => 'required',
        ],
        [
            "instrument_type.required" => "Please enter  instrument type",
            "par_value.required" => "Please enter  value",
            "issuances_details.required" => "Please enter  issuances details",
            "number_shares.required" => "Please enter  number of shares",
            "financial_year.required" => "Please enter financial year",
        ]);
        $data=$request->all();
        $share=DetailsShare::create($data);
        if($share){
            return redirect()->route('share.show')->with('success','Created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    public function shareUpdate(Request $request ,$id)
    {
        $share=DetailsShare::find($id);
        $this->validate($request,[
            'instrument_type' => 'required',
            'par_value' => 'required',
            'issuances_details' => 'required',
            'number_shares' => 'required',
            'financial_year' => 'required',
        ],
        [
            "instrument_type.required" => "Please enter  instrument type",
            "par_value.required" => "Please enter  value",
            "issuances_details.required" => "Please enter  issuances details",
            "number_shares.required" => "Please enter  number of shares",
            "financial_year.required" => "Please enter financial year",
        ]);
        $data=$request->all();
        $share->update($data);
        if($share){
            return redirect()->route('share.show')->with('success','Updated successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function shareDestroy($id)
    {
        $share=DetailsShare::find($id);
        if($share){
            $share->delete();
           return redirect()->route('share.show')->with('success' , 'The share is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }

}
