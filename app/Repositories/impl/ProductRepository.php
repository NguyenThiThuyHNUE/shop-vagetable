<?php


namespace App\Repositories\impl;


use App\Product;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @var Product
     */
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAll()
    {
        return Product::all();
    }

    public function create($product, $request)
    {
        $product->productName = $request->productName;
        $product->productPrice = $request->productPrice;
        $product->provider = $request->provider;
    }

    public function findById($id)
    {
        return Product::find($id);
    }

    public function update($request, $product)
    {
        $product->productName = $request->productName;
        $product->productPrice = $request->productPrice;
        $product->provider = $request->provider;
    }

    public function delete($id)
    {
        $product = $this->findById($id);
        return $product->delete();
    }

    public function storeImage($product)
    {
        if (request()->has('image')) {
            $product->image = request()->image->store('uploads', 'public');
        }
    }

    public function saveData($product)
    {
        return $product->save();
    }

    public function getPaginate($number)
    {
        return $this->product->setPerPage($number);
    }

    public function findByKey($keySearch)
    {
        return
            DB::table('products')->orWhere('productName', 'like',
                '%' . $keySearch . '%')->get();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }
}
