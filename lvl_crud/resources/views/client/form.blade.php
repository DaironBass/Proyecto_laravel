@extends('theme.base')  <!-- esto para acceder a las demas vistas 
    para no tener que copiar lo mismo, ademas 
    en larabel se pone es (.) -->
@section('content')

    <div class="container py-5 text-center">
        <h1>Crear Cliente</h1>

        <form action="{{ route('client.store', ['id'=>1]) }}" method="post">
            @csrf


            <div class="mb-3">
                <label for="name" class="form-larabel">Nombre</label>
                <input type="text" name="name"class="form-control" placeholder="Nombre del cliente">
                <p class="form-text">Escriba el nombre del cliente</p>
                @error('name')<!-- comando de laravel, indica si hay un error en la seccion -->
                    <p class="form-text text-danger">{{$message}}</p>    
                @enderror
            </div>    

            <div class="mb-3">
                <label for="due" class="form-larabel">Saldo</label>
                <input type="number" name="due"class="form-control" placeholder="Saldo del cliente" step="0.01">
                <p class="form-text">Escriba el saldo del cliente</p>
                @error('due')
                  <p class="form-text text-danger">{{$message}}</p> 
                @enderror
            </div>  
            
            <div class="mb-3">
                <label for="comments" class="form-label">comentarios</label>
                <textarea name="comments" cols="30" cols="30" rows="4" class="form-control"></textarea>
                <p class="form-text">Escriba algunos comentarios</p>
                @error('comments')//<!-- comando de laravel, indica si hay un error en la seccion -->
                    <p class="form-text text-danger">{{$message}}</p>    
                @enderror
            </div>

            <button type="submit" class="btn btn-info">Guardar Cliente</button>
        
    </div>
@endsection    