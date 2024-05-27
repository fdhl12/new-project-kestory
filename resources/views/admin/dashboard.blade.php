@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
            <p>Welcome to the admin dashboard, {{ Auth::user()->name }}!</p>
        </div>
    </div>
@endsection