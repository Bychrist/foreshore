<?php

namespace App\Http\Controllers;

use App\Pix;
use App\PixCategory;
use Illuminate\Http\Request;

class PixCategoryController extends Controller
{
   
     public function __construct()
    {
        $this->middleware('auth')->only('adminHome');
    }


    public function create(Request $request)
    {
    	$this->validate($request, [ "category_name" => "required | unique:pix_categories"]);

    	$category = new PixCategory();
    	$category->category_name = strtoupper($request->category_name);
    	$category->save();

    	return redirect()->back()->with(['successCat' => "Event category was created successfully"]);




    }



    public function edit($id)
    {
    	

    	$category = PixCategory::findOrFail($id);
    	$categories = PixCategory::all();
    	$pixes = Pix::all();
    	$pix = Pix::all();

    	return view('categoryEdit', compact('category','categories','pix','pixes'));




    }


 public function index()
 {
 	

 	$category = PixCategory::orderBy('created_at', 'desc')->paginate(3);
 	$categories = PixCategory::all();
 	$pixes = Pix::all();
 	$pix = Pix::all();

 	return view('indexcat', compact('category','pix','categories','pixes'));




 }





    public function update(Request $request, $id)
    {
    	

    	$this->validate($request, ["category_name" => "required"]);
    	$category = PixCategory::findOrFail($id);
    	$category->category_name = strtoupper($request->category_name);

    	$category->save();

    	return redirect()->back()->with(["successCat" => "Event category update was successful"]);

    }



    public function delete($id)
    {
    	

  
    	$category = PixCategory::findOrFail($id);
    	$category->delete();
    	return redirect()->back()->with(["successCat" => "Event category was deleted  successful"]);

    }













}
