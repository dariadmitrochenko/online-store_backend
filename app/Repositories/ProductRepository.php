<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public $product;
    public function __construct(Product $product)
    {
        $this->model = $product;
    }
    public function getAllProducts()
    {
        return Product::all();
    }

    public function getProductById($productId)
    {
        return Product::findOrFail($productId);
    }

    public function deleteProduct($productId)
    {
        Product::destroy($productId);
    }

    public function createProduct(array $productData)
    {
        return Product::create($productData);
    }

    public function updateProduct($productId, array $productData)
    {
        return Product::whereId($productId)->update($productData);
    }

    
}