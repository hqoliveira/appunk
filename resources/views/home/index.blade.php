@extends('admin.templates.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Proximos Eventos...') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container-fluid">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            @foreach ($events as $event)
                                <div class="card bg-light" style="max-width: 18rem;">
                                    <div class="card-header">{{ $event->name }}</div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ date('d/m/Y', strtotime($event->date)) }}</h5>
                                        <p></p>
                                        <a href="{{ route('home.show', $event->id) }}" type="button" class="btn btn-secondary btn-sm">
                                            <i class="fas fa-eye"></i> Vizualizar Escala Geral
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
