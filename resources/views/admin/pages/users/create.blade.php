@extends('admin.templates.app')

@section('title', 'Cadastro de Membros')

@section('content')

    @include('admin.includes.alerts')

    <div class="container">
        <h1>Cadastrar Novo Membro</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="container">

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <input type="text" name="name" class="form-control" placeholder="Nome" value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <input type="text" name="telephone" class="form-control" placeholder="Telefone" value="{{old('telephone')}}">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Selecione o Ministério">
                        <option value="team" selected>Ministério</option>
                        @foreach ($team as $item)
                            <option value="team_id">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                </div>
                </p>
                <p><button type="submit" class="btn btn-success">Cadastrar</button></p>
            </div>
        </form>
    </div>
@endsection
