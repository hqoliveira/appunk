@extends('admin.templates.app')

@section('title', "Membro {$users->name}")

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalhes do Membro') }}</div>
                    <div class="card-body">
                        <div class="container">
                            <p><a class="btn btn-primary" href="{{route('users.index')}}">Back</a></p>
                            <ul>
                                <li>Nome: {{$users->name}}</li>
                                <li>Ministério:
                                    @foreach ($usersTeam as $item)
                                        @if ($item->idUser == $users->id)
                                            {{ $item->teamName }}
                                        @endif
                                    @endforeach
                                </li>
                                <li>Telefone: {{ $users->telephone }}</li>
                                <li>Email: {{ $users->email }}</li>
                            </ul>
                            <form action="{{ route('users.destroy', $users->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Deletar Membro</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
