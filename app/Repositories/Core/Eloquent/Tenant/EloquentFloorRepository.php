<?php
namespace App\Repositories\Core\Eloquent\Tenant;


use App\Models\Floor;
use App\Repositories\Contracts\FloorRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class EloquentFloorRepository extends BaseEloquentRepository
    implements FloorRepositoryInterface
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function model()
    {
        return Floor::class;
    }
}
