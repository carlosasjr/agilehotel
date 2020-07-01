<?php

namespace App\Http\Controllers;



use App\Models\Floor;

class HomeController extends Controller
{

    public function index()
    {

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

        return view('home', compact('floors'));
    }


}
