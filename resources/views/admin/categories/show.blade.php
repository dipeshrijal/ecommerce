@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col s12 m12">
            <div class="card-panel">
                <div class="card-header cyan darken-2 white-text">

                        <div class="row">

                            <div class="col s6">
                                <h5>
                                    <i class="material-icons valign-center">
                                        assignment
                                    </i>
                                    {{ $category->name }}
                                </h5>
                            </div>

                            <div class="col s6">
                                <a href="{{ route('categories.index') }}" class="btn-floating cyan darken-3 btn-flat right">
                                    <i class="white-text medium material-icons valign-center">
                                        keyboard_backspace
                                    </i>
                                </a>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col s12">
                                <i class="material-icons valign-center">date_range</i>
                                {{ $category->created_at->format('jS F, Y') }}
                            </div>

                        </div>

                </div>
                <ul class="right-align" style="margin:-20px 5px 0px 0px">
                    <a class="btn-floating green accent-4 modal-trigger hoverable" href="#edit-category{{ $category->id }}">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating red accent-2 delete-link hoverable">
                        <i class="material-icons">archive</i>
                    </a>

                    @include('layouts.partials._delete_form', ['route' => ['categories.destroy', $category->id]])

                </ul>
                <div class="card-content">
                    <p class="left-align">{!! nl2br($category->description) !!}</p>
                </div>
            </div>
        </div>
    </div>

    @include('admin.categories.partials._edit_modal')

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

@stop
