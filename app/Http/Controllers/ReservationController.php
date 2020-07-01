<?php

namespace App\Http\Controllers;

use App\Mail\SendConfirmationReservation;
use App\Models\Room;
use App\Repositories\Contracts\ReservationRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends ControllerStandard
{
    public function __construct(ReservationRepositoryInterface $reservation)
    {
        $this->model = $reservation;
        $this->title = 'Reserva';
        $this->view = 'tenants.reservations';
        $this->route = 'reservations';

        $this->middleware('can:reservations');

        $this->middleware('can:create_reservation')->only(['create', 'store']);
        $this->middleware('can:update_reservation')->only(['edit', 'update']);
        $this->middleware('can:view_reservation')->only(['show']);
        $this->middleware('can:delete_reservation')->only(['delete']);
    }


    private function getRooms(array $rooms)
    {
        $arr = [];

        foreach ($rooms as $room) {
            $arr[] = $room['room_id'];
        }

        return $arr;
    }

    public function create()
    {
        $title = "Cadastrar {$this->title}";
        $people = [];
        return view("{$this->view}.create", compact('title', 'people'));
    }

    public function edit($id)
    {
        $data = $this->model->relationships('rooms')->find($id);

        $title = "Editar {$this->title}: {$data->name}";

        $people = $data->person->get()
                               ->pluck('name', 'id');;


        $rooms = $data->rooms;

        return view("{$this->view}.create", compact('title', 'data', 'people', 'rooms'));
    }


    public function store(Request $request)
    {
        $this->validate($request, $this->model->rules());

        $dataForm = $request->all();


        if (!isset($dataForm['rooms'])) {
            return redirect()->back()
                ->with('error', 'Não é permitido salvar uma reserva sem Apartamentos')
                ->withInput();
        }

        $arr = $this->getRooms($dataForm['rooms']);

        $reservation = $this->model->create($dataForm);

        if (!$reservation) {
            return redirect()->back()
                ->with('error', 'Falha ao cadastrar a Reserva')
                ->withInput();
        }

        $reservation->rooms()->attach($arr);


        return redirect()->route("{$this->route}.index")
            ->with('success', 'Registro realizado com sucesso!');
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, $this->model->rules());

        $dataForm = $request->all();

        if (!isset($dataForm['rooms'])) {
            return redirect()->back()
                ->with('error', 'Não é permitido salvar uma reserva sem Apartamentos')
                ->withInput();
        }

        $arr = $this->getRooms($dataForm['rooms']);


        $reservation = $this->model->find($id);

        $update = $reservation->update($dataForm);

        if (!$update) {
            return redirect()->back()
                ->with('error', 'Falha ao atualizar a Reserva')
                ->withInput();
        }

        $reservation->rooms()->sync($arr);


        return redirect()->route("{$this->route}.index")
            ->with('success', 'Registro atualizado com sucesso!');
    }




    public function showReservation($id, $action)
    {
        $data = $this->model->find($id);
        $title = "{$this->title}: {$data->name}";

        return view("{$this->view}.show", compact('title', 'data', 'action'));
    }

    public function actualizeStatus($id, Array $dataForm)
    {
        $data = $this->model->find($id);

        return  $data->update($dataForm);
    }

    public function checkin($id)
    {
        $dataForm = [];
        $dataForm['checkin'] = now();
        $dataForm['state'] = 'Checkin';

        $update = $this->actualizeStatus($id, $dataForm);

        if (!$update) {
            return redirect()->back()
                ->with('error', 'Falha ao atualizar')
                ->withInput();
        }

        return redirect()->route("{$this->route}.index")
            ->with('success', 'Check-In realizado com sucesso!');
    }

    public function checkout($id)
    {
        $dataForm = [];
        $dataForm['checkout'] = now();
        $dataForm['state'] = 'Checkout';

        $update = $this->actualizeStatus($id, $dataForm);

        if (!$update) {
            return redirect()->back()
                ->with('error', 'Falha ao atualizar')
                ->withInput();
        }

        return redirect()->route("{$this->route}.index")
            ->with('success', 'Check-Out realizado com sucesso!');
    }

    public function cancel($id)
    {
        $dataForm = [];
        $dataForm['canceled_at'] = now();
        $dataForm['state'] = 'Cancelada';

        $update = $this->actualizeStatus($id, $dataForm);

        if (!$update) {
            return redirect()->back()
                ->with('error', 'Falha ao atualizar')
                ->withInput();
        }

        return redirect()->route("{$this->route}.index")
            ->with('success', 'Reserva Cancelada com sucesso!');
    }


    public function confirmation($id)
    {
        $data = $this->model->relationships('person')->find($id);

        Mail::to($data->person->email)->send(new SendConfirmationReservation($data));

        return response()->json(['result' => true]);
    }

    public function  addRoom($id)
    {
        $room = Room::find($id);

        $title = "Cadastrar {$this->title}";
        $people = [];
        return view("{$this->view}.create", compact('title', 'people', 'room'));
    }
}
