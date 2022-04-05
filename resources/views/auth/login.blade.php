@extends('layouts.app')

@section('content')
<div id="lp-register">
    <div class="container wrapper">
    <div class="row">
        <div class="col-sm-5">
        <div class="intro-texts">
            <h1 class="text-white">Make Cool Friends !!!</h1>
            <p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Buy it now.</p>
          <button class="btn btn-primary">Learn More</button>
        </div>
      </div>
        <div class="col-sm-6 col-sm-offset-1">
        <div class="reg-form-container"> 
        
          <!-- Register/Login Tabs-->
          <div class="reg-options">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
              <li><a href="#login" data-toggle="tab">Login</a></li>
            </ul><!--Tabs End-->
          </div>
          
          <!--login Form Contents-->
          <div class="tab-content">
              
            <div class="tab-pane active" id="register">
                <h3>Login</h3>
                <p class="text-muted">Log into your account</p>
              
              <!--login Form-->
              <form  method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                 <div class="form-group col-xs-12">
                   <label for="my-email" class="sr-only">Email</label>
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   {{-- <input id="my-email" class="form-control input-group-lg" type="text" name="Email" title="Enter Email" placeholder="Your Email"/> --}}
                   @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-xs-12">
                   <label for="my-password" class="sr-only">Password</label>
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                   {{-- <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/> --}}

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                 </div>
               </div>
               <div class="row">
                   <div class="form-group col-xs-12">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                   </div>
               </div>
               <button class="btn btn-primary">Login Now</button>
               @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
             </form><!--Login Form Ends-->  
            </div><!--Registration Form Contents Ends-->
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6">
      
        <!--Social Icons-->
        <ul class="list-inline social-icons">
          <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
          <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
          <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
@endsection
