@extends('layouts.app')

@section('content')
<div class="row">
    <div class="offset-s2 col s8 offset-s2">
        <div class="card z-depth-2" style="margin-top: 10%">
            <div class="card-title purple lighten-2 white-text center-align" style="padding: 10px">
                Register
            </div>
            <div style="padding: 10px">
                <form action="{{ url('/register') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s6">
                            <input class="validate" id="first_name" name="first_name" type="text">
                                <label for="first_name">
                                    First Name
                                </label>
                            </input>
                        </div>
                        <div class="input-field col s6">
                            <input class="validate" id="last_name" name="last_name" type="text">
                                <label for="last_name">
                                    Last Name
                                </label>
                            </input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input class="validate" id="email" name="email" type="email">
                                <label for="email">
                                    Email
                                </label>
                            </input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input class="validate" id="password" name="password" type="password">
                                <label for="password">
                                    Password
                                </label>
                            </input>
                        </div>
                        <div class="input-field col s6">
                            <input class="validate" id="password_confirmation" name="password_confirmation" type="password">
                                <label for="password_confirmation">
                                    Password
                                </label>
                            </input>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a class="btn btn-flat" href="{{ url('/login') }}">
                                Already have an account ?
                            </a>
                            <button class="btn waves-effect waves-light green right" name="action" type="submit">
                                Sign Up
                                <i class="material-icons right">
                                    send
                                </i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
