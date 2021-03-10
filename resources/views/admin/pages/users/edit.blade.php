@extends('admin.templates.app')

@section('title', "Editar Evento {$user->name}")

@section('content')
<div class="container">
    <h1>Editar Membro: {{ $user->name }}</h1>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" name="name" class="form-control" placeholder="Nome do Membro" value="{{ $user->name }}">
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
</div>

@endsection
