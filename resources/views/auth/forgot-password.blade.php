@extends('layouts.guest')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-yellow-300 via-white to-blue-400 py-10 px-4">
    <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8 animate-fade-in">
        <h2 class="text-2xl font-bold text-blue-800 text-center mb-6">Lupa Password?</h2>
        <p class="text-sm text-gray-600 text-center mb-6">Masukkan emailmu dan kami akan mengirimkan link untuk reset password.</p>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-400 focus:ring-yellow-300" type="email" name="email" value="{{ old('email') }}" required autofocus />
                @error('email')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-md text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition duration-200 ease-in-out">
                    Kirim Link Reset
                </button>
            </div>

            <div class="text-center">
                <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:underline hover:text-blue-800 transition">Kembali ke login</a>
            </div>
        </form>
    </div>
</div>
@endsection
