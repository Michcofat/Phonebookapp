@extends('layout.master')

@section('content')
<div class="d-flex align-item-center justify-content-between">

<h1> welcome  {{ auth()->user()->name }}  </h1>
<div>

<a href="{{route('phonebook.create')}}" class="btn btn-primary">
 New phonebook

</a>
<a class="btn btn-danger" href="{{route('logout')}}">log out</a>

</div>
</div>
<hr>
<table class="table table-bordered">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
</thead>
<tbody>
    @foreach($phonebook as $phonebook)

    <tr>
        <td>{{$phonebook->id}}</td>
        <td>{{$phonebook->name}}</td>
        <td>{{$phonebook->email}}</td>
        <td>{{$phonebook->phone}}</td>
        <td>
            <div class="d-flex align-items-center">
            <a href="{{ route('phonebook.edit', $phonebook->id)}}">
        <i class="fa fa-edit"></i>
    </a>    
    <form class="d-inline" action="{{ route('phonebook.delete',$phonebook->id)}}" method="POST">
        @method('DELETE')
        @csrf  {{-- CSRF token for form security --}}
        <button class="btn btn-link text-danger">
            <i class="fa fa-trash"></i>
        </button>  
</form>  


</div>
   
    </td>
    </tr>

    @endforeach
</tbody>
</table>
@endsection