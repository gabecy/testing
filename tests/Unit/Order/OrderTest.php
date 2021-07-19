<?php

namespace Tests\Unit\Order;

use PHPUnit\Framework\TestCase;
use App\Order;
use App\Product;

class OrderTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    public function an_order_consists_of_products()
    {

        $order = $this->createOrderWithProducts();

        // $this->assertEquals(2,count($order->products()));
        $this->assertCount(2,$order->products());
    }

    /** @test */
    public function an_order_can_determine_the_total_cost_of_all_its_products()
    {
        $order = $this->createOrderWithProducts();

        $this->assertEquals(69, $order->total());
    }

    protected function createOrderWithProducts()
    {
        $order = new Order();

        $product1 = new Product('Hello World',59);
        $product2 = new Product('Lala Move',10);

        $order->add($product1);
        $order->add($product2);

        return $order;
    }


}
