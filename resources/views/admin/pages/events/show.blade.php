@extends('admin.templates.app')

@section('title', "Evento {$event->name}")

@section('content')
<div class="container">
    <p><a class="btn btn-primary" href="{{route('events.index')}}">Back</a></p>
    <h1>Exibindo Detalhes do Evento</h1>
    <ul>
        <li>Nome: {{$event->name}}</li>
        <li>Data: {{ $event->date }}</li>
    </ul>

</div>


@endsection
