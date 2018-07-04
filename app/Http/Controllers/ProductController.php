<?php

namespace App\Http\Controllers;
use App\Product;
use App\Http\Resources\Product as ProductResource;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show ($id)
    {
        return new ProductResource(Product::find($id));
    }
}
