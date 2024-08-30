<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        return view('users.index', [
            'usuarios' => $users
        ]);
    }

    public function create()
    {
        return view('users.create');
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
