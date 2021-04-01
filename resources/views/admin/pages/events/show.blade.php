@extends('admin.templates.app')

@section('title', "Evento {$event->name}")

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalhes do Evento') }}</div>
                    <div class="card-body">
                        <div class="container">
                            <p><a class="btn btn-primary" href="{{route('events.index')}}">Back</a></p>
                            <ul>
                                <li>Nome: {{$event->name}}</li>
                                <li>Data: {{ $event->date }}</li>
                            </ul>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar Evento</button>
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
