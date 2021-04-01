@extends('admin.templates.app')

@section('title', "Ministério")

@section('content')

<div class="container-md">

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Líder</th>
                    <th width='100'><li class="fas fa-user"></li> Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usersTeam as $user)
                    <tr>
                        <td>{{ $user->userName }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->idUser) }}"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
