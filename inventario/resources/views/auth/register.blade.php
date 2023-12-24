@extends('layouts.app')

@section('title', 'Register')

@section('content')
    
        <h1>Registro</h1>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <br>
                <small>*{{ $message }}</small>
                <br>
            @enderror
            <br>
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
            <label for="password_confirmation">Confirmar Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
                <br>
                <small>*{{ $message }}</small>
                <br>
            @enderror
            <br>
            <button type="submit">Registro</button>
        </form>

@endsection