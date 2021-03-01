@extends('admin.templates.app')

@section('title', 'Cadastro de Membros')

@section('content')
    <h1>Cadastrar Novo Membro</h1>
    @include('admin.includes.alerts')

    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <div class="container">
            
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label"></label>
                <input type="text" name="name" class="form-control" placeholder="Nome" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Selecione o Ministério">
                    <option selected>Ministério</option>
                    @foreach ($team as $item)
                        <option value="id_ministries">{{ $item->name }}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Cargo</option>
                    @foreach ($office as $item)
                        <option value="id_office">{{ $item->name }}</option>
                    @endforeach
                </select>    
            </div>
            <p><button type="submit" class="btn btn-success">Cadastrar</button></p>
        </div>
    </form>
  

@endsection
