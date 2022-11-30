<?php

namespace App\Http\Controllers\frontend;

use App\Models\News;
use App\Models\Team;
use App\Models\Video;
use App\Models\Banner;
use App\Models\Career;
use App\Models\AboutUs;
use App\Models\Message;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Chairman;
use App\Models\Download;
use App\Models\ContactUs;
use App\Models\Statistics;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use App\Models\BusinessLines;
use App\Models\CareerApllies;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        // $about=AboutUs::first();
        // $statics=Statistics::orderBy('id','DESC')->get();
        // $banners=Banner::limit(5)->get();
        // $services=Service::orderBy('id','DESC')->get();
        // $projects=Project::orderBy('id','DESC')->get();
        // $business_lines=BusinessLines::orderBy('id','DESC')->get();
        return view('frontend.index');
    }
    public function contactUs()
    {
        $contact=ContactUs::first();
        return view('frontend.pages.contact' ,compact('contact'));
    }
    public function clientMessage(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|string',
            'company_name' => 'required|string',
            'phone' => 'required|string',
            'position' => 'required|string',
            'subject' => 'required|string',
            'message' => 'nullable|string',
        ]);
        $data=$request->all();
        $message=Message::create($data);
        if($message){
            return back()->with('success' , 'message send successfully');
        }else{
            return back()->with('error' , 'please try again');
        }

    }
    public function aboutUs()
    {
        $about=AboutUs::first();
        $team=Team::first();
        return view('frontend.pages.about' ,compact('about','team'));
    }
    public function team()
    {
        $teams=Team::orderBy('id' , 'DESC')->limit(9)->get();
        return view('frontend.pages.team' ,compact('teams'));
    }
    public function news()
    {
        $news=News::orderBy('id' , 'DESC')->paginate(6);
        return view('frontend.pages.news.news' ,compact('news'));
    }
    public function newsDetails($id)
    {
        $news=News::find($id);
        $latest_news=News::orderBy('id','DESC')->latest()->limit(4)->get();
        return view('frontend.pages.news.single_news' ,compact('news','latest_news'));
    }
    public function career()
    {
        $careers=Career::where('status','active')->orderBy('id' , 'DESC')->paginate(8);
        return view('frontend.pages.career.careers' ,compact('careers'));
    }
    public function careerDetails($id)
    {
        $career=Career::find($id);
        return view('frontend.pages.career.career_details' ,compact('career'));
    }
    public function careerFilter(Request $request)
    {
        $careers=Career::query();
        if(!empty($request->job_types)){
            $job_types_array=$request->job_types;
            $careers=$careers->where('status' , 'active')->whereIn('job_type' ,$job_types_array);

        }

        if(!empty($request->positions)){
            $positions_array=$request->positions;
            $careers=$careers->where('status' , 'active')->whereIn('position' ,$positions_array);

        }

        if(empty($request->job_types) && empty($request->positions)){
            return redirect()->route('career');
        }
        Session::flash('job_types' , $request->job_types);
        Session::flash('positions' , $request->positions);
        $careers=$careers->where('status' , 'active')->orderBy('id' , 'DESC')->paginate(8);
        return view('frontend.pages.career.careers' ,compact('careers'));



    }
    public function jobApplied(Request $request)
    {
         $this->validate($request,[
            'cv' => 'required|mimes:csv,txt,xlx,xls,pdf',
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'position' => 'required|string',
            'message' => 'nullable|string',
        ]);
        if($request->hasFile('cv')){
            $file_uniqi=hexdec(uniqid()).'.'.$request->cv->getClientOriginalExtension();
            $path="backend/assets/cv/";
            $file_name=$path.$file_uniqi;
            $request->cv->move($path, $file_uniqi);
        }
        $data=$request->all();
        $data['cv']=$file_name;
        $applied=CareerApllies::create($data);
        if($applied){
            return back()->with('success' , 'You applied successfully');
        }else{
            return back()->with('error' , 'Please try again');
        }

    }
    public function video()
    {
        $videos=Video::orderBy('id' , 'DESC')->paginate(6);
        return view('frontend.pages.video',compact('videos'));
    }

    public function serviceDetails($id)
    {
        $service=Service::find($id);
        return view('frontend.pages.service' , compact('service'));
    }
    public function businessDetails($id)
    {
        $business_line=BusinessLines::find($id);
        $projects=Project::where(['status' => 'active' , 'business_id' => $id])->limit(6)->get();
        return view('frontend.pages.business_line' , compact('business_line','projects'));
    }

    public function chairman()
    {
        $chairman=Chairman::first();
        $about=AboutUs::first();
        return view('frontend.pages.chairman' , compact('chairman','about'));
    }

    public function projects()
    {
        $projects=Project::where('status' , 'active')->orderBy('id' ,'DESC')->paginate(6);
        $business_lines=BusinessLines::where('status','active')->get();
        $project_types=ProjectType::get();
        return view('frontend.pages.project.projects' , compact('projects','business_lines' ,'project_types'));
    }
    public function projectDetails($id)
    {
        $project=Project::find($id);
        return view('frontend.pages.project.project_details' , compact('project'));
    }
    public function search(Request $request)
    {
        $projects=Project::query();
        if(!empty($request->search)){
            $projects=$projects->where('title' ,'LIKE','%'.$request->search.'%');
        }
        if(empty($request->search)){
            return redirect()->route('projects');
        }
        $business_lines=BusinessLines::where('status','active')->get();
        $project_types=ProjectType::get();
        $projects=$projects->where('status' , 'active')->paginate(6);
        Session::flash('search',$request->search);
        return view('frontend.pages.project.projects' , compact('projects','business_lines' ,'project_types'));
    }
    public function projectFilter(Request $request)
    {
        $projects=Project::query();

        if(!empty($request->business)){
            $business_ids=$request->business;
            $projects=$projects->where('status' , 'active')->whereIn('business_id' ,$business_ids);

        }

        if(!empty($request->country)){
            $country_names=$request->country;
            $projects=$projects->where('status' , 'active')->whereIn('country' ,$country_names);

        }

        if(!empty($request->type)){
            $type_array=$request->type;
            foreach($type_array as $value){
                $item=$value;
            }

            $data=$projects->where('status' , 'active')->get();

            $project_ids=[];
            foreach($data as $value){
                $type=explode(',',$value->type_id);
                if(in_array($item ,$type)){
                    $project_ids[]=$value->id;
                }
            }

            $projects=$projects->where('status' , 'active')->whereIn('id',$project_ids);
        }

        if(empty($request->business) && empty($request->country) && empty($request->type)){
            return redirect()->route('projects');
        }
        Session::flash('business' ,$request->business);
        Session::flash('country' ,$request->country);
        Session::flash('type' ,$request->type);
        $projects=$projects->where('status' , 'active')->paginate(6);
        $business_lines=BusinessLines::where('status','active')->get();
        $project_types=ProjectType::get();
        return view('frontend.pages.project.projects' , compact('projects','business_lines' ,'project_types'));
    }


    public function downloadPage()
    {
        $downloads=Download::get();
        return view('frontend.pages.downloads',compact('downloads'));
    }

    public function downloadFile($id)
    {
        $file=Download::find($id);
        $myFile = public_path($file->file);
        return response()->download($myFile);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form') ;
    }
}
