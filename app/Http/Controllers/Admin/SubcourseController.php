<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subcourse;


class SubcourseController extends Controller
{
    public function add()
    {
    	$courses = Course::all();
    	return view('admin.subcourses.add',get_defined_vars());
    }
    public function list()
    {
    	$list = Subcourse::all();
    	return view('admin.subcourses.list', get_defined_vars());
    }
     public function save(Request $req, $id=null )
    {
    	// dd($req);
    	$req->validate([
    		'name' => 'required',
    		'price' => 'required',
    		'code' => 'required',
    		'description' => 'required',
    		'course_id' => 'required',
    	]);
    	if(is_null($id))
    	{
    		$subcourse = new Subcourse();
    		$subcourse->name = $req->name;
    		$subcourse->price = $req->price;
    		$subcourse->code = $req->code;
    		$subcourse->description = $req->description;
    		$subcourse->course_id = $req->course_id;
    		if(isset($req->image))
            {
                $req->validate([
                    'image.*' => 'image|mimes:jpg,jpeg,png|max:5000',
                ]);
                $subcourse->image = uploadImage($req->image,'uploads/subcourse');
            }
    		$subcourse->save();
    		$msg = 'Sub Course added successfully';
    	}
    	else
    	{
    		$subcourse = Subcourse::findorfail($id);
            $subcourse->name = $req->name;
            $subcourse->price = $req->price;
            $subcourse->code = $req->code;
            $subcourse->description = $req->description;
            $subcourse->course_id = $req->course_id;
            if(isset($req->image))
            {
                $req->validate([
                    'image.*' => 'image|mimes:jpg,jpeg,png|max:5000',
                ]);
                $subcourse->image = uploadImage($req->image,'uploads/subcourse');
            }
            $subcourse->save();
    		$msg = 'Course updated successfully';
    	}
    	return redirect()->route('admin.subcourse.list')->with('success',$msg);
    }
    public function edit($id)
    {
        $courses = Course::all();
        $item = Subcourse::findorfail($id);
        return view('admin.subcourses.edit',get_defined_vars());
    }
    public function delete($id)
    {
        Subcourse::findorfail($id)->delete();
        return redirect()->back()->with('success','Sub Course deleted successfully');
    }
}
