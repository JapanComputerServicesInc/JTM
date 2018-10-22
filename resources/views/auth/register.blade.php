@extends('layouts.app')

@section('content')
<div class="container">
<div class="row mt">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-center">{{ __('Name') }}</label>

                        <div class="col-md-7">
                        @if ($errors->has('name'))
                            <div class="has-error">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                {{-- 赤字がでる--}}
                                <label class="control-label" for="InputText3"><strong>{{ $errors->first('name') }}</strong></label>
                            </div>
                        @else
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-center">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-7">
                            @if ($errors->has('email'))
                                <div class="has-error">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    <label class="control-label" for="InputText3"><strong>{{ $errors->first('email') }}</strong></label>
                                </div>
                            @else
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-center">{{ __('Password') }}</label>

                        <div class="col-md-7">
                            @if ($errors->has('password'))
                                <div class="has-error">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <label class="control-label" for="InputText3"><strong>{{ $errors->first('password') }}</strong></label>
                                </div>
                            @else
                                <input id="password" type="password" class="form-control" name="password" required>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-center">{{ __('Confirm Password') }}</label>

                        <div class="col-md-7">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-theme02">
                            {{ __('Register') }}
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
