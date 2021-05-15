@extends('admin.templates.app')

@section('title', 'Editar Escala')

@section('content')

<div class="container">
    <div class="container-fluid">
        <div class="justify-content-center">
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h3 class="text-themecolor mb-0 mt-0">Editar escala</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                @foreach ($scale as $item)
                                <form action="{{ route("scale.update", $item->scale_id) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <select id="select-team" name="team_id" class="form-select" aria-label="Selecione o Ministério">
                                            <option selected>Ministério</option>
                                            @foreach ($team as $item)
                                                <option value="{{ $item->id }}">{{ $item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select id="select-event" name="event_id" class="form-select" aria-label="Selecione o evento">
                                            <option selected>Evento</option>
                                            @foreach ($events as $event)
                                                <option value="{{ $event->id }}">{{ $event->date }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select id="select-user" name="user_id" class="form-select" aria-label="Selecione o responsável">
                                            <option selected>Responsável</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <p><button type="submit" class="btn btn-success">Salvar</button></p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
