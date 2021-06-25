<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginControlador extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credenciais = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        $autenticacao = Auth::guard('admin')->attempt($credenciais, $request->remember);

        if($autenticacao){
            return redirect()->intended(route('admin.principal'));
        }

        return redirect()->back()->withInputs($request->only('email','remember'));

    }

    public function index(){
        return view("auth.admin-login");
    }

    
  

 


}
