<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Room;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class RoomController extends Controller
{
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
