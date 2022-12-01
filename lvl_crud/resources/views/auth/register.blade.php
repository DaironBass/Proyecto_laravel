@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow">

    <h1 class="text-5xl text-center font-bold">Registro</h1>    

    <form class="mt-4" method="POST" action="">
        @csrf
        
        <input type="Texto" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre"
        id="nombre" name="nombre">

        <input type="Correo" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo"
        id="Correo" name="Correo">

        <input type="Contraseña" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
        id="Contraseña" name="Contraseña">  
        
        <input type="Contraseña" class="border border-gray-200 rounded-md bg-gray-200 
        w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Confirmar contraseña" id="Confirmar contraseña" 
        name="Confirmar contraseña">  

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600" >Enviar</button>

    </form>

</div>
    
@endsection    