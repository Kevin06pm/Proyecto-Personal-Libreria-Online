<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PROMETHEUS</title>

    <!------------------------------>
    @yield('enlace')
    <!------------------------------>
    
    <!------------------------------>
    @yield('enlaceBootstrap')
    <!------------------------------>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui-1.13.3.custom/jquery-ui.min.css') }}"> 
    
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('vendor/jquery-ui-1.13.3.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>


    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"><!--ICONOS-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


</head>

<body>

    <!-- Header-->
    @include('biblioteca.common.header')
    <br><br>
    <!-- Contactos section-->
    @yield('Contenido')

    <!-- Footer-->
    @include('biblioteca.common.footer')
    

    <!-- Bootstrap core JS-->
    @include('biblioteca.common.scripts')
  

</body>

</html>
