<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Room;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function availableRooms(Request $request)
    {
        $data = $request->all();


        $ex = $data['NotIn'];
        $datainicio = Helper::formatDateTime($data['inicio'], 'Y-m-d H:i:s');
        $datafim = Helper::formatDateTime($data['fim'], 'Y-m-d H:i:s');

        $rooms = Room::whereDoesntHave('reservations', function (Builder $query) use ($datainicio, $datafim) {

            $query->where(function ($query) use ($datainicio) { // aqui a abordagem
                $query->where('begin', '<', $datainicio);
                $query->orWhere('end', '<', $datainicio);
            });

            $query->where(function ($query) use ($datafim) { // aqui a abordagem
                $query->where('begin', '>', $datafim);
                $query->orWhere('end', '>', $datafim);
            });

        })->whereNotIn('id', $ex)->get();


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
