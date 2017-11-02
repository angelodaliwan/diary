<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaryDesign extends Model
{
    protected $design;
    protected $count;
    
    public function __construct($design, $count)
    {
    	$this->design = $design;
    	$this->count = $count;
    }

    public function design()
    {
    	return $this->design;
    }
}
