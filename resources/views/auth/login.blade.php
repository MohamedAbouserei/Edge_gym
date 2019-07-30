
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('bs-siminta-admin') }}/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="{{ asset('bs-siminta-admin') }}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ asset('bs-siminta-admin') }}/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="{{ asset('bs-siminta-admin') }}/assets/css/style.css" rel="stylesheet" />
      <link href="{{ asset('bs-siminta-admin') }}/assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back"   >


        <div class="row">

            <div class="col-md-4 col-md-offset-4" >
                <div class="login-panel panel panel-default"  >
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="card-body"  >
                            <form method="POST" action="{{ route('login') }}" >
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-8 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-8 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>


     <!-- Core Scripts - Include with every page -->
    <script src="{{ asset('bs-siminta-admin') }}/assets/plugins/jquery-1.10.2.js"></script>
    <script src="{{ asset('bs-siminta-admin') }}/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('bs-siminta-admin') }}/assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
