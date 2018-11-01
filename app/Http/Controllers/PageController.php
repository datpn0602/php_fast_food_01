<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;


class PageController extends Controller
{
    public function index()
    {
        //$categories = Category::first();
        $sale_product = Food::where('promotion_id', '<>', 'NULL')->get();
        $featured_product = Food::where('category_id', 2)->get();
        $pizza_product = Food::where('type_id', 1)->get();
        $new_product = Food::where('category_id', 1)->get();
        return view('client.pages.index', compact(
            'sale_product',
            'pizza_product',
            'featured_product',
            'new_product'
        ));
    }

    public function getCategories($type)
    {
        $categories = Food::where('category_id', $type)->get();
        return view('pages.categories', compact('type_product','sale_product'));
    }

}
