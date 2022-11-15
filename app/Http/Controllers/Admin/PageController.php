<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
	public function index()
    {
        $list=Page::all();
        return view('admin.page.list',get_defined_vars());
    }
    public function add()
    {
    	return view('admin.page.add');
    }
    public function save(Request $request)
    {
        $request->validate([
           'name'=>'required',
           'detail'=>'required',
        ]);

        if ($request->id)
        {
            $page=Page::find($request->id);
            $page->update([
                'name'=>$request->name,
                'slug'=>\Illuminate\Support\Str::slug($request->name),
                'description'=>$request->detail,
            ]);
            $msg = 'Page updated';
        }else{
            Page::create([
                'uid'=>uniqid(),
                'name'=>$request->name,
                'slug'=>\Illuminate\Support\Str::slug($request->name),
                'description'=>$request->detail,
            ]);
            $msg = 'Page created'; 
        }

        return redirect()->route('admin.page.list')->with('success',$msg);
    }
    public function edit($id)
    {
    	$item = Page::findorfail($id);
    	return view('admin.page.edit',get_defined_vars());
    }
    public function delete($id)
    {
        $msg = 'Page delete successfully';

    	Page::find($id)->delete();
        return redirect()->back()->with('success',$msg);
    }
}
