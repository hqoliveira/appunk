@extends('admin.templates.app')

@section('title', 'Cargos')

@section('content')

    @include('admin.includes.alerts')

    <div class="container">
        <h1>Cadastrar novo Cargo</h1>
        <form action="{{ route('office.store') }}" method="POST">
            @csrf
            <div class="container">

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <input type="text" name="name" class="form-control" placeholder="Cargo" value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Selecione o Ministério">
                        <option selected>Ministério</option>
                        @foreach ($team as $item)
                            <option value="id_ministries">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <p><button type="submit" class="btn btn-success">Cadastrar</button></p>
            </div>
        </form>
    </div>

@endsection
