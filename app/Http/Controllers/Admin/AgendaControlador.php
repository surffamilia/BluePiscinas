<?php

namespace App\Http\Controllers\Admin;
use App\Agenda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaControlador extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {   
        $agenda = Agenda::all();
        return view('admin.agenda',compact('agenda'));

    }
}
