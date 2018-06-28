@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            {{--
            <div class="card"> --}} {{--
                <div class="card-header">{{ __('Login') }}</div> --}}
                {{-- nownow logo --}}
                {{-- <img src="../img/ui-sam.png" alt=""> --}}
                <div class="card-body">
                    <h1 class="text-center">Management Screen</h1>

                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        {{csrf_field()}}
                        <div class="messages"></div>
                        <div class="form-group row">
                            {{--
                            <div class="input-group"> --}} {{-- <label for="identity" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>                                --}}

                                <div class="col-lg-5 col-lg-offset-5 col-centered">
                                    <input id="identity" type="identity" class="form-control{{ $errors->has('identity') ? ' is-invalid' : '' }}" name="identity"
                                        value="{{ old('identity') }}" required autofocus placeholder="Username">
                                    {{-- @if ($errors->has('identity'))
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('identity') }}</strong>
                                    </div>
                                    @endif --}}
                                </div>
                                {{-- </div> --}}
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>                            --}}

                            <div class="col-lg-5 col-lg-offset-5 col-centered">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required placeholder="Password"> {{-- @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif --}} 
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-centered-button col-lg-5 col-lg-offset-5">
                                <button type="submit" class="btn btn-success btn-md btn-block btn-circle">
                                    {{ __('LOGIN') }}
                                </button> {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> --}}
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-lg-6 offset-lg-3 position-relative">

                                <label class="pull-left">
                                    <input type="checkbox" name="remember" {{old('remember') ? 'checked' : ''}}>
                                    <span class="label-text position-absolute">{{__('Remember Me')}}</span>
                                </label> {{--
                                <div class="checkbox">
                                    <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}>
                                    <label>
                                            {{ __('Remember Me') }}
                                    </label>
                                </div> --}}
                            </div>
                        </div>
                    </form>
                </div>
                {{-- </div> --}}
        </div>
    </div>
</div>
@endsection