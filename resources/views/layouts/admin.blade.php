<!DOCTYPE html>
<html>

    <head>

        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link href="/css/core/materialize.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/css/libs/sweetalert/sweetalert.css">
        <link rel="stylesheet" href="/css/libs/toastr/toastr.css">
        <link href="/css/core/style.css" rel="stylesheet"/>

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

        <style>
            @import 'https://fonts.googleapis.com/css?family=Lato:400,400i,700';
            html, body {
                font-family: 'Lato', sans-serif;
            }
        </style>
    </head>

    <body>
        <div class="navbar-fixed">

            <nav class="indigo lighten-1 white-text">
                <ul class="dropdown-content" id="dropdown1">
                    <li>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form action="{{ url('/logout') }}" id="logout-form" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </li>
                    <li>
                        <a href="#!">two</a>
                    </li>
                    <li class="divider"></li>
                    <li> <a href="#!"> three </a> </li>
                </ul>

                <div class="nav-wrapper">
                    <a class="brand-logo" data-activates="slide-out" href="#!">
                        <i class="material-icons">menu</i>Ecommerce
                    </a>

                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="">
                                <i class="material-icons">search</i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">view_module</i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">refresh</i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-button" data-activates="dropdown1" href="">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>

        </div>

        @include('layouts.partials._sidebar')

        @yield('content')

        @section('scripts')
            <script src="/js/core/jquery.min.js" type="text/javascript"></script>
            <script src="/js/core/materialize.min.js"></script>
            <script src="/js/libs/jquery-validation/jquery.validate.min.js"></script>
            <script type="text/javascript" src="/js/libs/sweetalert/sweetalert.min.js"></script>
            <script type="text/javascript" src="/js/libs/toastr/toastr.min.js"></script>
            <script src="/js/core/init.js"></script>

            <script>
                $(".brand-logo").sideNav();

                $(".dropdown-button").dropdown();

                $(document).ready(function() {
                    $('select').material_select();

                    $('.modal-trigger').leanModal({
                        dismissible: false
                    });
                });

                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15 // Creates a dropdown of 15 years to control year
                });
            </script>
        @show


        @include('layouts.partials._alerts')


    </body>
</html>
