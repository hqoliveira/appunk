@extends('admin.templates.app')

@section('title', 'Escala Ministério')

@section('content')

    <div class="container">
        <div class="container-fluid">
            <div class="justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Detalhes da Escala') }}</div>
                        <div class="mb-3">
                            @foreach ($scale as $item)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <ul>
                                        <li>Evento: {{ $item->eventName }}</li>
                                        <li>Data: {{ $item->date }}</li>
                                        <li>Responsável: {{ $item->userName }}</li>
                                    </ul>
                                    <div class="mb-3">
                                        <form action="{{ route('scale.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Deletar Escala</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
