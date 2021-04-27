<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Room;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\FloorRepositoryInterface;
use App\Repositories\Contracts\RoomRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class RoomController extends ControllerStandard
{
    private $category;
    private $floor;

    public function __construct(RoomRepositoryInterface $rooms,
                                CategoryRepositoryInterface $category,
                                FloorRepositoryInterface $floor

    )
    {
        $this->model = $rooms;
        $this->title = 'Quartos';
        $this->view = 'tenants.rooms';
        $this->route = 'rooms';
        $this->category = $category;
        $this->floor = $floor;

      /*  $this->middleware('can:rooms');

        $this->middleware('can:create_origin')->only(['create', 'store']);
        $this->middleware('can:update_origin')->only(['edit', 'update']);
        $this->middleware('can:view_origin')->only(['show']);
        $this->middleware('can:delete_origin')->only(['delete']);*/
    }

    public function index()
    {
        if (request()->ajax()) {
            return $this->model
                ->dataTables('action', $this->view . '.partials.acoes');
        }

        $title = "Gestão de {$this->title}s";
        return view("{$this->view}.index", compact('title'));
    }

    public function create()
    {
        $categories = $this->category->getCategories();
        $floors = $this->floor->getFloors();

        $title = "Cadastrar {$this->title}";
        return view("{$this->view}.create", compact('title', 'categories', 'floors'));
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        $categories = $this->category->getCategories();
        $floors = $this->floor->getFloors();

        $title = "Editar {$this->title}: {$data->name}";

        return view("{$this->view}.create", compact('title', 'data', 'categories', 'floors'));
    }


    /**
     * @param $rooms
     * @return \Illuminate\Http\JsonResponse
     */
    protected function rooms($rooms): \Illuminate\Http\JsonResponse
    {
        $arr = [];
        foreach ($rooms as $room) {

            $arr[] = [
                $room->id,
                $room->number,
                $room->description,
                $room->category->description
            ];
        }

        $retorno = [];
        $retorno['data'] = $arr;

        return response()->json($retorno);
    }


    public function availableRooms(Request $request)
    {
        $data = $request->all();

        $added = $data['added'];
        $begin = Helper::formatDateTime($data['inicio'], 'Y-m-d H:i:s');
        $end = Helper::formatDateTime($data['fim'], 'Y-m-d H:i:s');

        $rooms = Room::whereDoesntHave('reservations', function (Builder $query) use ($begin, $end) {

            $query->where(function ($query) use ($begin) { // aqui a abordagem
                $query->where('begin', '<', $begin);
                $query->orWhere('end', '<', $begin);
            });

            $query->where(function ($query) use ($end) { // aqui a abordagem
                $query->where('begin', '>', $end);
                $query->orWhere('end', '>', $end);
            });

            $query->where('state', 'Ativa');

        })->whereNotIn('id', $added)->get();


        return $this->rooms($rooms);
    }

    public function getRoom($id)
    {
        $room = Room::find($id);

        $retorno = [];

        if (!$room) {
            $retorno['result'] = false;

            return response()->json($retorno);
        }

        $html = <<<TABELA
            <tr data-id="$room->id" id="rooms{$room->id}">
                <td>
                    <input type="hidden"
                           name="rooms[{$room->id}][room_id]"
                           value="$room->id">

                    <input class="form-control" readonly type="text"
                           name="rooms[{$room->id}][number]"
                           value="$room->number">
                </td>

                <td>
                    <input class="form-control" readonly type="text"
                           name="rooms[{$room->id}][description]"
                           value="$room->description">
                </td>

                <td>
                    <input class="form-control" readonly type="text"
                           name="rooms[{$room->id}][category]"
                           value="{$room->category->description}">
                </td>


                <td>
                    <a rel="{$room->id}" class="btn btn-danger" href="javascript:;"
                       onclick="removeRoom(this)">Excluir</a>
                </td>
            </tr>
TABELA;

        $retorno['result'] = true;
        $retorno['data'] = $html;

        return response()->json($retorno);
    }


}
