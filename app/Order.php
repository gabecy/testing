<?php

namespace App;
use App\Product;
class Order{

    protected $product = [];
    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function products()
    {
        return $this->products;
    }

    public function total()
    {
        return array_reduce($this->products,function($accumulate,$product){
            return $accumulate + $product->cost();
        });

        /** Before Refactor */
        // $total = 0;
        // foreach($this->products as $product){
        //     $total += $product->cost();
        // }
        // return $total;

         /** Hard coded */
        // return 69;
    }


}



?>
