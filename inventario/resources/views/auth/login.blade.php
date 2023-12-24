@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <h1>Login</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        @error('password')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Login</button>
    </form>

@endsection