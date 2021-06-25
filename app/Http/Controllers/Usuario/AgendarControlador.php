<?php

namespace App\Http\Controllers\Usuario;
use App\Http\Controllers\Controller;
use App\Agenda;

use Illuminate\Http\Request;

class AgendarControlador extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Contracts\Support\Renderable
 */
        public function index()
    {
        return view('usuario.agendar');
    }

    public function salvar(Request $request)
    {
        $agenda = new Agenda();
        $agenda->title = $request->input('title');
        $agenda->start = $request->input('start');
        $agenda->cidade = $request->input('cidade');
        $agenda->bairro = $request->input('bairro');
        $agenda->rua = $request->input('rua');
        $agenda->numero = $request->input('numero');
        $agenda->tamanho = $request->input('tamanho');
        $agenda->pagamento = $request->input('pagamento');
        $agenda->save();

        return redirect(route('agendar'));
    }
}