<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $name;
    protected $costs;

    public function __construct($name, $costs)
    {
    	$this->name = $name;
    	$this->costs = $costs;
    }

    public function name()
    {
    	return $this->name;
    }

    public function cost()
    {
    	return $this->costs;
    }
}
