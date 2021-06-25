<?php

namespace App\Http\Controllers\Admin;
use App\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaLoadControlador extends Controller
{
    public function carrega()
    {
        $carregar = Agenda::all();

        return response()->json($carregar);
    }
}
