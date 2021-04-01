@extends('admin.templates.app')

@section('title', 'Ministérios')

@section('title-pagina', 'Ministérios')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Proximos Eventos') }}</div>
                    <div class="card-body">
                        <div class="container-md">
                            <p><a href="{{ route('team.create') }}" class="btn btn-primary btn-sm"> <i class="fas fa-plus"></i> Novo Ministério</a></p>
                        
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
                                        @foreach ($team as $item)
                                            <tr>
                                                <td><a href="{{ route('team.show', $item->id) }}"><li class="fas fa-bible"></li> {{ $item->name }} </a></td>
                                                @foreach ($leaders as $leader)
                                                    @if ($item->id == $leader->id)
                                                        <td><li class="fas fa-user"></li> {{ $leader->userName }}</td>
                                                    @endif
                                                @endforeach
                                                <td>
                                                    <a href="{{ route('team.edit', $item->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="{{ route('team.show', $item->id) }}"><i class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $team->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- se for o adm vai mostrar todos os ministérios, porem se for o líder,
    vai mostrar somente a lista de membros referente ao ministério dele. --}}
