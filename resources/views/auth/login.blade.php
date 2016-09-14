@extends('layouts.app')

@section('content')
<!-- Modal Structure -->



<div class="container">
    <div class="row">
        <div class="col m10 offset-m1 s12">
            <h2 class="center-align" style="color:#212121;"><b>TEST</b></h2>
            <div class="row">
                <form class="col s12" role="form" method="POST" action="{{ url('/login') }}">
                      {{ csrf_field() }}
                    <div class="row">
                      <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="email" type="email" class="validate"  value="{{ old('email') }}" name="email">
                        <label for="email">E-mail Address</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                          <input id="password" type="password" class="validate" name="password">
                          <label for="password">Password</label>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="row center-align">
                        <div class="col s12">
                            <button type="submit" class="waves-effect orange darken-4 btn">
                                <i class="fa fa-btn fa-sign-in"></i> Login
                            </button>

                            <a class="waves-effect orange darken-4 btn" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
