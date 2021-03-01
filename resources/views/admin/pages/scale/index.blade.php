@extends('admin.templates.app')

@section('title', 'Escala')
    

@section('title-pagina', 'Escala')

@section('content')

    <p><a href="{{ route('scale.create') }}" class="btn btn-primary">Nova Escala</a></p>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ultimas Escalas') }}</div>
                    <div class="card">
                        <div class="card-body">
                          Dia da Escala
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="card-body">
                          Dia da Escala
                        </div>    
                    </div>
                    <div class="card">
                        <div class="card-body">
                          Dia da Escala
                        </div>    
                    </div>
                    <div class="card">
                        <div class="card-body">
                          Dia da Escala
                        </div>    
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection


 
