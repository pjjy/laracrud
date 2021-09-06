@extends('layouts.master')

@section('content')
<div class="container">
    <form action="/crud/{{ $user->id }}/update" method="post">
        @method('put')
        @csrf
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="email" name="email" value="{{ $user->email }}">
        <button type="submit">Update</button>
    </form>
</div>
<!-- <script src="s"></script> -->
@endsection