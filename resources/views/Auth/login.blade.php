@extends('layout.master')
@section('content')
<h1>login</h1>
<div class='row'>
    <div class='col-sn-6 offset-sn-3'>
        <form action='{{route('authenticate')}}' method='POST'>
            
            @csrf      {{-- CSRF token for form security --}}
            
            <div class='form-group'>
                <label for='email' class='form-label'>Email</label> 
                <input type='text' name='email' id='email' class='form-control'>
             </div>
             <div class='form-group'>
                <label for='password' class='form-label'>password</label> 
                <input type='password' name='password' id='password' class='form-control'>
             </div>

             <hr>
             <button class='btn btn-primary_language'>Login</buttom>
         </form>
         
</div>
</div>
@endsection