<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <!--Import materialize.css-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet"/>
        <!--Let browser know website is optimized for mobile-->
        <link rel="stylesheet" href="/css/style.css">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <style>
            @import 'https://fonts.googleapis.com/css?family=Lato:400,400i,700';
            html, body {
                font-family: 'Lato', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="navbar-fixed">
            <nav class="purple white-text">
                <ul class="dropdown-content" id="dropdown1">
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>



















                    <li>
                        <a href="#!">
                            two
                        </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="#!">
                            three
                        </a>
                    </li>
                </ul>
                <div class="nav-wrapper">
                    <a class="brand-logo" data-activates="slide-out" href="#!">
                        <i class="material-icons">
                            menu
                        </i>
                        Ecommerce
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="">
                                <i class="material-icons">
                                    search
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">
                                    view_module
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">
                                    refresh
                                </i>
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
        <ul class="side-nav" id="slide-out">
            <li>
                <div class="userView">
                    <img class="background" src="http://placehold.it/300x200">
                        <a href="#!user">
                            <img class="circle" src="http://placehold.it/64x64"/>
                        </a>
                        <a href="#!name">
                            <span class="white-text name">
                                John Doe
                            </span>
                        </a>
                        <a href="#!email">
                            <span class="white-text email">
                                jdandturk@gmail.com
                            </span>
                        </a>
                    </img>
                </div>
            </li>
            <li>
                <a href="#!">
                    <i class="material-icons">
                        cloud
                    </i>
                    First Link With Icon
                </a>
            </li>
            <li>
                <a href="#!">
                    Second Link
                </a>
            </li>
            <li>
                <div class="divider">
                </div>
            </li>
            <li>
                <a class="subheader">
                    Subheader
                </a>
            </li>
            <li>
                <a class="waves-effect" href="#!">
                    Third Link With Waves
                </a>
            </li>
        </ul>
        {{-- <div class="container"> --}}
            @yield('content')
        {{-- </div> --}}
    </body>
    <!--Import jQuery before materialize.js-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js">
    </script>
    <script>
        $(".brand-logo").sideNav();
        $(".dropdown-button").dropdown();
        $(document).ready(function() {
            $('select').material_select();
            $('.modal-trigger').leanModal();
        });
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    </script>
</html>
