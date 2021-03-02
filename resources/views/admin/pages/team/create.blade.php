@extends('admin.templates.app')

@section('title', 'Ministérios')

@section('content')

    <h1>Cadastrar novo Ministério</h1>

    @include('admin.includes.alerts')

    <form action="{{ route('team.store') }}" method="POST">
        @csrf
        <div class="container">

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label"></label>
                <input type="text" name="name" class="form-control" placeholder="Ministério" value="{{old('name')}}">
            </div>
            {{-- <div class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Cargo</option>
                    @foreach ($office as $item)
                        <option value="id_office">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div> --}}
            <p><button type="submit" class="btn btn-success">Cadastrar</button></p>
        </div>
    </form>
@endsection
