<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProdController extends Controller
{
    public function View(){
        $products = Products::all();
        return view('index', ['items' => $products]);
    }
    public function addProd(Request $req){
        $img = time().'.'.$req->prodImage->extension();
        $req->prodImage->move(public_path('prod_images'), $img);
        $addProduct = new Products;
        $addProduct->prod_name= $req->prodName;
        $addProduct->prod_brand = $req->prodBrand;
        $addProduct->prod_desc = $req->prodDesc;
        $addProduct->prod_image = $img;
        $addProduct->ratings = $req->prodRatings;
        $addProduct->save();
        return redirect('products')->with('success', 'New Product added');
    }
    public function formAdd(){
        return view('addProd');
       }
       public function search(Request $req){
          $i = Products::where('prod_name', 'LIKE', '%'.$req->search_input.'%')->get();
          return view('resuluts', ['prod' => $i]);
       }
}
