@extends('admin.templates.app')

@section('title', "Editar Ministério {$team->name}")

@section('content')
<div class="container">
    <h1>Editar Ministério: {{ $team->name }}</h1>
<form action="{{ route('team.update', $team->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" name="name" class="form-control" placeholder="Nome do Ministério" value="{{ $team->name }}">
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
</div>

@endsection
