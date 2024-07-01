@extends('layout.master')

@section('content')
<h1>Create New phonebook</h1>
<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <form action="{{route('phonebook.store')}}" method="POST">
        
                  @include('phonebook.phonebook_form')    {{-- this form is included phonebook_form.blade.php --}}
           
            <hr>
            <button class="btn btn-primary">Create Phonebook</button>
            <a href="{{route('phone.book')}}" class="btn btn-secondary">Cancel</a>
       </form>
    </div>
</div>
@endsection