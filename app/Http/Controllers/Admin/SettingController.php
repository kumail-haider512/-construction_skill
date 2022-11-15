<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use File;

class SettingController extends Controller
{
    public function general()
    {
        return view('admin.cms.general');
    }
     public function home()
    {
        return view('admin.cms.home_page');
    }
     public function aboutus()
    {
        return view('admin.cms.about_us_page');
    }
     public function contactus()
    {
        return view('admin.cms.contact_page');
    }
     public function course()
    {
        return view('admin.cms.course_page');
    }
     public function terms()
    {
        return view('admin.cms.terms');
    }
    public function email()
    {
        return view('admin.cms.email');
    }
    public function save(Request $request)
    {
        $setting = $request->except('_token');
        foreach ($setting as $key => $value) {
            if (empty($value))
                continue;
            $set = Setting::where('key', $key)->first() ?: new Setting();
            $set->key = $key;
            $set->value = $value;
            $set->save();

            if ($request->hasFile($key)) {
                $existing = Setting::where('key', '=', $key)->first();
                if ($existing) {
                    $ex_path = "uploads/cms/".$existing->setting;
                    if (File::exists($ex_path)) {
                        File::delete($ex_path);
                    }
                    $image = $request->file($key);
                    $name = $image->getClientOriginalName();
                    $image->move('uploads/cms/', $name);
                    Setting::where('key', '=', $key)->update([
                        'value' => "uploads/cms/".$name
                    ]);
                }
            }
        }
        $msg = 'Settings Updated Successfully';
        return redirect()->back()->with('success', $msg);
    }
}