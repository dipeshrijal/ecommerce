@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col s12 m12">

        <div class="card-panel">
            <div class="row">

                <div class="col s12 m4">

                    <div class="card">

                        <div class="card-content">
                            <span class="card-title">Card Title</span>

                            <a class='dropdown-button right' href='#' data-activates='card-drop'><i class="material-icons">more_vert</i></a>

                            <ul id='card-drop' class='dropdown-content'>
                              <li><a href="#modal1" class="center-align modal-trigger"><i class="material-icons green-text">mode_edit</i></a></li>
                              <li class="divider"></li>
                              <li><a href="#!" class="center-align"><i class="material-icons red-text">delete</i></a></li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quas, animi cum tempore, aperiam voluptatum amet! Quam, possimus quibusdam qui cumque eius veniam recusandae quod aspernatur, excepturi vero maxime! Voluptatum.</p>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

<form class="col s12" action="{{ url('/admin/categories') }}" method="post">

    {{ csrf_field() }}

    <div class="modal modal-fixed-footer" id="modal1">
        <div class="modal-content">

            <h4> Create Form </h4>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons green-text prefix">
                        account_circle
                    </i>
                    <input class="validate" id="name" type="text"/>
                    <label for="name">
                        Category Name
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons green-text prefix">
                        comment
                    </i>
                    <textarea class="materialize-textarea" name="description" id="description"></textarea>
                    <label for="description">
                        Category Description
                    </label>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="waves-effect waves-light btn-flat green white-text" type="submit" style="margin-left:20px">
                <i class="material-icons white-text right">
                    send
                </i>
                Save
            </button>

            <button class="modal-action modal-close waves-light waves-red btn-flat white-text red">
                Cancel
            </button>
        </div>
    </div>

</form>

@stop
