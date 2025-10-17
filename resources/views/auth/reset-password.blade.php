<!-- @extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-12 p-6 bg-white rounded shadow">
    <h1 class="text-xl font-bold mb-4">Réinitialiser le mot de passe</h1>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <label class="block mb-2">Email</label>
        <input type="email" name="email" value="{{ old('email', $email) }}" required class="w-full p-2 border rounded mb-3">
        @error('email') <p class="text-red-600">{{ $message }}</p> @enderror

        <label class="block mb-2">Nouveau mot de passe</label>
        <input type="password" name="password" required class="w-full p-2 border rounded mb-3">
        @error('password') <p class="text-red-600">{{ $message }}</p> @enderror

        <label class="block mb-2">Confirmer le mot de passe</label>
        <input type="password" name="password_confirmation" required class="w-full p-2 border rounded mb-3">

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Réinitialiser</button>
    </form>
</div>
@endsection -->
