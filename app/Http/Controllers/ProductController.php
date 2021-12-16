<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public $i = 1;
    //    function arrayGeneration(){
    //        $data= ["Iphone_price"=>800,"Iphone_description"=>"nice iphone"];
    //        return view('product')->with($data);
    //    }
    function sleep()
    {
        $productsArr = array(
            [
                'name' => 'coffee',
                'price' => '6jd',
                'weight' => '5kg'
            ],
            [
                'name' => 'bread',
                'price' => '1jd',
                'weight' => '3kg'
            ],
            [
                'name' => 'mango',
                'price' => '2jd',
                'weight' => '1kg'
            ],
            [
                'name' => 'apple',
                'price' => '1jd',
                'weight' => '1kg'
            ],
            [
                'name' => 'milk',
                'price' => '2jd',
                'weight' => '2L'
            ],
            [
                'name' => 'pro1',
                'price' => '1.5jd',
                'weight' => '1kg'
            ],
            [
                'name' => 'pro2',
                'price' => '0.5jd',
                'weight' => '1kg'
            ],
            [
                'name' => 'pro2',
                'price' => '4.5jd',
                'weight' => '1kg'
            ],
            [
                'name' => 'coffee',
                'price' => '6jd',
                'weight' => '5kg'
            ],
            [
                'name' => 'bread',
                'price' => '1jd',
                'weight' => '3kg'
            ],
            [
                'name' => 'mango',
                'price' => '2jd',
                'weight' => '1kg'
            ],
            [
                'name' => 'apple',
                'price' => '1jd',
                'weight' => '1kg'
            ],
            [
                'name' => 'milk',
                'price' => '2jd',
                'weight' => '2L'
            ],
            [
                'name' => 'pro1',
                'price' => '1.5jd',
                'weight' => '1kg'
            ],
            [
                'name' => 'pro2',
                'price' => '0.5jd',
                'weight' => '1kg'
            ],
            [
                'name' => 'pro2',
                'price' => '4.5jd',
                'weight' => '1kg'
            ],
        );

        return view('product')->with('productsArr', $productsArr);
    }
}
