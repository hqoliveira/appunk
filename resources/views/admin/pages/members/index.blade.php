@extends('admin.templates.app')

@section('title', 'Membros')

@section('title-pagina', 'Membros')

@section('content')
    <div class="container-md">
        <h1>Membros Cadastrados</h1>
        
        <p><a class="btn btn-primary" href="{{ route('members.create') }}">Cadastrar Membro</a></p>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Ministério</th>
                        <th width='100'>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->id_office }}</td>
                            <td>{{ $member->id_ministries }}</td>
                            <td>
                                <a href="{{ route('members.show', $member->id) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $members->links() !!}
        
        </div>
    </div>
    
@endsection