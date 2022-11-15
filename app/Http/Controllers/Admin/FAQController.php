<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FAQController extends Controller
{
    public function list()
    {
    	$list = Faq::all();
    	return view('admin.faq.list',get_defined_vars());
    }
    public function add()
    {
    	return view('admin.faq.add');
    }
    public function save(Request $req, $id=null )
    {
    	// dd($req);
    	$req->validate([
    		'question' => 'required',
    		'answer' => 'required'
    	]);

    	if(is_null($id))
    	{
    		$faq = new Faq();
    		$faq->question = $req->question;
    		$faq->answer = $req->answer;
    		$faq->save();
    		$msg = 'Faq added successfully';
    	}
    	else
    	{
    		$faq = faq::findorfail($id);
    		$faq->question = $req->question;
            $faq->answer = $req->answer;
            $faq->save();
    		$msg = 'Faq updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function edit($id)
    {
        $item = Faq::findorfail($id);
        return view('admin.faq.edit',get_defined_vars());
    }
    public function delete($id)
    {
        Faq::findorfail($id)->delete();
        return redirect()->back()->with('success','Faq deleted successfully');
    }
}
