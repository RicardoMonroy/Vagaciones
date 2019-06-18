<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <!DOCTYPE html>
   <html lang="es">

   <head>
       <title>Vagaciones Login </title>
       <!-- Meta tags -->
       <meta name="viewport" content="width=device-width, initial-scale=1" />
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <meta name="keywords" content="Allied Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
       />
       <script>
           addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
       </script>
       <!-- Meta tags -->
       <!-- font-awesome icons -->
       <link href="{{ asset('access/css/font-awesome.min.css') }}" rel="stylesheet">
       <!-- //font-awesome icons -->
       <!--stylesheets-->
       <link href="{{ asset('access/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
       <!--//style sheet end here-->
       <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
       <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>

   <body>
       <h1 class="error">Vagaciones</h1>
       <div class="w3layouts-two-grids">
           <div class="mid-class">
               <div class="txt-left-side">
                   <h2> Login </h2>
                   {{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget</p> --}}
                   <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <div class="form-left-to-w3l">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <input id="email" type="email" name="email" placeholder="Email" required="">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="clear"></div>
                        </div>

                        {{-- <div class="col-md-6"> --}}
                            {{-- <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}


                        {{-- </div> --}}
                    </div>

                    <div class="form-group row">
                        <div class="form-left-to-w3l ">

                            <span class="fa fa-lock" aria-hidden="true"></span>
                            <input id="password" type="password" name="password" placeholder="Password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="clear"></div>
                        </div>

                        {{-- <div class="col-md-6">
                            <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                        </div> --}}
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
                                    {{ __('Olvidaste Tu Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
                   {{-- <form action="#" method="post">
                       <div class="form-left-to-w3l">
                           <span class="fa fa-envelope-o" aria-hidden="true"></span>
                           <input type="email" name="email" placeholder="Email" required="">

                           <div class="clear"></div>
                       </div>
                       <div class="form-left-to-w3l ">

                           <span class="fa fa-lock" aria-hidden="true"></span>
                           <input type="password" name="password" placeholder="Password" required="">
                           <div class="clear"></div>
                       </div>
                       <div class="main-two-w3ls">
                           <div class="left-side-forget">
                               <input type="checkbox" class="checked">
                               <span class="remenber-me">Remember me </span>
                           </div>
                           <div class="right-side-forget">
                               <a href="#" class="for">Forgot password...?</a>
                           </div>
                       </div>
                       <div class="btnn">
                           <button type="submit">Login </button>
                       </div>
                   </form> --}}
                   {{-- <div class="w3layouts_more-buttn">
                       <h3>No tienes cuenta?
                           <a href="#">Register Here
                           </a>
                       </h3>
                   </div> --}}

               </div>
               <div class="img-right-side">
                   <h3>Bienvenido al sitio de Vagaciones</h3>
                   {{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget</p>
                   <img src="images/b11.png" class="img-fluid" alt=""> --}}
               </div>
           </div>
       </div>
       {{-- <footer class="copyrigh-wthree">
           <p>
               © 2019 Allied Login Form. All Rights Reserved | Design by
               <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
           </p>
       </footer> --}}
   </body>

   </html>




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
</div>
@endsection --}}
