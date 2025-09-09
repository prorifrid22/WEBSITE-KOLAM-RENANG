@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-xl rounded-xl p-8 animate-fade-in">
    <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium" for="email">Email</label>
            <input id="email" type="email" name="email" required autofocus
                   class="mt-1 w-full border border-blue-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <div>
            <label class="block text-sm font-medium" for="password">Password</label>
            <input id="password" type="password" name="password" required
                   class="mt-1 w-full border border-blue-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center">
                <input type="checkbox" name="remember" class="rounded border-blue-300 text-blue-600 shadow-sm focus:ring-blue-500">
                <span class="ml-2 text-sm">Remember me</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif
        </div>

        <div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                Log in
            </button>
        </div>
    </form>
</div>
@endsection