<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.app') <!-- Use your main layout -->

@section('content')
    <h1>Admin Dashboard</h1>
    <div>
        <a href="{{ route('admin.players.create') }}">Create New Player</a>
    </div>
    <div>
        <a href="{{ route('admin.players.list') }}">Manage Players</a> <!-- Adjust the route as per your setup -->
    </div>
@endsection
