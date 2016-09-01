@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col s12 m12">

        <div class="card-panel">
            <div class="row">
                <style>
                    .card-header {
                        padding: 20px;
                        overflow: hidden;
                    }
                </style>
                @foreach ($categories as $category)
                    <div class="col s12 m3">

                        <div class="card small p-small">

                            <div class="card-header white-text cyan darken-2">
                                <span class="card-title">{{ str_limit(strtoupper($category->name), 16) }} </span>
                            </div>
                            <ul class="right-align" style="margin:-20px 5px 0px 0px">
                                <a class="btn-floating blue accent-2"><i class="material-icons">visibility</i></a>
                                <a class="btn-floating green accent-4 modal-trigger" href="#edit-category{{ $category->id }}">
                                    <i class="material-icons">edit</i>
                                </a>
                                <a class="btn-floating red accent-2 delete-link">
                                    <i class="material-icons">archive</i>
                                </a>

                                {!! Form::open(['route' => ['categories.destroy', $category->id], 'style' => 'display:none', 'method' => 'delete', 'class' => 'delete-form']) !!}
                                {!! Form::close() !!}

                            </ul>
                            <div class="card-content">

                                @if (strlen($category->description) >= 100)
                                    <p>{{ str_limit($category->description, 100) }} <a href="{{ route('categories.show', $category->id) }}">more</a> </p>
                                @else
                                    <p>{{ $category->description }}
                                @endif


                            </div>


                        </div>

                        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'put', 'class' => 'form-validate']) !!}

                            <div class="modal modal-fixed-footer" id="edit-category{{ $category->id }}">
                                <div class="modal-content">

                                    <h4> Edit Form </h4>

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
            var form = $(this).next('.delete-form')
            event.preventDefault()
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this action",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#4caf50",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
            }, function(isConfirm){
                if (isConfirm) {
                    form.submit()
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
