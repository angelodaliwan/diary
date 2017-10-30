<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;
use App\Order;

class OrderTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    /** @test */
    public function a_consists_of_two_products()
    {
    	$order = $this->createProduct();

    	$this->assertCount(2, $order->products());
    }

    /** @test */
    public function a_has_total_costs_products()
    {
    	$order = $this->createProduct();
    	
    	$this->assertEquals(50, $order->total());

    }

    protected function createProduct()
    {
    	$order = new Order;

    	$product = new Product('Blue', 20);
    	$product2 = new Product('Pink', 30);

    	$order->add($product);
    	$order->add($product2);

    	return $order;
    }
}
