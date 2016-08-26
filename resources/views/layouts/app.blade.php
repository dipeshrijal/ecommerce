<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecommerce- Nepal number 1 shopping choice</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="/css/core/materialize.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
        <link rel="stylesheet" href="/css/core/style.css">

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
                <a href="/" class="brand-logo">
                    <i class="large material-icons">shopping_cart</i>
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    <li>
                        <a href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <!-- Scripts -->
        <script src="/js/core/jquery.min.js">
        </script>
        <script src="/js/core/materialize.min.js">
        </script>
        <script src="/js/libs/jquery-validation/jquery.validate.min.js">
        </script>
        <script src="/js/core/init.js">
        </script>

        @include('layouts.partials.alerts')


    </body>

</html>
