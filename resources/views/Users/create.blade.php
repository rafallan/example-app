@extends('template.layout')

@section('conteudo')
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Usuário</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do usuário"
                value="{{ old('nome') }}">
            <div>
                {{ $errors->first('nome') }}
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ old('email') }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            <div>
                {{ $errors->first('email') }}
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                value="{{ old('password') }}">
            <div>
                {{ $errors->first('password') }}
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
