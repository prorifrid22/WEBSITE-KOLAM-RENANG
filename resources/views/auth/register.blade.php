@extends('layouts.guest')

@section('content')
<h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Buat Akun Baru</h2>

@if ($errors->any())
    <div class="mb-4 text-red-600">
        <ul class="list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('register') }}" class="space-y-4 animate-fade-in">
    @csrf

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" />
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" />
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
        <input id="password" type="password" name="password" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" />
    </div>

    <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" />
    </div>

    <div class="flex items-center justify-between">
        <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:underline">Sudah punya akun?</a>
        <button type="submit"
                class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-4 py-2 rounded-lg transition duration-200">
            Daftar
        </button>
    </div>
</form>
@endsection
