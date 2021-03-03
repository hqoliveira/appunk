@extends('admin.templates.app')

@section('title', "Cargo {$offices->name}")

@section('content')
<div class="container">
    <p><a class="btn btn-primary" href="{{route('office.index')}}">Voltar</a></p>
    <h1>Exibindo Detalhes do Cargo</h1>
    <ul>
        <li>Nome: {{$offices->name}}</li>
        <li>Ministério: {{ $offices->id_ministries }}</li>
    </ul>

    <form action="{{ route('office.destroy', $offices->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar Ministério</button>
    </form>

</div>
@endsection
