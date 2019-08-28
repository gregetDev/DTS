@extends('layouts.app')

@section('title', 'Reset Password')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/speakers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/speakers_responsive.css')}}">
@endsection

@section('home_background')
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/baru/peserta.jpg')}}"data-speed="0.8"></div>
@endsection

@section('home')
    <div class="row">
        <div class="col">
            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                <div class="current_page">Profile</div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
<section id="team" class="pb-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

@section('js')
    <script src="{{asset('/js/speakers.js')}}"></script>    
@endsection
