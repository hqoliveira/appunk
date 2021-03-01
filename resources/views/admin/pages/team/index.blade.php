@extends('admin.templates.app')

@section('title', 'Ministérios')
    
@section('title-pagina', 'Ministérios')

@section('content')

<div class="container-md">
    <h1>Ministérios Cadastrados</h1>
    <p><a href="{{ route('team.create') }}" class="btn btn-primary">Novo Ministério</a></p>
    
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th width='100'>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($team as $team)
                    <tr>
                        <td>{{ $team->name }}</td>
                        <td>
                            <a href="">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    
    </div>
</div>
    
@endsection
{{-- se for o adm vai mostrar todos os ministérios, porem se for o líder,
    vai mostrar somente a lista de membros referente ao ministério dele. --}}