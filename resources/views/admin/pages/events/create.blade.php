@extends('admin.templates.app')

@section('title', 'Eventos')

@section('title-pagina', 'Eventos')

@section('content')

<h1>Cadastro de Evento</h1>

<form action="{{ route('events.store') }}" method="POST">
    @csrf
    <div class="container">

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label"></label>
            <input type="text" name="name" class="form-control" placeholder="Nome do Evento" value="{{old('name')}}">
        </div>
        <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Data do Evento</label>
            <div class="mb-3">
              <input name="date" class="form-control" type="date" value="" id="date-input">
            </div>
        </div>
        <p><button type="submit" class="btn btn-success">Cadastrar</button></p>
    </div>
</form>
@endsection

