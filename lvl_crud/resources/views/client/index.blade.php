@extends('theme.base')  <!-- esto para acceder a las demas vistas 
    para no tener que copiar lo mismo, ademas 
    en larabel se pone es (.) -->
@section('content')

    <div class="container py-5 text-center">
        <h1>Listado de clientes</h1>
        <a href="{{ route('client.create') }}" class="btn btn-primary">Crear clientes</a>
        
        @if (Session::has('mensaje'))
            <div class="alert alert-info my-5">
                {{ Session::get('mensaje')}}
            </div>
            
        @endif
        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Saldo</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <tr>
                    <td>FelinoHost</td>
                    <td>0.0</td>
                    <td>Editar - Eliminar</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection    