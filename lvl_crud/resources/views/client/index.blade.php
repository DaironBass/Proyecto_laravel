@extends('theme.base')  <!-- esto para acceder a las demas vistas 
    para no tener que copiar lo mismo, ademas 
    en larabel se pone es (.) -->
@section('content')

    <div class="container py-5 text-center">
        <p class="mb-4 text-2xl font-bold">Listado de clientes</p>
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
                @forelse ($clients as $detail)
                <tr>
                    <td>{{$detail->name}}</td>
                    <td>{{$detail->due}}</td>
                    <td>
                        <a href="{{ route('client.edit', $detail) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('client.destroy', $detail) }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar este cliente') ">Eliminar</button>

                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No hay registros</td>
                </tr> 
                @endforelse
              
            </tbody>
        </table>
  
        @if ($clients->count())
            {{$clients->links() }}            
        @endif

    </div>
@endsection    