@extends('admin.templates.app')

@section('title', 'Editar Escala')

@section('content')

<div class="container">
    <div class="container-fluid">
        <div class="justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Escala') }}</div>
                        <div class="card-body">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                @foreach ($team as $item)
                                    <div class="card border-dark mb-3" style="width: 18rem;">
                                        {{-- <div class="card-header">Header</div> --}}
                                        <div class="card-body text-dark">
                                        <h5 class="card-title">{{ $item->name }}</h5>
                                        <p class="card-text">Criar Escala</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
