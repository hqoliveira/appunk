@extends('admin.templates.app')

@section('title', "Ministério {$team->name}")

@section('content')
<div class="container">
    <p><a class="btn btn-primary" href="{{route('team.index')}}">Voltar</a></p>
    <h1>Exibindo Detalhes do Ministério</h1>
    <ul>
        <li>Nome: {{$team->name}}</li>
        <li>Líder: {{ $team->leader }}</li>
    </ul>

    <form action="{{ route('team.destroy', $team->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar Ministério</button>
    </form>

</div>
@endsection
