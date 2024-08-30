<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return Inertia::render('Users/Index', [
            'usuarios' => $usuarios
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store(UserRequest $request)
    {
        $data = [
            'name'   => $request->input('nome'),
            'email'  => $request->input('email'),
            'password' => Hash::make($request->password)
        ];

        $cadastrado = User::create($data);

        return redirect()->route('home');
    }
}
