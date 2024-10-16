@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Bienvenido a Igsoft</h2>
                    <p>Selecciona un módulo para comenzar:</p>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Ventas</a>
                        <a href="#" class="list-group-item list-group-item-action">Compras</a>
                        <a href="#" class="list-group-item list-group-item-action">Inventario</a>
                        <a href="#" class="list-group-item list-group-item-action">Recursos Humanos</a>
                        <a href="#" class="list-group-item list-group-item-action">Contabilidad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection