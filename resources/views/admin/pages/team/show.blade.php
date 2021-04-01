@extends('admin.templates.app')

@section('title', "Ministério")

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalhes do Ministério') }}</div>
                    <div class="card-body">
                        <div class="container-md">
                            <div class="container">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome do Ministério</th>
                                            <th>Líder do Ministério</th>
                                            <th width='100'><li class="fas fa-user"></li> Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usersTeam as $user)
                                            <tr>
                                                <td>{{ $user->teamName }}</td>
                                                <td>{{ $user->userName }}</td>
                                                <td>
                                                    <a href="{{ route('team.edit', $user->idTeam) }}"><i class="fas fa-pencil-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
