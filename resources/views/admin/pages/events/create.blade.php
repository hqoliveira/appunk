@extends('admin.templates.app')

@section('title', 'Eventos')

@section('title-pagina', 'Eventos')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro de Evento') }}</div>
                    <div class="card-body">
                        <form action="{{ route('events.store') }}" method="POST">
                            @csrf
                            <div class="container">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label"></label>
                                    <input type="text" name="name" class="form-control" placeholder="Nome do Evento" value="">
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-2 col-form-label"><i class="fas fa-calendar"></i> Data do Evento</label>
                                    <div class="mb-3">
                                      <input name="date" class="form-control" type="date" value="" id="date-input">
                                    </div>
                                </div>
                                <p><button type="submit" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Cadastrar</button></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

