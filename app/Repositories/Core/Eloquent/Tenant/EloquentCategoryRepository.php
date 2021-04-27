<?php
namespace App\Repositories\Core\Eloquent\Tenant;

use App\Models\Category;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;


/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class EloquentCategoryRepository extends BaseEloquentRepository
    implements CategoryRepositoryInterface
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function model()
    {
        return  Category::class;
    }

    public function getCategories()
    {
        return $this->model->get()->pluck('description', 'id');
    }
}
