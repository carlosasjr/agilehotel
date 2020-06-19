<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ReservationRepositoryInterface;

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

    public function Checkin($id)
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

    public function Checkout($id)
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

    public function Cancel($id)
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
}
