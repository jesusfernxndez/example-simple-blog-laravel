@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Datos de Usuario</h3>
                </div>
                <div class="card-body">
                    <i>Nombre: </i>
                    <h5>{{ auth()->user()->name }}</h5>
                    <hr>
                    <i>Correo Electrónico: </i>
                    <h5>{{ auth()->user()->email }}</h5>
                    <hr>
                    <i>Usuario Verificado: </i>
                    @if ( auth()->user()->email_verified_at !== null )
                        <div class="alert alert-success">
                            <h5>Correo electronico verificado</h5>
                        </div>
                    @else
                        <div class="alert alert-danger">
                            <h5>Correo electronico no verificado</h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
