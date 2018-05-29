@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      
        <div class="col-md-3 offset-md-1">
            <div class="card">
                <!--<img class="card-img-top" src="{{ asset('images/usuarios.png') }}" alt="Card image cap">-->
                <div class="card-body text-center">
                    <a href="#" class="btn btn-primary">Ver Partidos</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <!--<img class="card-img-top" id="img1" src="{{ asset('images/doctor.svg') }}" alt="Card image cap">-->
                <div class="card-body text-center" id="seccionBtn1">
                    <a href="#" class="btn btn-primary">Ver Resultados</a>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection
