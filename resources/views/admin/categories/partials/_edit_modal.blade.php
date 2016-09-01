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
                Update
            </button>

            <button class="modal-action modal-close waves-light waves-red btn-flat white-text red" type="button">
                Cancel
            </button>
        </div>
    </div>

{!! Form::close() !!}
