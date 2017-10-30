<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;


class ProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    protected $product;
  /** @test */
  public function a_has_product()
  {
  	$this->product = new Product('Blue', 59);

  	$this->assertEquals('Blue', $this->product->name());
  }

	/** @test */
  public function a_has_product_without_name()
  {
  	$this->product = new Product('', 22);

  	$this->assertNotEquals('Blue', $this->product->name());
  }
}
