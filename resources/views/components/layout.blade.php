
<!DOCTYPE html>
<html lang="es">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="device= width, initial=scale=1.0"  >

        <title>{{ $title ?? 'Mi Proyecto' }}</title>
        <!--ESTILOS-->
            <link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/estilosPrincipal.css') }}"> 
            <link rel="stylesheet" href="{{ asset('css/estilosContacto.css') }}"> 
            <link rel="stylesheet" href="{{ asset('css/login.css') }}"> 
        <!--FUENTE-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&family=Patrick+Hand&display=swap" rel="stylesheet">  
    </head>

    <body>
        <x-navbar/>
        <x-login/>
        <main >
            {{ $slot }}
        </main>
        <x-footer/>
       <script src="{{ asset('js/login.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>    
    </body>
</html>

