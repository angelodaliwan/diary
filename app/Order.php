<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Order extends Model
{

	protected $product = [];

    public function add(Product $product)
    {
    	$this->product[] = $product;
    }

    public function products()
    {
    	return $this->product;
    }

    public function total()
    {
    	
    	return array_reduce($this->product, function($carry, $product){
    		return $carry + $product->cost();
    	});
    }
}
