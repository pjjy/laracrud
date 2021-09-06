@extends('layouts.master')

@section('content')
<div class="container">
    @foreach($users as $user)
    {{ $user->name }}
    <form action="/crud/{{ $user->id }}" method="post">
        @method('delete')
        @csrf
        <button type="submit">Delete</button>
    </form>
    <br>
    <a href="/crud/{{$user->id}}">Edit</a>
    <br />
    <a href="/x/create-user">Add new User</a>
    @endforeach
</div>
<!-- <script src="s"></script> -->
@endsection