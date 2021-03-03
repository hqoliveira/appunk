@extends('admin.templates.app')

@section('title', 'Ministérios')

@section('content')

    @include('admin.includes.alerts')

    <div class="container">
        <h1>Cadastrar novo Ministério</h1>
        <form action="{{ route('team.store') }}" method="POST">
            @csrf
            <div class="container">

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <input type="text" name="name" class="form-control" placeholder="Ministério" value="{{old('name')}}">
                </div>
                <p><button type="submit" class="btn btn-success">Cadastrar</button></p>
            </div>
        </form>
    </div>

@endsection
