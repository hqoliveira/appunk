@extends('admin.templates.app')

@section('title', "Membro {$member->name}")

@section('content')
<div class="container">
    <p><a class="btn btn-primary" href="{{route('members.index')}}">Back</a></p>
    <h1>Exibindo Detalhes</h1>
    <ul>
        <li>Nome: {{$member->name}}</li>
        <li>Ministério: {{$member->id_ministries}}</li>
        <li>Cargo: {{$member->id_office}}</li>
    </ul>

</div>   


@endsection