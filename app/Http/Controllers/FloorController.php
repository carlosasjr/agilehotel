<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\FloorRepositoryInterface;
use Illuminate\Http\Request;

class FloorController extends ControllerStandard
{
    public function __construct(FloorRepositoryInterface $floor)
    {
        $this->model = $floor;
        $this->title = 'Andares';
        $this->view = 'tenants.floors';
        $this->route = 'floors';

        $this->middleware('can:floors');

        $this->middleware('can:create_floor')->only(['create', 'store']);
        $this->middleware('can:update_floor')->only(['edit', 'update']);
        $this->middleware('can:view_floor')->only(['show']);
        $this->middleware('can:delete_floor')->only(['delete']);
    }
}
