@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 70px;">
        <div class="columns">
            <div class="column is-one-third is-offset-one-third">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">Join the community</h1>

                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <label for="name" class="label">Name:</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text"
                                           name="text" id="name" placeholder="Jeff" value="{{ old('name') }}" required>
                                </p>
                                @if($errors->has('email'))
                                    <strong class="help is-danger">{{ $errors->first('email') }}</strong>
                                @endif
                            </div>

                            <div class="field">
                                <label for="email" class="label">Email:</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text"
                                           name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                                </p>
                                @if($errors->has('email'))
                                    <strong class="help is-danger">{{ $errors->first('email') }}</strong>
                                @endif
                            </div>

                            <div class="field">
                                <label for="password" class="label">Password:</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}"
                                           type="password" name="password" id="password" required>
                                </p>
                                @if($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>

                            <div class="field">
                                <label for="password_confirm" class="label">Password Confirmation:</label>
                                <p class="control">
                                    <input class="input" type="password" name="password_confirm" id="password_confirm" required>
                                </p>
                            </div>

                            <div class="control">
                                <button class="button is-primary is-outlined is-fullwidth m-t-30">Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="control">
                    <h5 class="has-text-centered m-t-20">
                        <a href="{{ route('login') }}" class="is-muted">Already have an account?</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endsection
