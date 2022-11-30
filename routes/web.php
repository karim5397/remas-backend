<?php

use Carbon\Carbon;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BusinessLinesController;
use App\Http\Controllers\ChairmanController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Models\Download;
use Illuminate\Support\Facades\Request;

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
Route::post('/client-message' ,[IndexController::class , 'clientMessage'])->name('message');
//about route
Route::get('/about-us',[IndexController::class , 'aboutUs'])->name('about');
//video route
Route::get('/video',[IndexController::class , 'video'])->name('video');
//team route
Route::get('/team',[IndexController::class , 'team'])->name('team');
//new route
Route::get('/news',[IndexController::class , 'news'])->name('news');
Route::get('/news-details/{id}',[IndexController::class , 'newsDetails'])->name('news.details');
//career route
Route::get('/career',[IndexController::class , 'career'])->name('career');
Route::get('/career-details/{id}',[IndexController::class , 'careerDetails'])->name('career.details');
Route::post('/job-applied',[IndexController::class , 'jobApplied'])->name('career.applied');
Route::get('/career/filter',[IndexController::class , 'careerFilter'])->name('career.filter');

//service route
Route::get('/service/{id}' , [IndexController::class , 'serviceDetails'])->name('serivce.details');
//business line route
Route::get('/business-line/{id}' , [IndexController::class , 'businessDetails'])->name('business.details');
//chairman route
Route::get('/chairman-message' , [IndexController::class , 'chairman'])->name('chairman');

//projects route
Route::get('projects',[IndexController::class , 'projects'])->name('projects');
Route::get('project-details/{id}',[IndexController::class , 'projectDetails'])->name('project.details');
Route::get('projects-filter',[IndexController::class , 'projectFilter'])->name('projects-filter');
Route::get('projects-search',[IndexController::class , 'search'])->name('projects.search');

//download route
Route::get('download-page' ,[IndexController::class ,'downloadPage'])->name('download.page');
Route::get('/download-file/{id}' , [IndexController::class , 'downloadFile'])->name('file.download');



//end frontend routes


//backend routes

Auth::routes(['login' => false , "register" => false]);
Route::group(['prefix' => 'backEnd-remas-admin'], function(){
Route::get('/login', [LoginController::class ,'loginForm'])->name('login.form');
Route::post('/login', [LoginController::class ,'adminLogin'])->name('admin.login');
Route::get('/register', [RegisterController::class ,'registerForm'])->name('register.form');
Route::post('/register', [RegisterController::class ,'adminRegister'])->name('admin.register');
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
    Route::get('/client-message' , [ContactUsController::class ,'clientMessage'])->name('client.message');
    Route::delete('/client-delete/{id}' , [ContactUsController::class ,'deleteMessage'])->name('delete.message');
    Route::get('/export-message' , [ContactUsController::class ,'exportMessage'])->name('export.message');

    //video routes
    Route::resource('video',VideoController::class);

    //statistics routes
    Route::resource('statics',StatisticsController::class);

    //team route
    Route::resource('team',TeamController::class);

    //carerr route
    Route::resource('career',CareerController::class);
    Route::post('/career-status' , [CareerController::class , 'careerStatus'])->name('career.status');
    Route::get('/applied-employee' , [CareerController::class , 'appliedEmployee'])->name('applied.employee');
    Route::get('/download-cv/{id}' , [CareerController::class , 'downloadCV'])->name('cv.download');
    Route::delete('/applied-delete/{id}' , [CareerController::class , 'deleteApllied'])->name('delete.apllied');
    Route::get('/export-applied' , [CareerController::class , 'exportApplied'])->name('export.applied');
    Route::post('/applied-search' , [CareerController::class , 'search'])->name('applied.search');


    //news routes
    Route::resource('news', NewsController::class);
    Route::post('/news-status' , [NewsController::class , 'newsStatus'])->name('news.status');

    //banner route
    Route::resource('banner' , BannerController::class);
    Route::post('/banner-status' , [BannerController::class , 'bannerStatus'])->name('banner.status');

    //chairman route
    Route::resource('chairman' , ChairmanController::class);

    //service route
    Route::resource('service' , ServiceController::class);
    Route::post('/service-status' , [ServiceController::class , 'serviceStatus'])->name('service.status');

    //business line route
    Route::resource('business_line' , BusinessLinesController::class);
    Route::post('/business_line-status' , [BusinessLinesController::class , 'businessLineStatus'])->name('business_line.status');

    //projects route
    Route::resource('project' ,ProjectController::class);
    Route::post('/project-status' , [ProjectController::class , 'projectStatus'])->name('project.status');
    Route::get('project-type' ,[ProjectController::class , 'projectType'])->name('project.type');
    Route::post('add-project-type' ,[ProjectController::class , 'addProjectType'])->name('add.project.type');
    Route::delete('project-type/delete/{id}' ,[ProjectController::class , 'deleteProjectType'])->name('project.type.delete');

    //setting route
    Route::get('setting' , [SettingController::class , 'setting'])->name('setting');
    Route::post('setting/update' , [SettingController::class , 'settingUpdate'])->name('setting.update');

    //download route
    Route::resource('download' ,DownloadController::class);

    Route::get('logout' , [IndexController::class , 'logout' ])->name('user.logout');


});