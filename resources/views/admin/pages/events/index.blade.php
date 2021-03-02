@extends('admin.templates.app')

@section('title', 'Eventos')

@section('title-pagina', 'Eventos')

@section('content')

<h1>Eventos Cadastrados</h1>

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
                        <td>{{ $events->date }}</td>
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

