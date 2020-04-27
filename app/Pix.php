<?php

namespace App;

use App\PixCategory;
use Illuminate\Database\Eloquent\Model;

class Pix extends Model
{
	protected $table = 'pixes';

    public function PixCategory()
    {
	return $this->belongsTo(PixCategory::class, 'PixCategory_id');
    }

    
    
}
