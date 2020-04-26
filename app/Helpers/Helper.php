<?php

namespace App\Helpers;

use App\PixCategory;
use Illuminate\Http\Request;


class Helper {










    
    public static function checkCatName($catid) 
    {


    	try {
    		
    			$category = PixCategory::findOrFail($catid);
    		
    		    return $category->category_name;

    	} catch (\Exception $e) {

    		return "Category does not exist";
    		
    	}

    	
    	
       
    }










}




