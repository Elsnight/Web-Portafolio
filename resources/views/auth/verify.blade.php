@extends('layouts.app')
<style>
        .card{
            color : black;
            font-size: medium;	
        }
        .card{
            opacity: 80%;
            background: rgb(255,255,255);
            background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(130,195,255,1) 39%, rgba(184,209,242,1) 100%);
        }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center bg-sucess fw-bold text-success col-md-4">
            <img src=" https://lukaszadam.com/gux+cat.svg"
                alt="...">

        </div>
    </div>
</div>
@endsection
