<?php

namespace App\Controllers\Api\V1;

class CategoryController
{
    public function index()
    {
        $categories = db()->findAll('categories');
        response()->json(['status' => 'ok', 'data' => $categories]);
    }

    public function view()
    {
        $slug = app()->router->route_params['slug'];
        $category = db()->findOrFail('categories', $slug, 'slug');
        response()->json(['status' => 'ok', 'data' => $category]);
    }
}