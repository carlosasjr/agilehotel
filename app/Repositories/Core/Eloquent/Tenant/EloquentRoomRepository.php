<?php
namespace App\Repositories\Core\Eloquent\Tenant;


use App\Models\Room;
use App\Repositories\Contracts\RoomRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class EloquentRoomRepository extends BaseEloquentRepository
    implements RoomRepositoryInterface
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function model()
    {
        return Room::class;
    }

    public function dataTables($column, $view)
    {
        $model = $this->model
            ->query()
            ->with(['category', 'floor']);


        return Datatables()->eloquent($model)
            ->addColumn($column, $view)
            ->make(true);
    }
}
