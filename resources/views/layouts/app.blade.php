<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ecommerce- Nepal number 1 shopping choice</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Import materialize.css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/style.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="purple white-text">
       <div class="nav-wrapper">
         <a href="/" class="brand-logo" style="padding-left:20px"><i class="large material-icons">shopping_cart</i></a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a href="/login">Login</a></li>
           <li><a href="/register">Register</a></li>
         </ul>
       </div>
     </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js">
    </script>
</body>
</html>
