<?php

namespace App\Http\Controllers\frontend;

use Carbon\Carbon;

use App\Models\News;
use App\Models\Banner;
use App\Models\AboutUs;
use App\Models\Finance;
use App\Models\Message;
use App\Models\Product;
use App\Models\Decision;
use App\Models\Director;
use App\Models\Download;
use App\Models\Remedies;
use App\Models\ContactUs;
use App\Models\Disclosure;
use App\Models\Government;
use App\Models\Certificate;
use App\Models\DetailsShare;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\BoardStructure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\FollowUpReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        $about=AboutUs::first();
        $banners=Banner::limit(3)->get();
        $all_news=News::limit(3)->get();
        $products=Product::latest()->limit(10)->get();
        return view('frontend.index' ,compact('about' , 'banners','all_news' , 'products'));
    }
    public function contactUs()
    {
        $contacts=ContactUs::get();
        return view('frontend.pages.contact' ,compact('contacts'));
    }
    public function inquery()
    {
        return view('frontend.pages.inquery_contact_form');
    }
    public function clientMessage(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|string',
            'company_name' => 'required|string',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'nullable|string',
        ],
        [
            'name.required' => 'ادخل الاسم',
            'email.required' => 'ادخل البريد الالكترونى',
            'company_name.required' => 'ادخل اسم الشركه',
            'phone.required' => 'ادخل الهاتف',
            'subject.required' => 'ادخل اسم الموضوع',
            'message.sometimes' => 'ادخل الرساله',
        ]);
        $data=$request->all();
        $message=Message::create($data);
        if($message){
            return back()->with('success' , 'تم ارسال الرساله بنجاح');
        }else{
            return back()->with('error' , 'برجاء المحاوله مره اخرى');
        }

    }
    public function certificate()
    {
        $certificates=Certificate::get();
        return view('frontend.pages.certificate' ,compact('certificates'));
    }
    public function aboutUs()
    {
        $about=AboutUs::first();
        return view('frontend.pages.about' ,compact('about'));
    }
  
    public function news()
    {
        $all_news=News::orderBy('id' , 'DESC')->paginate(6);
        return view('frontend.pages.news.news' ,compact('all_news'));
    }
    public function newsDetails($id)
    {
        $news=News::find($id);
        $latest_news=News::orderBy('id','DESC')->latest()->limit(4)->get();
        return view('frontend.pages.news.single_news' ,compact('news','latest_news'));
    }

    //investment part
    //1)financial reports [القوائم الماليه]
    public function finance()
    {
        $finances=Finance::where('year' , Carbon::now()->format('Y'))->get();
        Session::flash('year',Carbon::now()->format('Y'));
        return view('frontend.pages.investment.financial_reports' ,compact('finances'));
    }

    public function downloadFinanceFile($id)
    {
        $finance_file=Finance::find($id);
        return response()->download($finance_file->file);
    }
    
   
    public function financeFilter(Request $request)
    {
        
        if(!empty($request->year)){
            $year=$request->year;
            $finances=Finance::where('year' ,$year)->get();
            Session::flash('year',$year);
            return view('frontend.pages.investment.financial_reports' ,compact('finances'));
        }else{
            return redirect()->route('finance')->with('error' ,'برجاء اختيار فلتر');
        }
    }

    //2)general assembly decisions [قرارات الجمعيه العموميه]
    public function decision()
    {
        $decisions=Decision::where('year' , Carbon::now()->format('Y'))->get();
        Session::flash('year',Carbon::now()->format('Y'));
        return view('frontend.pages.investment.general_assembly_decisions' ,compact('decisions'));
    }

    public function downloadDecisionFile($id)
    {
        $decision_file=Decision::find($id);
        return response()->download($decision_file->file);
    }

    public function decisionFilter(Request $request)
    {
        
        if(!empty($request->year)){
            $year=$request->year;
            $decisions=Decision::where('year' ,$year)->get();
            Session::flash('year',$year);
            return view('frontend.pages.investment.general_assembly_decisions' ,compact('decisions'));
        }else{
            return redirect()->route('decision')->with('error' ,'برجاء اختيار فلتر');
        }
    }

    //3) disclosures reports [تقارير الافصاح]
    public function disclosure()
    {
        $disclosures=Disclosure::where('year' , Carbon::now()->format('Y'))->get();
        Session::flash('year',Carbon::now()->format('Y'));
        return view('frontend.pages.investment.disclosures_reports' ,compact('disclosures'));
    }

    public function downloadDisclosureFile($id)
    {
        $disclosure_file=Disclosure::find($id);
        return response()->download($disclosure_file->file);
    }

    public function disclosureFilter(Request $request)
    {
        
        if(!empty($request->year)){
            $year=$request->year;
            $disclosures=Disclosure::where('year' ,$year)->get();
            Session::flash('year',$year);
            return view('frontend.pages.investment.disclosures_reports' ,compact('disclosures'));
        }else{
            return redirect()->route('disclosure')->with('error' ,'برجاء اختيار فلتر');
        }
    }

    //4)board of directors [قرارات مجلس الاداره]
    public function director()
    {
        $directors=Director::where('year' , Carbon::now()->format('Y'))->get();
        Session::flash('year',Carbon::now()->format('Y'));
        return view('frontend.pages.investment.board_of _directors' ,compact('directors'));
    }

    public function downloadDirectorFile($id)
    {
        $director_file=Director::find($id);
        return response()->download($director_file->file);
    }

    public function directorFilter(Request $request)
    {
        
        if(!empty($request->year)){
            $year=$request->year;
            $directors=Director::where('year' ,$year)->get();
            Session::flash('year',$year);
            return view('frontend.pages.investment.board_of _directors' ,compact('directors'));
        }else{
            return redirect()->route('director')->with('error' ,'برجاء اختيار فلتر');
        }
    }

    //5)Details of shares [بيانات الاسهم]
    public function share()
    {
        $share=DetailsShare::first();
        return view('frontend.pages.investment.details_of_shares' ,compact('share'));
    }

    //6)board Structure [ تشكيل مجلس الاداره]
    public function boardStructure()
    {
        $structures_members=BoardStructure::where('type','member')->get();
        $structures_directors=BoardStructure::where('type','director')->get();
        return view('frontend.pages.investment.board_structure' ,compact('structures_members','structures_directors'));
    }

    //7) advertisement [الاعلانات]
    public function advertisement()
    {
        $advertisements=Advertisement::where('year' , Carbon::now()->format('Y'))->get();
        Session::flash('year',Carbon::now()->format('Y'));
        return view('frontend.pages.investment.advertisement' ,compact('advertisements'));
    }

    public function downloadAdvertisementFile($id)
    {
        $advertisement_file=Advertisement::find($id);
        return response()->download($advertisement_file->file);
    }

    public function advertisementFilter(Request $request)
    {
        
        if(!empty($request->year)){
            $year=$request->year;
            $advertisements=Advertisement::where('year' ,$year)->get();
            Session::flash('year',$year);
            return view('frontend.pages.investment.advertisement' ,compact('advertisements'));
        }else{
            return redirect()->route('advertisement')->with('error' ,'برجاء اختيار فلتر');
        }
    }


    //8) Governance reports [تقارير الحوكمه]
    public function government()
    {
        $governments=Government::where('year' , Carbon::now()->format('Y'))->get();
        Session::flash('year',Carbon::now()->format('Y'));
        return view('frontend.pages.investment.governance_reports' ,compact('governments'));
    }

    public function downloadGovernmentFile($id)
    {
        $government_file=Government::find($id);
        return response()->download($government_file->file);
    }

    public function governmentFilter(Request $request)
    {
        
        if(!empty($request->year)){
            $year=$request->year;
            $governments=Government::where('year' ,$year)->get();
            Session::flash('year',$year);
            return view('frontend.pages.investment.governance_reports' ,compact('governments'));
        }else{
            return redirect()->route('government')->with('error' ,'برجاء اختيار فلتر');
        }
    }


    //9) remedies [استدراكات]
    public function remedies()
    {
        $remedies=Remedies::where('year' , Carbon::now()->format('Y'))->get();
        Session::flash('year',Carbon::now()->format('Y'));
        return view('frontend.pages.investment.remedies' ,compact('remedies'));
    }

    public function downloadRemediesFile($id)
    {
        $remedies_file=Remedies::find($id);
        return response()->download($remedies_file->file);
    }

    public function remediesFilter(Request $request)
    {
        
        if(!empty($request->year)){
            $year=$request->year;
            $remedies=Remedies::where('year' ,$year)->get();
            Session::flash('year',$year);
            return view('frontend.pages.investment.remedies' ,compact('remedies'));
        }else{
            return redirect()->route('remedies')->with('error' ,'برجاء اختيار فلتر');
        }
    }


    //10) Follow-Up Committee Report [تقارير لجنه المراجعه]
    public function follow_up()
    {
        $follow_ups=FollowUpReport::where('year' , Carbon::now()->format('Y'))->get();
        Session::flash('year',Carbon::now()->format('Y'));
        return view('frontend.pages.investment.follow-up_committe_reports' ,compact('follow_ups'));
    }

    public function downloadfollow_upFile($id)
    {
        $follow_up_file=FollowUpReport::find($id);
        return response()->download($follow_up_file->file);
    }

    public function follow_upFilter(Request $request)
    {
        
        if(!empty($request->year)){
            $year=$request->year;
            $follow_ups=FollowUpReport::where('year' ,$year)->get();
            Session::flash('year',$year);
            return view('frontend.pages.investment.follow-up_committe_reports' ,compact('follow_ups'));
        }else{
            return redirect()->route('follow_up')->with('error' ,'برجاء اختيار فلتر');
        }
    }

    public function countDownload(Request $request)
    {
        if($request->count == 1 && $request->table == 'finance')
        {
             DB::table('finances')->where('id' , $request->id)->increment('count');
        }
        if($request->count == 1 && $request->table == 'director')
        {
             DB::table('directors')->where('id' , $request->id)->increment('count');
        }
        if($request->count == 1 && $request->table == 'disclosure')
        {
             DB::table('disclosures')->where('id' , $request->id)->increment('count');
        }
        if($request->count == 1 && $request->table == 'decision')
        {
             DB::table('decisions')->where('id' , $request->id)->increment('count');
        }
        if($request->count == 1 && $request->table == 'remedies')
        {
             DB::table('remedies')->where('id' , $request->id)->increment('count');
        }
        if($request->count == 1 && $request->table == 'government')
        {
             DB::table('governments')->where('id' , $request->id)->increment('count');
        }
        if($request->count == 1 && $request->table == 'advertisement')
        {
             DB::table('advertisements')->where('id' , $request->id)->increment('count');
        }
        if($request->count == 1 && $request->table == 'follow_up')
        {
             DB::table('follow_up_reports')->where('id' , $request->id)->increment('count');
        }
        return response()->json(['status' => true]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form') ;
    }
}
