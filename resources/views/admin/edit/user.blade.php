@extends('layouts.app')

@section('content')
<div class="container pt-16 mx-auto px-4">
    <div class="flex">
        <x-nav-link href="/admin" class="hover:underline text-black">
            <h3 class="text-xl font-bold mb-4">Dashboard</h3>
        </x-nav-link>
        <span class="text-gray-600 text-2xl mx-2">&gt;</span>
        <x-nav-link href="/admin/users" class="hover:underline text-black">
            <h3 class="text-xl font-bold mb-4">Manage Users</h3>
        </x-nav-link>
        <span class="text-gray-600 text-2xl mx-2">&gt;</span>
        <x-nav-link href="{{ route('admin.users.edit', $user->username) }}" class="hover:underline text-black">
            <h3 class="text-xl font-bold mb-4">Edit User</h3>
        </x-nav-link>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('admin.users.update', $user->username) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Username') }}</label>
                <div class="mt-2">
                    <input id="username" name="username" type="username" autocomplete="username" value="{{ old('username', $user->username) }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">{{ __('FullName') }}</label>
                <div class="mt-2">
                    <input id="name" name="name" type="name" autocomplete="name" value="{{ old('name', $user->name) }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Email') }}</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" value="{{ old('name', $user->email) }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Password') }}</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <label for="password-confirm" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Confirm Password') }}</label>
                </div>
                <div class="mt-2">
                    <input id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update User</button>
    </form>
</div>
@endsection
