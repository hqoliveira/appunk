@extends('admin.templates.app')

@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Proximos Eventos') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="album py-5 bg-light">
              <div class="container-fluid">
          
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Nome do Evento</div>
                    <div class="card-body">
                      <h5 class="card-title">10/10/2021</h5>
                      <p class="card-text">Esta é a maneira que aparecerá os cultos e eventos cadastrados. </p>
                    </div>
                  </div>
                  <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Nome do Evento</div>
                    <div class="card-body">
                      <h5 class="card-title">11/10/2021</h5>
                      <p class="card-text">Esta é a maneira que aparecerá os cultos e eventos cadastrados. </p>
                    </div>
                  </div>
                  <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Nome do Evento</div>
                    <div class="card-body">
                      <h5 class="card-title">12/10/2021</h5>
                      <p class="card-text">Esta é a maneira que aparecerá os cultos e eventos cadastrados. </p>
                    </div>
                  </div>

                  
                  {{--  --}}
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