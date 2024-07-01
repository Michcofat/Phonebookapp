@extends('layout.master')

@section('content')
<h1>Edit phonebook</h1>
<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <form action="{{route('phonebook.update',$phonebook->id)}}" method="POST">
           @csrf      {{-- CSRF token for form security --}}
          @method('PUT')
           @include('phonebook.phonebook_form')      {{-- this form is included phonebook_form.blade.php --}}
          <hr>
            <button class="btn btn-primary">Update Phonebook</button>
            <a href="{{route('phone.book')}}" class="btn btn-secondary">Cancel</a>


        </form>
    </div>
</div>
@endsection