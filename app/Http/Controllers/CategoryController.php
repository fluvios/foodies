<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\CategoryCollection;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC');
        if (request()->q != '') {
            $categories = $categories->where('name', 'LIKE', '%' . request()->q . '%');
        }
        return new CategoryCollection($categories->paginate(10));
    }
}
