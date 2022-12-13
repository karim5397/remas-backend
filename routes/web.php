<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\frontend\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//start frontend routes

Route::get('/',[IndexController::class ,'index'])->name('home');
//contact route
Route::get('/contact-us',[IndexController::class , 'contactUs'])->name('contact');
Route::get('/inquery' , [IndexController::class , 'inquery'])->name('inquery');
Route::post('/client-message' ,[IndexController::class , 'clientMessage'])->name('message');
//about route
Route::get('/about-us',[IndexController::class , 'aboutUs'])->name('about');
//certificate route
Route::get('/certificate' , [IndexController::class , 'certificate'])->name('certificate');

//news routes
Route::get('/news', [IndexController::class , 'news'])->name('news');
Route::get('/news/{id}', [IndexController::class , 'newsDetails'])->name('news.details');

//investment routes
Route::get('/finance' ,[IndexController::class ,'finance'])->name('finance');
Route::get('/download-finance-file/{id}' , [IndexController::class , 'downloadFinanceFile'])->name('finance.download');
Route::get('/finance-filter' ,[IndexController::class ,'financeFilter'])->name('finance.filter');
Route::post('/count-download' ,[IndexController::class ,'countDownload'])->name('count.download');

Route::get('/decision' ,[IndexController::class ,'decision'])->name('decision');
Route::get('/download-decision-file/{id}' , [IndexController::class , 'downloadDecisionFile'])->name('decision.download');
Route::get('/decision-filter' ,[IndexController::class ,'decisionFilter'])->name('decision.filter');

Route::get('/disclosure' ,[IndexController::class ,'disclosure'])->name('disclosure');
Route::get('/download-disclosure-file/{id}' , [IndexController::class , 'downloadDisclosureFile'])->name('disclosure.download');
Route::get('/disclosure-filter' ,[IndexController::class ,'disclosureFilter'])->name('disclosure.filter');

Route::get('/advertisement' ,[IndexController::class ,'advertisement'])->name('advertisement');
Route::get('/download-advertisement-file/{id}' , [IndexController::class , 'downloadAdvertisementFile'])->name('advertisement.download');
Route::get('/advertisement-filter' ,[IndexController::class ,'advertisementFilter'])->name('advertisement.filter');

Route::get('/government' ,[IndexController::class ,'government'])->name('government');
Route::get('/download-government-file/{id}' , [IndexController::class , 'downloadgovernmentFile'])->name('government.download');
Route::get('/government-filter' ,[IndexController::class ,'governmentFilter'])->name('government.filter');

Route::get('/follow_up' ,[IndexController::class ,'follow_up'])->name('follow_up');
Route::get('/download-follow_up-file/{id}' , [IndexController::class , 'downloadFollow_upFile'])->name('follow_up.download');
Route::get('/follow_up-filter' ,[IndexController::class ,'follow_upFilter'])->name('follow_up.filter');

Route::get('/remedies' ,[IndexController::class ,'remedies'])->name('remedies');
Route::get('/download-remedies-file/{id}' , [IndexController::class , 'downloadRemediesFile'])->name('remedies.download');
Route::get('/remedies-filter' ,[IndexController::class ,'remediesFilter'])->name('remedies.filter');

Route::get('/director' ,[IndexController::class ,'director'])->name('director');
Route::get('/download-director-file/{id}' , [IndexController::class , 'downloadDirectorFile'])->name('director.download');
Route::get('/director-filter' ,[IndexController::class ,'directorFilter'])->name('director.filter');

Route::get('/details-of-shares' ,[IndexController::class ,'share'])->name('share');
Route::get('/boad-structure' ,[IndexController::class ,'boardStructure'])->name('board.structure');

//end frontend routes


//backend routes

Auth::routes(['login' => false , "register" => false]);
Route::group(['prefix' => 'backEnd-remas-admin'], function(){
Route::get('/login', [LoginController::class ,'loginForm'])->name('login.form');
Route::post('/login', [LoginController::class ,'adminLogin'])->name('admin.login');
// Route::get('/register', [RegisterController::class ,'registerForm'])->name('register.form');
// Route::post('/register', [RegisterController::class ,'adminRegister'])->name('admin.register');
});

Route::group(['prefix' => 'backEnd-remas-admin' , 'middleware'=>'auth'], function(){
    
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    //user routes
    Route::resource('user', UserController::class);
    Route::post('/user-status' , [UserController::class , 'userStatus'])->name('user.status');
    Route::post('/user-search' , [UserController::class , 'search'])->name('user.search');

    //about us routes
    Route::resource('about',AboutUsController::class);

    //contact us routes
    Route::resource('contact',ContactUsController::class);
    Route::post('/contact-status' , [ContactUsController::class , 'contactStatus'])->name('contact.status');
    Route::get('/client-message' , [ContactUsController::class ,'clientMessage'])->name('client.message');
    Route::delete('/client-delete/{id}' , [ContactUsController::class ,'deleteMessage'])->name('delete.message');
    Route::get('/export-message' , [ContactUsController::class ,'exportMessage'])->name('export.message');

 
    //news routes
    Route::resource('news', NewsController::class);
    Route::post('/news-status' , [NewsController::class , 'newsStatus'])->name('news.status');

    //banner route
    Route::resource('banner' , BannerController::class);
    Route::post('/banner-status' , [BannerController::class , 'bannerStatus'])->name('banner.status');

    //setting route
    Route::get('setting' , [SettingController::class , 'setting'])->name('setting');
    Route::post('setting/update' , [SettingController::class , 'settingUpdate'])->name('setting.update');

    //product route
    Route::get('/products' ,[ProductController::class , 'index'])->name('product.index');
    Route::post('/products-store' ,[ProductController::class , 'store'])->name('product.store');
    Route::delete('/products-delete/{id}' ,[ProductController::class , 'destroy'])->name('product.destroy');
    
    //certificate route
    Route::get('/certificates' ,[CertificateController::class , 'index'])->name('certificate.index');
    Route::post('/certificates-store' ,[CertificateController::class , 'store'])->name('certificate.store');
    Route::delete('/certificates-delete/{id}' ,[CertificateController::class , 'destroy'])->name('certificate.destroy');
    
    //investment routes
    Route::get('/financial-reports' ,[InvestmentController::class , 'financeShow'])->name('finance.show');
    Route::post('/financial-reports/store' ,[InvestmentController::class , 'financeStore'])->name('finance.store');
    Route::delete('/finance-delete/{id}' ,[InvestmentController::class , 'financeDestroy'])->name('finance.destroy');

    Route::get('/board-of-directors' ,[InvestmentController::class , 'directorShow'])->name('director.show');
    Route::post('/board-of-directors/store' ,[InvestmentController::class , 'directorStore'])->name('director.store');
    Route::delete('/director-delete/{id}' ,[InvestmentController::class , 'directorDestroy'])->name('director.destroy');

    Route::get('/disclosures-reports' ,[InvestmentController::class , 'disclosureShow'])->name('disclosure.show');
    Route::post('/disclosures-reports/store' ,[InvestmentController::class , 'disclosureStore'])->name('disclosure.store');
    Route::delete('/disclosure-delete/{id}' ,[InvestmentController::class , 'disclosureDestroy'])->name('disclosure.destroy');

    Route::get('/decisions' ,[InvestmentController::class , 'decisionShow'])->name('decision.show');
    Route::post('/decisions/store' ,[InvestmentController::class , 'decisionStore'])->name('decision.store');
    Route::delete('/decision-delete/{id}' ,[InvestmentController::class , 'decisionDestroy'])->name('decision.destroy');

    Route::get('/government' ,[InvestmentController::class , 'governmentShow'])->name('government.show');
    Route::post('/government/store' ,[InvestmentController::class , 'governmentStore'])->name('government.store');
    Route::delete('/government-delete/{id}' ,[InvestmentController::class , 'governmentDestroy'])->name('government.destroy');

    Route::get('/advertisement' ,[InvestmentController::class , 'advertisementShow'])->name('advertisement.show');
    Route::post('/advertisement/store' ,[InvestmentController::class , 'advertisementStore'])->name('advertisement.store');
    Route::delete('/advertisement-delete/{id}' ,[InvestmentController::class , 'advertisementDestroy'])->name('advertisement.destroy');

    Route::get('/remedies' ,[InvestmentController::class , 'remediesShow'])->name('remedies.show');
    Route::post('/remedies/store' ,[InvestmentController::class , 'remediesStore'])->name('remedies.store');
    Route::delete('/remedies-delete/{id}' ,[InvestmentController::class , 'remediesDestroy'])->name('remedies.destroy');

    Route::get('/follow_up' ,[InvestmentController::class , 'follow_upShow'])->name('follow_up.show');
    Route::post('/follow_up/store' ,[InvestmentController::class , 'follow_upStore'])->name('follow_up.store');
    Route::delete('/follow_up-delete/{id}' ,[InvestmentController::class , 'follow_upDestroy'])->name('follow_up.destroy');

    Route::get('/shares' ,[InvestmentController::class , 'shareShow'])->name('share.show');
    Route::patch('/share-update/{id}' ,[InvestmentController::class , 'shareUpdate'])->name('share.update');


    Route::get('/board-structure' ,[InvestmentController::class , 'boardStructureShow'])->name('structure.show');
    Route::post('/board-structure/store' ,[InvestmentController::class , 'boardStructureStore'])->name('structure.store');
    Route::patch('/board-structure-update/{id}' ,[InvestmentController::class , 'boardStructureUpdate'])->name('structure.update');
    Route::delete('/board-structure-delete/{id}' ,[InvestmentController::class , 'boardStructureDestroy'])->name('structure.destroy');



    Route::get('logout' , [IndexController::class , 'logout' ])->name('user.logout');


});