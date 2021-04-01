@extends('admin.templates.app')

@section('title', 'Ministérios')

@section('content')
    @include('admin.includes.alerts')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastro de Novo Evento') }}</div>
                        <div class="card-body">
                            <div class="container">
                                <form action="{{ route('team.store') }}" method="POST">
                                    @csrf
                                    <div class="container">
                                        <div class="mb-3">
                                            <label class="form-label"></label>
                                            <input type="text" name="name" class="form-control" placeholder="Ministério" value="{{old('name')}}">
                                        </div>
                                        <div class="mb-3">
                                            <select id="select-leader" name="leader" class="form-select" aria-label="Selecione o Líder do Ministério">
                                                <option selected>Líder</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <p><button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Cadastrar</button></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
