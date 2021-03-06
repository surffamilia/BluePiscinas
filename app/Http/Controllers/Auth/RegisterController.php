<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
     use RegistersUsers;

    protected $redirectTo = '/BluePiscinas';

   
    public function __construct()
    {
        $this->middleware('guest');
    }

   
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

  
    protected function create(array $data)
    {
        return User::create([
            'nome' => $data['nome'],
            'telefone' => $data['telefone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
