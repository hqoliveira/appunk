@extends('admin.templates.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $event->name }}
                </div>
                <div class="card-body">

                    <div class="album py-5 bg-light">
                        <div class="container-fluid">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        @foreach ($scale as $item)
                                            <ul>
                                                <li>Ministério: {{ $item->teamName }}</li>
                                                <li>Escalado(a): {{ $item->userName }}</li>
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
