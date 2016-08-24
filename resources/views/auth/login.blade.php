@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="offset-s3 col s6 offset-s3">
            <div class="card z-depth-2" style="margin-top: 30%">
                <div class="card-title purple lighten-2 white-text center-align" style="padding: 10px">Login</div>
                <div style="padding: 10px">
                    <form action="{{ url('/login') }}" class="form-horizontal" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div>
                            <div>
                                <a class="btn btn-flat" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                                <button class="btn waves-effect waves-light green right" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                  </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
