<?php

namespace App;

use App\Pix;
use Illuminate\Database\Eloquent\Model;

class PixCategory extends Model
{
	protected $table = 'pix_categories';
    
    public function Pixes()
    {
    	return $this->hasMany(Pix::class,'PixCategory_id');
    }
}
