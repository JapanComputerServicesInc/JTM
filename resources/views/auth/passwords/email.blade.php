@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row mt">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Reset Password') }}</div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-7">
                                @if ($errors->has('email'))
                                    <div class="has-error">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                        {{-- 赤字がでる--}}
                                        <label class="control-label" for="InputText3"><strong>{{ $errors->first('email') }}</strong></label>
                                    </div>
                                @else
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @endif
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="pull-right">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
