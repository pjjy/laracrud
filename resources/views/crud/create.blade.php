@extends('layouts.master')

@section('content')
<div class="container">
    <form action="/crud" method="post">
        @csrf
        <input type="text" name="name">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="email" name="email">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" name="password">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">Add New User</button>
    </form>
</div>
@endsection