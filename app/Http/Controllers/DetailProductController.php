<?php

namespace App\Http\Controllers;

use App\Services\ProductServiceInterface;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function show($id){
        $productDetail = $this->productService->findById($id);
//        dd($productDetail);
        return view('home.home', compact('productDetail'));
    }
}
