@if ($errors->count() > 0)
    <div class="alert alert-danger">

        @foreach ($errors->all() as $error)

            <script>
                Materialize.toast("{{ $error }}", 2000, 'red darken-3 white-text');
            </script>

        @endforeach

    </div>
@endif
