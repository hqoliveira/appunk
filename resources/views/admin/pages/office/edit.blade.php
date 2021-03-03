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
        <div class="mb-3">
            <select class="form-select" aria-label="Selecione o Ministério">
                <option selected>Ministério</option>
                @foreach ($offices as $item)
                    <option value="id_ministries">{{ $item->id_ministries }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>
</div>

@endsection
