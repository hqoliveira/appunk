@extends('admin.templates.app')

@section('title', 'Escala')

@section('content')

    <div class="container">
        <div class="container-fluid">
            <div class="justify-content-center">
                <div class="card" >
                    <div class="card-header">{{ __('Escolha o ministério') }}</div>
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            @foreach ($allTeam as $team)
                                <div class="card border-dark mb-3" style="width: 18rem;">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">{{ $team->name }}</h5>
                                        <div class="btn-group">
                                            <a class="btn btn-secondary" href="{{ route('scale.create') }}">Criar</a>
                                            <a class="btn btn-secondary" href="{{ route('scale.show', $team->id) }}">Vizializar</a>
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
