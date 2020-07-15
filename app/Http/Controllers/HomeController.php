<?php

namespace App\Http\Controllers;



use App\Models\Floor;
use App\Models\Person;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{

    private function countRoomOcupation()
    {
        return Count(Room::whereHas('reservations', function (Builder $query)  {

            $query->where(function ($query)  {
                $query->where('begin', '<', now());
                $query->orWhere('end', '<', now());
            });

            $query->where(function ($query)  {
                $query->where('begin', '>', now());
                $query->orWhere('end', '>', now());
            });

            $query->where('state', 'Ativa');

        })->get());
    }

    public function index()
    {

        $reservation_total = Count(Reservation::where('state','Ativa')->get());
        $reservation_canceled = Count(Reservation::where('state','Cancelada')->get());

        $room_reservations = $this->countRoomOcupation();

        $rooms = Room::get();

        $reservation_ocupation = 0;

        if (count($rooms) > 0) {
            $reservation_ocupation = ($room_reservations / Count($rooms)) * 100;
        }

        $reservation_ocupation = number_format($reservation_ocupation, 2, ',', '.');
        $people_total = Count( Person::get());

        $floors = Floor::with(['rooms.reservations' => function($query) {

            $query->where(function ($query) {
                $query->where('begin', '<', now());
                $query->orWhere('end', '<', now());
            });

            $query->where(function ($query)  {
                $query->where('begin', '>', now());
                $query->orWhere('end', '>', now());
            });
        } ])->get();

        return view('home', compact('floors', 'reservation_total', 'reservation_canceled', 'people_total',
        'reservation_ocupation'));
    }


}
