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
                <p><button type="submit" class="btn btn-success">Cadastrar</button></p>
            </div>
        </form>
    </div>

@endsection
