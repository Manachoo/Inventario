@include('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <h1>Dashboard</h1>
    <p>Bienvenido {{ auth()->user()->name }}</p>

@endsection
