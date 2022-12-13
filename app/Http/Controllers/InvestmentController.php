<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Finance;
use App\Models\Decision;
use App\Models\Director;
use App\Models\Disclosure;
use App\Models\Government;
use App\Models\DetailsShare;
use Illuminate\Http\Request;
use App\Models\BoardStructure;
use App\Models\FollowUpReport;
use App\Models\Remedies;

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
        $finance->delete();
        if($finance){
              if(file_exists($old_file)){
                unlink($old_file);
            }
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
        $director->delete();
        if($director){
              if(file_exists($old_file)){
                unlink($old_file);
            }
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
        $disclosure->delete();
        if($disclosure){
              if(file_exists($old_file)){
                unlink($old_file);
            }
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
        $decision->delete();
        if($decision){
              if(file_exists($old_file)){
                unlink($old_file);
            }
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
   
    public function shareUpdate(Request $request ,$id)
    {
        $share=DetailsShare::find($id);
        $this->validate($request,[
            'founding_date' => 'required',
            'followed_law' => 'required',
            'purpose' => 'required',
            'company_branches' => 'required',
            'stock_market_date' => 'required',
            'version_number' => 'required',
            'par_value' => 'required',
            'number_shares' => 'required',
            'issued_capital' => 'required',
            'authorized_capital' => 'required',
            'financial_year' => 'required',
            'external_auditor' => 'required',
            'vision_mission' => 'required',
        ],
        [
            "founding_date.required" => "Please enter  founding date",
            "followed_law.required" => "Please enter  followed law",
            "purpose.required" => "Please enter  purpose",
            "company_branches.required" => "Please enter  company branches",
            "stock_market_date.required" => "Please enter  stock market date",
            "version_number.required" => "Please enter  version number",
            "par_value.required" => "Please enter  par value",
            "number_shares.required" => "Please enter  number shares",
            "issued_capital.required" => "Please enter  issued capital",
            "authorized_capital.required" => "Please enter  authorized capital",
            "financial_year.required" => "Please enter  financial year",
            "external_auditor.required" => "Please enter  external auditor",
            "vision_mission.required" => "Please enter  vision mission",
           
        ]);
        $data=$request->all();
        $share->update($data);
        if($share){
            return redirect()->route('share.show')->with('success','Updated successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    //board structure
    public function boardStructureShow()
    {
        $structures=BoardStructure::latest()->paginate(15);
        return view('admin.investment.board_structure' ,compact('structures'));
    }
    public function boardStructureStore(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'company_name' => 'nullable|string',
            'position' => 'required|string',
            'type' => 'required|in:director,member',
        ],
        [
            "name.required" => "Please enter name",
            "position.required" => "Please enter position",
            "type.required" => "Please choose type",
        ]);
        $data=$request->all();
        $structure=BoardStructure::create($data);
        if($structure){
            return redirect()->route('structure.show')->with('success','Created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    public function boardStructureUpdate(Request $request ,$id)
    {
        $structure=BoardStructure::find($id);
        $this->validate($request,[
            'name' => 'required|string',
            'company_name' => 'nullable|string',
            'position' => 'required|string',
            'type' => 'required|in:director,member',
        ],
        [
            "name.required" => "Please enter name",
            "position.required" => "Please enter position",
            "type.required" => "Please choose type",
        ]);
        $data=$request->all();
        $structure->update($data);
        if($structure){
            return redirect()->route('structure.show')->with('success','Updated successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function boardStructureDestroy($id)
    {
        $structure=BoardStructure::find($id);
        if($structure){
            $structure->delete();
           return redirect()->route('structure.show')->with('success' , 'Deleted Successfully');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }

    //Governance reports section

    public function governmentShow()
    {
        $governments=Government::latest()->paginate(10);
        return view('admin.investment.governance_reports' ,compact('governments'));
    }
    public function governmentStore(Request $request)
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

        $government=Government::create($data);
        if($government){
            return redirect()->route('government.show')->with('success','Created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function governmentDestroy($id)
    {
        $government=Government::find($id);
        $old_file=$government->file;
        $government->delete();
        if($government){
              if(file_exists($old_file)){
                unlink($old_file);
            }
           return redirect()->route('government.show')->with('success' , 'The government is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }


    //Follow up committee reports section

    public function follow_upShow()
    {
        $follow_ups=FollowUpReport::latest()->paginate(10);
        return view('admin.investment.follow_up_committee_reports' ,compact('follow_ups'));
    }
    public function follow_upStore(Request $request)
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

        $follow_up=FollowUpReport::create($data);
        if($follow_up){
            return redirect()->route('follow_up.show')->with('success','Created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function follow_upDestroy($id)
    {
        $follow_up=FollowUpReport::find($id);
        $old_file=$follow_up->file;
        $follow_up->delete();
        if($follow_up){
              if(file_exists($old_file)){
                unlink($old_file);
            }
           return redirect()->route('follow_up.show')->with('success' , 'The follow_up is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }


    //Remedies section

    public function remediesShow()
    {
        $all_remedies=Remedies::latest()->paginate(10);
        return view('admin.investment.remedies' ,compact('all_remedies'));
    }
    public function remediesStore(Request $request)
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

        $remedies=Remedies::create($data);
        if($remedies){
            return redirect()->route('remedies.show')->with('success','Created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function remediesDestroy($id)
    {
        $remedies=Remedies::find($id);
        $old_file=$remedies->file;
        $remedies->delete();
        if($remedies){
              if(file_exists($old_file)){
                unlink($old_file);
            }
           return redirect()->route('remedies.show')->with('success' , 'The remedies is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }


    //Advertisement section

    public function advertisementShow()
    {
        $advertisements=Advertisement::latest()->paginate(10);
        return view('admin.investment.advertisement' ,compact('advertisements'));
    }
    public function advertisementStore(Request $request)
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

        $advertisement=Advertisement::create($data);
        if($advertisement){
            return redirect()->route('advertisement.show')->with('success','Created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function advertisementDestroy($id)
    {
        $advertisement=Advertisement::find($id);
        $old_file=$advertisement->file;
        $advertisement->delete();
        if($advertisement){
              if(file_exists($old_file)){
                unlink($old_file);
            }
           return redirect()->route('advertisement.show')->with('success' , 'The advertisement is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }

}
