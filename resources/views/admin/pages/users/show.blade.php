@extends('admin.templates.app')

@section('title', "Membro {$users->name}")

@section('content')
<div class="container">
    <p><a class="btn btn-primary" href="{{route('users.index')}}">Back</a></p>
    <h1>Exibindo Detalhes</h1>
    <ul>
        <li>Nome: {{$users->name}}</li>
        <li>Ministério: </li>
        <li>Telefone: {{ $users->telephone }}</li>
        <li>Email: {{ $users->email }}</li>
    </ul>
    <form action="{{ route('users.destroy', $users->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar Membro</button>
    </form>
</div>


@endsection
