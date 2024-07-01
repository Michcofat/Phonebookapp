@extends('layout.master')
@section('content')

<h1>Welcome To Phone Book App.</h1>
    <p>
         Thank you for visiting our website. We are delighted to have you here.
        Explore our content, enjoy our services, and feel free to reach out with any questions or feedback.
        Your satisfaction is our priority.
    </p>
<a href="{{route('login')}}" class="btn btn-primary">Login</a>
<a href="{{route('register')}}" class="btn btn-primary">Register</a>
@endsection