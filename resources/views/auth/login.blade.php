@extends('layouts.masterlayout')

@section ('content')
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mt-2 mb-4 text-xl font-semibold">
        User Login
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input placeholder="Enter your email" id="email" class="block mt-1 w-full" type="email" name="email"
                :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                placeholder="Enter your password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <button type="submit" class="btn btn-primary btn-full btn-md">
                Log In
            </button>
        </div>

        <div class="flex items-center justify-between mt-4">

            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none "
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

        </div>

        <div class="mt-2 text-center text-sm">
            Haven't registered yet? <a
                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none"
                href="{{route('register')}}">Register</a>
        </div>
    </form>
</x-guest-layout>
@endsection