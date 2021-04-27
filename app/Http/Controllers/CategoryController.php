<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryController extends ControllerStandard
{
    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->model = $category;
        $this->title = 'Categoria';
        $this->view = 'tenants.categories';
        $this->route = 'categories';

       /* $this->middleware('can:categories');

        $this->middleware('can:create_category')->only(['create', 'store']);
        $this->middleware('can:update_category')->only(['edit', 'update']);
        $this->middleware('can:view_category')->only(['show']);
        $this->middleware('can:delete_category')->only(['delete']);*/
    }
}
