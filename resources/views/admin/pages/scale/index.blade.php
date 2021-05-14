@extends('admin.templates.app')
@section('title', 'Escala')
@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="justify-content-center">
                <div class="card" >
                    <div class="card-header">{{ __('Escalas') }}</div>
                    <div class="card-body">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-secondary btn-sm" href="{{ route("scale.create") }}"><li class="fas fa-plus"></li> Adicionar Escala</a>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <table class="table table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Descrição</th>
                                        <th> Ministério</th>
                                        <th> Líder</th>
                                        <th width='100'> Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($scale as $item)
                                        <tr>
                                            <td><a href="{{ route('scale.show', $item->id) }}">{{ $item->eventName }}</td>
                                            <td> {{ $item->teamName }} </a></td>
                                            @foreach ($leaders as $leader)
                                                @if ($item->idTeam == $leader->id)
                                                    <td><li class="fas fa-user"></li> {{ $leader->userName }}</td>
                                                @endif
                                            @endforeach
                                            <td><a href="{{ route('scale.edit', $item->scale_id) }}"><li class="fas fa-edit"></li></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
