

@extends('layout.master')

@section('content')
<h1>Register</h1>
<div class='row'>
    <div class='col-sm-6 offset-sm-3'>
    @if($errors->any())
        <div class='alert alert-danger'>
            <ul>
        @foreach($errors->all() as $error)
         <li>{{$error}}</li>
        @endforeach
</ul> 
</div>
@endif
@if (session('success'))
            <div class='alert alert-success'>
                {{ session('success') }}
            </div>
        @endif
        <form action='{{route('create_user')}}' method='POST'>
            @csrf     {{-- CSRF token for form security --}}

            {{-- this is form to register from the welcome page --}}

            <div class='form-group'>
                <label for='name' class='form-label'>Name</label> 
                <input 
                type='text' Name='name' 
                id='name' 
                class='form-control'
                value='{{ old ('Name')}}'
                >

             </div>
             <div class='form-group'>
                <label for='email' class='form-label'>Email</label> 
                <input 
                type='text' name='email' 
                id='email' 
                class='form-control'
                value='{{ old ('email')}}'
                >
             </div>
             <div class='form-group'>
                <label for='password' class='form-label'>Password</label> 
                <input type='password' name='password' 
                id='password' 
                class='form-control'
                >
             </div>

             <div class='form-group'>
                <label for='password_confirmation' class='form-label'>Confirm Password</label> 
                <input type='password' name='password_confirmation' id='password_confirmation' class='form-control'>
             </div>
             <hr>
             <button class='btn btn-primary'>Register</button>
         </form>
</div>
</div>
@endsection