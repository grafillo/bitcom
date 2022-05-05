<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getCategoryFilters($id){

        $filters=Product::where('category_id',$id)->with('getFilters')->get();

        return $filters[0]->getFilters->where('filterable','1');
    }
}
