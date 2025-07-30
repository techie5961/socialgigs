@extends('layout.users.auth')
@section('title')
    Login
@endsection

@section('main')
    <section class="column border-4 border-color-white br-50 column align-center backdrop-blur-10 w-full max-w-500 p-10 bg-whitesmoke">
        <img src="{{ asset('logo.png') }}" width="70" alt="" class="logo">
        <strong class="desc c-primary">Get Started</strong>
        <form action="ff" onsubmit="PostRequest(event,this)" class="w-full p-10 g-10  column g-5">
           <input type="email" placeholder="E-mail address" class="br-10 inp required input no-border p-10 h-50 box-shadow-primary">
           <input type="text" placeholder="Username" class="br-10 no-border inp required p-10 h-50 box-shadow-primary">
           <input type="text" placeholder="Full Name" class="br-10 no-border inp required p-10 h-50 box-shadow-primary">
            <select name="" class="br-10 no-border p-10 h-50 box-shadow-primary input inp required bg-white" id="">
                <option value="">Select Account Type....</option>
                <option value="advertiser">Advertiser</option>
                <option value="earner">Earner</option>
            </select>
           <input type="password" placeholder="Password" class="br-10 no-border p-10 h-50 box-shadow-primary">
           <input type="password" placeholder="Re-Type Password" class="br-10 no-border p-10 h-50 box-shadow-primary">
           
           <button class="btn-primary-3d w-full h-50">Sign Up</button>
           <span class="text-dim text-average x-auto">Have an Account?</span>
           <a href="{{  url('login') }}" class="no-u bold c-primary x-auto">Login</a>
        </form>
    </section>
@endsection