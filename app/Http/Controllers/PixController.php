<?php

namespace App\Http\Controllers;

use App\Pix;
use App\PixCategory;
use Cloudinary ;

use Cloudinary\Cache\ResponsiveBreakpointsCache\Uploader;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;










class PixController extends Controller
{
    
 
  public function __construct()
 {
     $this->middleware('auth');
 }


		public function create(Request $request)
		{
			 try{


			 		 $this->validate($request,[
			 	           'title'=>'required|mimes:jpeg,jpg,png|between:1, 6000',
			 	           'PixCategory_id' => 'required '
			 	       ]);

			 		   $explodeCat = explode('.', $request->PixCategory_id);
			 	

			 	       $image_name = $request->file('title')->getRealPath();

			 	       Cloudder::upload($image_name, null, ["folder"=>  $explodeCat[1] ]);

			 	       $image_url= Cloudder::show(Cloudder::getPublicId());

			 	       //Save images to database by calling method
			 	       $this->saveImages($request, $image_url, (int)$explodeCat[0]);

			 	       return redirect()->back()->with('successPix', 'Image Uploaded was Successful');
			 	
			 } catch (Exception $e) {

                 return redirect()->back()->with('failPix', $e->geetMessage);
			 	
			 }

		}



	   public function saveImages(Request $request, $image_url,$catId)
	   {
	       $image = new Pix();
	       $image->title = $request->file('title')->getClientOriginalName();
	       $image->title = $image_url;
	       $image->PixCategory_id = $catId;

	       $image->save();
	   }


	   public function delete($id)
	   {
	   	   try {
				 

					$deletePix = Pix::findOrFail($id);
	   	   	 $deletePix->delete();
	   	   	 //$deletePix->save();

	   	   	 return redirect()->back()->with(["success"=>"Pix has been deleted successfully"]);
	   	  
	   	   
	   	   	 



	   	 

	   	   	
	   	   } catch (Exception $e) {

                     return redirect()->back()->with(["fail"=> $e->geetMessage()]);
	   	   	
	   	   }


	   }



	   public function index()
	   {
	   	 $pixes = Pix::orderBy('created_at', 'desc')->paginate(10);
	   	 $pixall = Pix::all();
	   	 $categories = PixCategory::all();

	   	 return view('pixindex', compact('pixes','pixall','categories'));


	   }




}
