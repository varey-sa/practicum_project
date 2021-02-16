@extends('layouts.header-only')

@section('content')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
<section class="section-background">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">
                    <h3>REGISTER</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    placeholder="username" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" placeholder="example@gmail.com" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="********" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirm Password</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="********" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('profile_image') ? ' has-error' : '' }}">
                            <label for="profile_image" class="control-label">Profile image</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="profile_image" type="file" class="form-control" name="profile_image"
                                     required>
                                @if ($errors->has('profile_image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('profile_image') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="or-seperator"><b>or</b></div>
                        <div class="col">
                            <!-- social login -->
                            <div class="row justify-content-center pt-4">
                                <div class="col-10">
                                    <div class="row justify-content-center">
                                        <div class="col-7 col-sm-4 px-1 pb-1"> <a href="#"
                                                class="btn btn-block btn-social btn-twitter"> <span
                                                    class="fa fa-twitter"></span> Twitter </a> </div>
                                        <div class="col-7 col-sm-4 px-1 pb-1"> <a href="#"
                                                class="btn btn-block btn-social btn-facebook"> <span
                                                    class="fa fa-facebook"></span> Facebook </a> </div>
                                        <div class="col-7 col-sm-4 px-1 pb-1"> <a href="#"
                                                class="btn btn-block btn-social btn-google"> <span
                                                    class="fa fa-google-plus"></span> Google+ </a> </div>
                                    </div>
                                </div>
                            </div>

                            <br />
                            <br />
                            <br />
                            <div class="form-group">
                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                    <a style="text-decoration: none" href="{{route('login')}}"> Already have account ?
                                    </a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
