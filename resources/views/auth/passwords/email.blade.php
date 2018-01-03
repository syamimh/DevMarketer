@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="container" style="padding-top: 70px;">
        <div class="columns">
            <div class="column is-one-third is-offset-one-third">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">Forgot Password</h1>

                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <label for="email" class="label">Email:</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text"
                                           name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                                </p>
                                @if($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="control">
                                <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="control">
                    <h5 class="has-text-centered m-t-20">
                        <a href="{{ route('login') }}" class="is-muted">Back to login</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endsection
