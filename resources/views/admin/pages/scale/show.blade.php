@extends('admin.templates.app')

@section('title', 'Escala Ministério')

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="justify-content-center">
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h3 class="text-themecolor mb-0 mt-0">Detalhes da escala</h3>
                </div>
            </div>
            @foreach ($scale as $item)
            <div class="row mt-3 form-inline">
                <div class="col-md-6">
                    <a class="btn btn-outline-secondary btn-sm" href="{{ route("scale.index") }}">
                        <em class="fas fa-arrow-left" aria-hidden="true"></em> Voltar
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-outline-secondary btn-sm" href="{{ route("scale.edit", $item->idScale) }}">
                        <em class="fas fa-pen" aria-hidden="true"></em> Editar
                    </a>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <small class="text-muted">Descrição</small>
                                <h6>{{ $item->eventName }}</h6>
                            </div>
                            <div class="col-md-12">
                                <small class="text-muted">Ministério</small>
                                <h6>{{ $item->teamName }}</h6>
                            </div>
                            <div class="col-md-12">
                                <small class="text-muted">Data do Evento</small>
                                <h6>{{ date('d/m/Y', strtotime($item->date)) }}</h6>
                            </div>
                            <div class="col-md-12">
                                <small class="text-muted">Responsável</small>
                                <h6>{{ $item->userName }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

    {{-- <div class="container">
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
                                        <li>Data: {{ date('d/m/Y', strtotime($item->date)) }}</li>
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
    </div> --}}
@endsection
