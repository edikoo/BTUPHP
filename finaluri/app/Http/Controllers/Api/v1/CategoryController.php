<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(CategoryRequest $request, Category $category)
    {
        $this->authorize('create', $category);
        $category->create($request->validated());
        return response(['message' => "კატეგორია წარმატებით დაემატა"]);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $this->authorize('update', $category);
        $category->update($request->validated());
        return response(['message' => "კატეგორია წარმატებით დარედაქტირდა"]);
    }

    public function delete(Category $category)
    {
        $this->authorize('create', $category);
        $category->delete();
        return response(['message' => "კატეგორია წარმატებით წაიშალა"]);
    }
}
