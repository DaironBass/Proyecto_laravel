<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>laravel CRUD</title>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css"> 
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="flex py-4 bg-indigo-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold">PRESTAMOS</p>
                
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            @if (auth()->check())
            <li class="mx-8"> 
                <p class="text-xl">Welcome <b>{{auth()->user()->name}}</b></p>
            </li>    
            <li>
                <a href="{{ route('login.destroy') }}" class="font-bold
                py-2 px-4 rounded-md bg-red-500 hover:bg-red-600
                hover:text-indigo-700">Cerrar Sesion</a>
            </li>
                
            @else

            <li class="mx-8"> 
                <a class="font-bold hover:bg-indigo-700 py-3 px-4">Usuario</a> 
            </li>
            <li>
              <a href="{{ route('login.index') }}" class="font-bold
              py-2 px-4 rounded-md bg-red-500 hover:bg-red-600
              hover:text-indigo-700">Cerrar Sesion</a>
            </li>
                
            @endif




        </ul>
        

    </nav>
    @yield('content')
</body>
</html>-->