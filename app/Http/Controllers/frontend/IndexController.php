<?php

namespace App\Http\Controllers\frontend;

use App\Models\News;

use App\Models\Banner;
use App\Models\AboutUs;
use App\Models\Finance;
use App\Models\Message;
use App\Models\Product;
use App\Models\Decision;
use App\Models\Director;
use App\Models\Download;
use App\Models\ContactUs;
use App\Models\Disclosure;
use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailsShare;
use Carbon\Carbon;
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
        $myFile = public_path($finance_file->file);
        return response()->download($myFile);
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
        $myFile = public_path($decision_file->file);
        return response()->download($myFile);
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
        $myFile = public_path($disclosure_file->file);
        return response()->download($myFile);
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
        $myFile = public_path($director_file->file);
        return response()->download($myFile);
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

    //4)Details of shares [بيانات الاسهم]
    public function share()
    {
        $share=DetailsShare::first();
        return view('frontend.pages.investment.details_of_shares' ,compact('share'));
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form') ;
    }
}
