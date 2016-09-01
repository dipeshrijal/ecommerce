@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col s12 m12">

        <div class="card-panel">
            <div class="row">

                @foreach ($categories as $category)
                    <div class="col s12 m3">

                        <div class="card small p-small">

                            <a href="{{ route('categories.show', $category->id) }}">
                                <div class="card-header white-text cyan darken-2">
                                    <span class="card-title">{{ str_limit(strtoupper($category->name), 16) }} </span>
                                </div>
                            </a>

                            <ul class="right-align" style="margin:-20px 5px 0px 0px">
                                <a class="btn-floating green accent-4 modal-trigger" href="#edit-category{{ $category->id }}">
                                    <i class="material-icons">edit</i>
                                </a>
                                <a class="btn-floating red accent-2 delete-link">
                                    <i class="material-icons">archive</i>
                                </a>

                                @include('layouts.partials._delete_form', ['route' => ['categories.destroy', $category->id]])

                            </ul>
                            <div class="card-content">

                                @if (strlen($category->description) >= 100)
                                    <p>{{ str_limit($category->description, 100) }} <a href="{{ route('categories.show', $category->id) }}">more</a> </p>
                                @else
                                    <p>{{ $category->description }}
                                @endif


                            </div>


                        </div>

                        @include('admin.categories.partials._edit_modal')

                    </div>
                @endforeach

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
