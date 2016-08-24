<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet">
                <!--Let browser know website is optimized for mobile-->
                <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            </link>
        </link>
    </head>
    <body>
        <div class="navbar-fixed">
            <nav>
                <ul class="dropdown-content" id="dropdown1">
                    <li>
                        <a href="#!">
                            one
                        </a>
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
                        Logo
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
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col s12">
                        <div class="card z-depth-2">
                            <div class="card-content">
                                <span class="card-title">
                                    Display Record
                                </span>
                                <table class="bordered highlight responsive-table">
                                    <thead>
                                        <tr>
                                            <th data-field="id">
                                                Name
                                            </th>
                                            <th data-field="name">
                                                Item Name
                                            </th>
                                            <th data-field="price">
                                                Item Price
                                            </th>
                                            <th data-field="edit">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Alvin
                                            </td>
                                            <td>
                                                Eclair
                                            </td>
                                            <td>
                                                $0.87
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <i class="material-icons">
                                                        node_edit
                                                    </i>
                                                </a>
                                                <a href="#">
                                                    <i class="material-icons">
                                                        delete
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Alan
                                            </td>
                                            <td>
                                                Jellybean
                                            </td>
                                            <td>
                                                $3.76
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <i class="material-icons">
                                                        node_edit
                                                    </i>
                                                </a>
                                                <a href="#">
                                                    <i class="material-icons">
                                                        delete
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jonathan
                                            </td>
                                            <td>
                                                Lollipop
                                            </td>
                                            <td>
                                                $7.00
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <i class="material-icons">
                                                        node_edit
                                                    </i>
                                                </a>
                                                <a href="#">
                                                    <i class="material-icons">
                                                        delete
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            {{--
                            <div class="card-action">
                                <a href="#">
                                    This is a link
                                </a>
                                <a href="#">
                                    This is a link
                                </a>
                            </div>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <button class="btn-floating btn-large red modal-trigger" data-target="modal1">
                <i class="large material-icons">
                    add
                </i>
            </button>
        </div>
        <!-- Modal Structure -->
        <div class="modal modal-fixed-footer" id="modal1">
            <div class="modal-content">
                <h4>
                    Create Form
                </h4>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">
                                account_circle
                            </i>
                            <input class="validate" id="first_name" type="text"/>
                            <label for="first_name">
                                First Name
                            </label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">
                                account_circle
                            </i>
                            <input class="validate" id="last_name" type="text"/>
                            <label for="last_name">
                                Last Name
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">
                                contact_phone
                            </i>
                            <input class="validate" id="phone" type="text"/>
                            <label for="phone">
                                Phone
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">
                                perm_identity
                            </i>
                            <input class="validate" id="password" type="password"/>
                            <label for="password">
                                Password
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">
                                email
                            </i>
                            <input class="validate" id="email" type="email"/>
                            <label for="email">
                                Email
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">
                                comment
                            </i>
                            <textarea class="materialize-textarea" id="textarea1">
                            </textarea>
                            <label for="textarea1">
                                Textarea
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">
                                play_arrow
                            </i>
                            <select>
                                <option disabled="disabled" selected="selected" value="">
                                    Choose your option
                                </option>
                                <option value="1">
                                    Option 1
                                </option>
                                <option value="2">
                                    Option 2
                                </option>
                                <option value="3">
                                    Option 3
                                </option>
                            </select>
                            <label>
                                Materialize Select
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">
                                play_arrow
                            </i>
                            <select multiple="multiple">
                                <option disabled="disabled" selected="selected" value="">
                                    Choose your option
                                </option>
                                <option value="1">
                                    Option 1
                                </option>
                                <option value="2">
                                    Option 2
                                </option>
                                <option value="3">
                                    Option 3
                                </option>
                            </select>
                            <label>
                                Materialize Select
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <i class="material-icons prefix">
                                done
                            </i>
                            <input id="test1" name="group1" type="radio"/>
                            <label for="test1">
                                Red
                            </label>
                            <input id="test2" name="group1" type="radio"/>
                            <label for="test2">
                                Yellow
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <i class="material-icons prefix">
                                done
                            </i>
                            <input id="test5" type="checkbox"/>
                            <label for="test5">
                                Red
                            </label>
                            <input checked="checked" id="test6" type="checkbox"/>
                            <label for="test6">
                                Yellow
                            </label>
                            <input checked="checked" class="filled-in" id="filled-in-box" type="checkbox"/>
                            <label for="filled-in-box">
                                Filled in
                            </label>
                            <input id="indeterminate-checkbox" type="checkbox"/>
                            <label for="indeterminate-checkbox">
                                Indeterminate Style
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="switch">
                                <i class="material-icons prefix">
                                    play_arrow
                                </i>
                                <label>
                                    Off
                                    <input type="checkbox"/>
                                    <span class="lever">
                                    </span>
                                    On
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 file-field input-field">
                            <div class="btn">
                                <span>
                                    File
                                </span>
                                <input type="file"/>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">
                                perm_contact_calendar
                            </i>
                            <input class="datepicker" id="date" type="date"/>
                            <label for="date">
                                Date
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="waves-effect waves-light btn-flat" type="submit">
                    <i class="material-icons right">
                        send
                    </i>
                    Save
                </button>
                <button class="modal-action modal-close waves-effect waves-light btn-flat">
                    Cancel
                </button>
            </div>
        </div>
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
