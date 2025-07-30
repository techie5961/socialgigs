@extends('layout.users.auth')
@section('title')
    Login
@endsection
@section('main')
    <section class="column border-4 border-color-white br-50 column align-center backdrop-blur-10 w-full max-w-500 p-10 bg-whitesmoke">
        <img src="{{ asset('logo.png') }}" width="70" alt="" class="logo">
        <strong class="desc c-primary">Sign In</strong>
        <form action="" class="w-full p-10 g-10  column g-5">
           <input type="text" placeholder="E-mail address or Username" class="br-10 no-border p-10 h-50 box-shadow-primary">
           <input type="password" placeholder="Password" class="br-10 no-border p-10 h-50 box-shadow-primary">
           <a href="" class="c-primary text-average no-u">Forgot Password?</a>
           <button class="btn-primary-3d w-full h-50">Sign In</button>
           <span class="text-dim text-average x-auto">Not Yet Signed Up?</span>
           <a href="{{ url('register') }}" class="no-u bold c-primary x-auto">Register</a>
        </form>
    </section>
@endsection