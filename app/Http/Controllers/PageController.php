<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Slide;
use App\Models\Type_product;
use Illuminate\Http\Request;
class PageController extends Controller
{
 
    public function getIndex()
    {
        $slide = slide::all();
        $new_product= Product::where('new',1)->paginate(8);
        //san pham khuyen mai
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(4);							
        return view('page.trangchu', compact('slide','new_product','sanpham_khuyenmai'));
    }
    public function getLoaiSp($type){

        $type_product = Type_product::all(); // shoira ten-logi-san phẩm
        $sp_theoloai = Product::where('id_type', $type)->get();
        $sp_khac =Product::where('id_type', '<>', $type)->paginate(3);
        return view('page.loai_sanpham',compact('sp_theoloai','type_product','sp_khac'));
}

    public function getDetail(Request $request)
    {
        $sanpham = Product::where('id',$request->id)->first();
        $splienquan = Product::where('id','<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comments = Comment::where('id_product',$request->id)->get();							
        return view('page.chitiet_sanpham', compact('sanpham','splienquan','comments'));
    }
    
}
