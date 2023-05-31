<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function getIndex(){						
        $slide = Slide::all();
        $new_product = Product::where('new', 1)->get();
        $sanpham_khuyenmai = Product::where('promotion_price', '<>', 0)->get();

        return view('page.trangchu', compact('slide', 'new_product', 'sanpham_khuyenmai'));			
    }	
    
}
