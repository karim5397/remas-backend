<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Traits\ImageStoreTrait;

class SettingController extends Controller
{
    public function setting()
    {
        $setting=Setting::first();
        return view('admin.setting.setting',compact('setting'));
    }

    public function settingUpdate(Request $request)
    {
        $setting=Setting::first();
        $this->validate($request,[
            'page_title' => 'required|string',
            'meta_description' => 'required|string',
            'meta_auth' => 'sometimes|nullable|string',
            'meta_title' => 'sometimes|nullable|string',
            'logo' => 'sometimes|string',
            'favicon' => 'sometimes|string',
            'facebook_url' => 'sometimes|nullable|string',
            'linkedin_url' => 'sometimes|nullable|string',
        ],
        [
            "page_title.required" => "Please enter home title",
            "meta_description.required" => "Please enter meta description",
            "meta_auth.sometimes" => "Please enter meta auth",
            "meta_title.sometimes" => "Please enter meta title",
            "logo.sometimes" => "Please choose a logo photo",
            "favicon.sometimes" => "Please choose a favicon photo",
            "facebook_url.sometimes" => "Please enter facebook url",
            "linkedin_url.sometimes" => "Please enter linkedin url",
        ]);

        $data=$request->all();
        if($request->file('logo') || $request->file('favicon')){
            $logo_image=ImageStoreTrait::storeImage($request->logo,$request->file('logo'),'backend/assets/images/',100,100);
            $favicon_image=ImageStoreTrait::storeImage($request->favicon,$request->file('favicon'),'backend/assets/images/',25,25);
            $data['logo']=$logo_image;
            $data['favicon']=$favicon_image;
            $status=$setting->update($data);
        }else{
            $status=$setting->update($data);
        }
        if($status){
            return back()->with('success','Setting successfully updated');
        }else{
            return back()->with('error','something went wrong');
        }
    }
}
