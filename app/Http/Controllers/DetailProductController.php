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
}
