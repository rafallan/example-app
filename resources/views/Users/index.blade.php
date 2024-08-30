@extends('template.layout')

@section('conteudo')
    <h1>Usuários</h1>

    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $usuarios->links() }}
    </div>
@endsection
