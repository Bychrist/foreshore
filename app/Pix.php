<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pix extends Model
{
    public function PixCategory()
    {
    	return $this->hasMany('App\PixCategory');
    }

    
    
}
