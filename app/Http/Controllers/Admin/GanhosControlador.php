<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GanhosControlador extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.ganhos');
    }
    public function produtos()
    {
        
        return view('admin.produtosganhos');
    }
}
