<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PixCategory extends Model
{
    public function Pix()
    {
    	return $this->belongsTo('App\Pix');
    }
}
