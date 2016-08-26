@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="offset-s2 col s8 offset-s2">
            <div class="card z-depth-2" style="margin-top: 10%">
                <div class="card-title purple lighten-2 white-text center-align" style="padding: 10px">Register</div>
                <div style="padding: 10px">
                    <form action="{{ url('/register') }}" method="POST" role="form" class="form-validate" novalidate="novalidate">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="first_name" name="first_name" type="text" autofocus value="{{ old('first_name') }}" required>
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" required>
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" name="password" type="password" required>
                                <label for="password">Password</label>
                            </div>

                            <div class="input-field col s6">
                                <i class="material-icons prefix">lock</i>
                                <input id="password_confirmation" name="password_confirmation" type="password" data-rule-equalTo="#password" required>
                                <label for="password_confirmation">Password Confirmation</label>
                            </div>
                        </div>

                        <div>
                            <div>
                                <a class="btn btn-flat" href="{{ url('/login') }}">
                                    Already have an account ?
                                </a>
                                <button class="btn waves-effect waves-light green right" type="submit" name="action">Sign Up
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
