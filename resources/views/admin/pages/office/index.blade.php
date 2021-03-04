@extends('admin.templates.app')

@section('title', 'Cargos')

@section('title-pagina', 'Ministérios')

@section('content')

<div class="container-md">
    <h1>Cargos Cadastrados</h1>
    <p><a href="{{ route('office.create') }}" class="btn btn-primary">Novo Cargo</a></p>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ministério</th>
                    <th width='100'>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offices as $office)
                    <tr>
                        <td>{{ $office->name }}</td>
                        <td>{{ $office->id_team }}</td>
                        <td>
                            <a href="{{ route('office.edit', $office) }}">Editar</a>
                            <a href="{{ route('office.show', $office->id) }}">Detalhes</a>
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
