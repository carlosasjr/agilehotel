<?php
namespace App\Repositories\Core\Eloquent\Tenant;

use App\Models\Reservation;
use App\Repositories\Contracts\ReservationRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;


/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class EloquentReservationRepository extends BaseEloquentRepository
    implements ReservationRepositoryInterface
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function model()
    {
        return Reservation::class;
    }


    public function dataTables($column, $view)
    {
        $model = $this->model
            ->query()
            ->with([
                'person',
            ]);


        return Datatables()->eloquent($model)
            ->addColumn($column, $view)
            ->make(true);
    }
}
