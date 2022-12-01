@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow">

    <h1 class="text-5xl text-center font-bold">Iniciar sesión</h1>    

    <form class="mt-4" method="POST" action="">
        @csrf<!-- Siempre hay quen poner para evitar errores con caidas de la pagina -->

        <input type="Correo" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo"
        id="Correo" name="Correo">

        <input type="Contraseña" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
        id="Contraseña" name="Contraseña">

        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full
        text-red-600 p-2 my-2">* Error</p>             
        @enderror 
    
       <!--<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600" >Enviar</button>-->
        <a href="{{ route('client.index') }}" type="submit" class="rounded-md bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600">Enviar</a>
        


    </form>

</div>

    
@endsection 