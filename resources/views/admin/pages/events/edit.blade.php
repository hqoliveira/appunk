@extends('admin.templates.app')

@section('title', "Editar Evento {$event->name}")

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Evento') }}</div>
                    <div class="card-body">
                        <div class="container">
                        <form action="{{ route('events.update', $event->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"></label>
                                <input type="text" name="name" class="form-control" placeholder="Nome do Evento" value="{{ $event->name }}">
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-2 col-form-label">Data do Evento</label>
                                <div class="mb-3">
                                  <input name="date" class="form-control" type="date" value="{{ $event->date }}" id="date-input">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
