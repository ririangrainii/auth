@extends('layouts.app')

@section('content')
{{-- <div class="container">
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
</div> --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            {{-- <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body"> --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Log in </title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ asset ('plugins/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet" href="{{asset ('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset ('dist/css/adminlte.min.css?v=3.2.0') }}">
<script nonce="d5415f8c-e79b-4002-9dba-61c28b55232f">try { (function(w,d){!function(o,p,q,r){o[q]=o[q]||{};o[q].executed=[];o.zaraz={deferred:[],listeners:[]};o.zaraz.q=[];o.zaraz._f=function(s){return async function(){var t=Array.prototype.slice.call(arguments);o.zaraz.q.push({m:s,a:t})}};for(const u of["track","set","debug"])o.zaraz[u]=o.zaraz._f(u);o.zaraz.init=()=>{var v=p.getElementsByTagName(r)[0],w=p.createElement(r),x=p.getElementsByTagName("title")[0];x&&(o[q].t=p.getElementsByTagName("title")[0].text);o[q].x=Math.random();o[q].w=o.screen.width;o[q].h=o.screen.height;o[q].j=o.innerHeight;o[q].e=o.innerWidth;o[q].l=o.location.href;o[q].r=p.referrer;o[q].k=o.screen.colorDepth;o[q].n=p.characterSet;o[q].o=(new Date).getTimezoneOffset();if(o.dataLayer)for(const B of Object.entries(Object.entries(dataLayer).reduce(((C,D)=>({...C[1],...D[1]})),{})))zaraz.set(B[0],B[1],{scope:"page"});o[q].q=[];for(;o.zaraz.q.length;){const E=o.zaraz.q.shift();o[q].q.push(E)}w.defer=!0;for(const F of[localStorage,sessionStorage])Object.keys(F||{}).filter((H=>H.startsWith("_zaraz_"))).forEach((G=>{try{o[q]["z_"+G.slice(7)]=JSON.parse(F.getItem(G))}catch{o[q]["z_"+G.slice(7)]=F.getItem(G)}}));w.referrerPolicy="origin";w.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(o[q])));v.parentNode.insertBefore(w,v)};["complete","interactive"].includes(p.readyState)?zaraz.init():o.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document) } catch (err) {
      console.error('Failed to run Cloudflare Zaraz: ', err)
      fetch('/cdn-cgi/zaraz/t', {
        credentials: 'include',
        keepalive: true,
        method: 'GET',
      })
    };</script></head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="../../index2.html"><b>Admin</b>LTE</a>
</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Sign in to start your session</p>
<form action="{{ route('login') }}" method="post">
    @csrf
<div class="input-group mb-3">
<input type="email" name="email" id="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" name="password" id="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="remember">
<label for="remember">
Remember Me
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>

</div>
</form>
<div class="social-auth-links text-center mb-3">
<p>- OR -</p>
<a href="#" class="btn btn-block btn-primary">
<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
</a>
<a href="#" class="btn btn-block btn-danger">
<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
</a>
</div>

<p class="mb-1">
<a href="forgot-password.html">I forgot my password</a>
</p>
<p class="mb-0">
<a href="register.html" class="text-center">Register a new membership</a>
</p>
</div>

</div>
</div>


<script src="{{asset ('plugins/jquery/jquery.min.js') }}"></script>

<script src="{{asset ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{asset ('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>
</html>

@endsection
