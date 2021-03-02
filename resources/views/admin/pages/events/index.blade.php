@extends('admin.templates.app')

@section('title', 'Eventos')

@section('title-pagina', 'Eventos')

@section('content')

<div class="container-md">
    <h1>Eventos Cadastrados</h1>
    <p><a href="{{ route('events.create') }}" class="btn btn-primary">Novo Evento</a></p>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Evento</th>
                    <th>Data</th>
                    <th width='100'>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->date }}</td>
                        <td>
                            <a href="{{ route('events.edit', $event->id) }}">Editar</a>
                            <a href="{{ route('events.show', $event->id) }}">Detalhes</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>

@endsection

