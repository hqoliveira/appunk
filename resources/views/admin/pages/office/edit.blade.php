@extends('admin.templates.app')

@section('title', "Editar Cargo {$offices->name}")

@section('content')
<div class="container">
    <h1>Editar Cargo: {{ $offices->name }}</h1>
<form action="{{ route('office.update', $offices->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" name="name" class="form-control" placeholder="Nome do Cargo" value="{{ $offices->name }}">
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
</div>

@endsection
