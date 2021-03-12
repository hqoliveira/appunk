@extends('admin.templates.app')

@section('title', 'Membros')

@section('content')
    <div class="container-md">
        <h1>Membros Cadastrados</h1>

        <p><a class="btn btn-primary" href="{{ route('users.create') }}">Cadastrar Membro</a></p>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ministério</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th width='100'>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->team_id }}</td>
                            <th>{{ $user->telephone }}</th>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                                <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $users->links() !!}

        </div>
    </div>

@endsection
