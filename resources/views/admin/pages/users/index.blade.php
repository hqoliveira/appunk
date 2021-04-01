@extends('admin.templates.app')

@section('title', 'Membros')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Membros Cadastrados') }}</div>
                <div class="card-body">
                    <div class="container-md">
                        <p><a class="btn btn-primary btn-sm" href="{{ route('users.create') }}"><i class="fas fa-plus"></i> Novo Membro</a></p>
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
                                            <td><li class="fas fa-user"></li> {{ $user->name }}</td>
                                            <td>
                                                @foreach ($teamUser as $item)
                                                    @if ($item->idUser == $user->id)
                                                    <li class="fas fa-bible"></li> {{ $item->teamName }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <th><li class="fas fa-phone-alt"></li> {{ $user->telephone }}</th>
                                            <td><li class="fas fa-envelope"></li> {{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('users.edit', $user->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="{{ route('users.show', $user->id) }}"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $users->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
