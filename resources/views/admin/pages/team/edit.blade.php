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
        </p>
        <select id="select-leader" name="leader" class="form-select" aria-label="Selecione o Líder do Ministério">
            <option value="" selected>Líder</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
</div>

@endsection
