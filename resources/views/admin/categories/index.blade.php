@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col s12 m12">

        <div class="card-panel">
            <div class="row">

                @foreach ($categories as $category)
                    <div class="col s12 m3">

                        <div class="card small p-small">

                            <div class="card-content">
                                <span class="card-title">{{ str_limit($category->name, 20) }}</span>

                                <a class='dropdown-button right' href='#' data-activates='card-drop{{ $category->id }}'><i class="material-icons">more_vert</i></a>

                                <ul id='card-drop{{ $category->id }}' class='dropdown-content'>
                                  <li><a href="#edit-category{{ $category->id }}" class="center-align modal-trigger"><i class="material-icons green-text">mode_edit</i></a></li>
                                  <li class="divider"></li>
                                  <li><a href="#!" class="center-align delete-link"><i class="material-icons red-text">delete</i></a></li>
                                </ul>

                                {!! Form::open(['route' => ['categories.destroy', $category->id], 'style' => 'display:none', 'method' => 'delete', 'class' => 'delete-form']) !!}
                                {!! Form::close() !!}

                                {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'put', 'class' => 'form-validate']) !!}

                                    <div class="modal modal-fixed-footer" id="edit-category{{ $category->id }}">
                                        <div class="modal-content">

                                            <h4> Edit Form </h4>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons green-text prefix">
                                                        account_circle
                                                    </i>
                                                    {!! Form::text('name', null, ['class' => $errors->has('name') ? 'invalid' : '', 'id' => 'name', 'autofocus']) !!}
                                                    <label for="name" data-error="{{ $errors->first('name') }}"> Category Name <span class="red-text">*</span></label>


                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons green-text prefix">
                                                        comment
                                                    </i>
                                                    {!! Form::textarea('description', null, ['class' => 'materialize-textarea', 'id' => 'description']) !!}
                                                    <label for="description">
                                                        Category Description
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="waves-effect waves-light btn-flat green white-text submit" type="submit" style="margin-left:20px">
                                                <i class="material-icons white-text right">
                                                    send
                                                </i>
                                                Save
                                            </button>

                                            <button class="modal-action modal-close waves-light waves-red btn-flat white-text red" type="button">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>

                                {!! Form::close() !!}

                                <p>{{ $category->description }}</p>
                            </div>

                            <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href="#">This is a link</a>
                            </div>

                        </div>

                    </div>
                @endforeach

            </div>
        </div>

    </div>
</div>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <button class="btn-floating btn-large red modal-trigger" data-target="add-category">
        <i class="large material-icons">
            add
        </i>
    </button>
</div>

{!! Form::open(['route' => 'categories.store', 'class' => 'col s12 form-validate']) !!}

    <div class="modal modal-fixed-footer" id="add-category">
        <div class="modal-content">

            <h4> Create Form </h4>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons green-text prefix">
                        account_circle
                    </i>
                    {!! Form::text('name', null, ['class' => $errors->has('name') ? 'invalid' : '', 'id' => 'name', 'autofocus', 'required']) !!}
                    <label for="name" data-error="{{ $errors->first('name') }}"> Category Name <span class="red-text">*</span></label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons green-text prefix">
                        comment
                    </i>
                    {!! Form::textarea('description', null, ['class' => 'materialize-textarea', 'id' => 'description']) !!}
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

            <button class="modal-action modal-close waves-light waves-red btn-flat white-text red" type="button">
                Cancel
            </button>
        </div>
    </div>

{!! Form::close() !!}

@stop

@section('scripts')
    @parent

    <script>
        $('.delete-link').on('click', function(event) {
            var form = $(this).closest('ul').next('.delete-form')
            event.preventDefault()
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this action",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "green",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm){
                if (isConfirm) {
                    form.submit()
                } else {
                    swal.close()
                }
            });

        });
    </script>

    @if ($errors->count() > 0)
        <script>
            $('#add-category').openModal();
        </script>
    @endif

@stop
