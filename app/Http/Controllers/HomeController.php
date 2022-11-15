<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subcourse;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Email;

class HomeController extends Controller
{
    public function home()
    {
        $course = Course::all();
        $setting = Setting::all();
        $list = Subcourse::take(6)->get();
    	return view('front.index', get_defined_vars());
    }
    public function about()
    {
    	return view('front.about');
    }
    public function contact()
    {
    	return view('front.contact');
    }
    public function detail(Request $req,$slug=null)
    {
        $name=str_replace('_', ' ', $slug);
        if(is_null($slug))
        {
            $item = Subcourse::findorfail($req->subcourse_id);
        }
        else
        {
            if($req->course_id && $req->subcourse_id)
            {
               $item = Subcourse::findorfail($req->subcourse_id); 
            }
            else
            {
                $item = Subcourse::whereName($name)->first();    
            }
        }
        
        $list = Course::all();
        return view('front.detail' , get_defined_vars());
    }
    public function course()
    {
        $course = Course::all();
    	return view('front.course', get_defined_vars());
    }
    public function subcourse($slug)
    {
        $name=str_replace('_', ' ', $slug);
        $course = Course::all();
        $course_name = Course::whereName($name)->first();
        if(is_null($course_name))
        {
          $course_name = Course::whereName($slug)->first();  
        }
        $list = Subcourse::where('course_id',$course_name->id)->get();
        return view('front.subcourse', get_defined_vars());
    }
    public function contactSave(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        sendMail([
                'view' => 'emails.contact',
                'to' => 'constructionskillsc@gmail.com',
                'subject' => 'Thanks for Message will contact you soon',
                'name' => 'Construction Skills Centre',

                'data' => [
                    'contact_name' => $req->name,
                    'contact_subject' => $req->subject,
                    'contact_message' => $req->message,
                ]
            ]);
            $msg = 'Your message send successfully';

        return redirect()->back()->with('success_msg',$msg);

    }
    public function search(Request $req)
    {
        $search = $req->search;
        $subcourse = Subcourse::orderBy('name','asc')->where('name', 'like', '%' .$search . '%')->get();
      return response()->json($subcourse);
   }
   public function searchCourse($id)
   {
        $subcourse = Subcourse::find($id);
        return response()->json($subcourse); 
   }
   public function saveEmail(Request $req)
    {
        $email = new Email();
        $email->email = $req->email;
        $email->save();
        
        sendMail([
                'view' => 'emails.email',
                'to' => $req->email,
                'subject' => 'Thanks for Message will contact you soon',
                'name' => 'Construction Skills Centre',
                
                'data' => [
                    'contact_name' => 'John Wick',
                    'contact_message' => 'Thanks for Message will contact you soon',
                ]
            ]);
        
        return redirect()->route('home')->with('success','You Subscribe Successfully to our Newsletter');
    }
    public function pages($uid,$slug)
    {
        $page=Page::whereSlug($slug)->whereUid($uid)->first();
        return view('front.page',get_defined_vars());
    }
}
