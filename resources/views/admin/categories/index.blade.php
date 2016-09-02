@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col s12 m12">
        <div class="card-panel">
            <div class="row">

                @foreach ($categories as $category)

                    <div class="col s12 m6 l3">

                        <div class="row">

                            <div class="card small p-small">

                                <a href="{{ route('categories.show', $category->id) }}">
                                    <div class="card-header cyan darken-2 white-text">
                                        {{ $category->name }}
                                    </div>
                                </a>

                                <div class="fixed-action-btn horizontal" style="position:absolute; bottom: 112px; right: 15px;">

                                    <a class="btn-floating cyan accent-4">
                                        <i class="large material-icons">more_vert</i>
                                    </a>

                                    <ul style="width:100px;">

                                        <a class="btn-floating green accent-4 modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit" href="#edit-category{{ $category->id }}">
                                            <i class="material-icons">edit</i>
                                        </a>

                                        <a class="btn-floating red accent-2 delete-link tooltipped" data-position="bottom" data-delay="50" data-tooltip="Archive">
                                            <i class="material-icons">archive</i>
                                        </a>

                                        @include('layouts.partials._delete_form', ['route' => ['categories.destroy', $category->id]])

                                    </ul>

                                </div>

                                <div class="card-content" style="overflow:hidden; max-height:110px;min-height:110px;">
                                    <p>
                                        {{ $category->description }}
                                    </p>
                                </div>

                            </div>

                        </div>

                        @include('admin.categories.partials._edit_modal')

                    </div>

                @endforeach

            </div>

            <div class="center-align">
                {{ $categories->links() }}
            </div>

        </div>
    </div>
</div>

@include('admin.categories.partials._create_modal')

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



