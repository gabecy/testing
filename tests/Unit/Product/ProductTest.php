<?php

namespace Tests\Unit\Product;

use App\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    protected $product;

    public function setUp():void{
        $this->product = new Product('Hello World',59);
    }

    public function test_a_product_has_name()
    {
        $this->assertEquals('Hello World',$this->product->name());
    }

    /** @test */
    public function a_product_has_cost()
    {
        $this->assertEquals(59, $this->product->cost());
    }
}
