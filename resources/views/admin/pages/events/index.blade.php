@extends('admin.templates.app')

@section('title', 'Eventos')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Eventos Cadastrados') }}</div>
                    <div class="card-body">
                        <div class="container-md">
                            <p><a href="{{ route('events.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Novo Evento</a></p>
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
                                                <td><i class="fas fa-event"></i> {{ $event->name }}</td>
                                                <td><i class="fas fa-calendar-day"></i> {{ date('d/m/Y', strtotime($event->date)) }}</td>
                                                <td>
                                                    <a href="{{ route('events.edit', $event->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="{{ route('events.show', $event->id) }}"><i class="fas fa-eye"></i></a>
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

