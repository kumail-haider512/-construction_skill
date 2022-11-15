<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function list()
    {
    	$list = Course::all();
    	return view('admin.course.list',get_defined_vars());
    }
    public function add()
    {
    	return view('admin.course.add');
    }
    public function save(Request $req, $id=null )
    {
    	$req->validate([
    		'name' => 'required'
    	]);

    	if(is_null($id))
    	{
    		$course = new Course();
    		$course->name = $req->name;
    		if(isset($req->image))
            {
                $req->validate([
                    'image.*' => 'image|mimes:jpg,jpeg,png|max:5000',
                ]);
                $course->image = uploadImage($req->image,'uploads/course');
            }
    		$course->save();
    		$msg = 'Course added successfully';
    	}
    	else
    	{
    		$course = Course::findorfail($id);
            $course->name = $req->name;
            if(isset($req->image))
            {
                $req->validate([
                    'image.*' => 'image|mimes:jpg,jpeg,png|max:5000',
                ]);
                $course->image = uploadImage($req->image,'uploads/course');
            }
            $course->save();
    		$msg = 'Course updated successfully';
    	}
    	return redirect()->route('admin.course.list')->with('success',$msg);

    }
    public function edit($id)
    {
        $item = Course::findorfail($id);
        return view('admin.course.edit',get_defined_vars());
    }
    public function delete($id)
    {
        Course::findorfail($id)->delete();
        return redirect()->back()->with('success','Course deleted successfully');
    }
}
