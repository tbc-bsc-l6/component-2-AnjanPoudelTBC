@extends('layouts.masterlayout')

@section ('content')




<div class="flex flex-col sm:justify-center items-center ">


    <div
        class="w-full sm:max-w-md  px-6 py-4 bg-white border-solid border-2 border-sky-500 overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-2 mb-4 text-xl font-semibold">
                User Registration
            </div>
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" placeholder="Enter your name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" placeholder="Enter your Email" class="block mt-1 w-full" type="email"
                    name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" placeholder="Enter password" class="block mt-1 w-full" type="password"
                    name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" placeholder="Confirm your Password" class="block mt-1 w-full"
                    type="password" name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mt-6">


                <button type="submit" class="btn btn-primary btn-full btn-md">
                    Register
                </button>

            </div>
            <div class="mt-2 text-center text-sm">
                Already have an account? <a
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none "
                    href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
</div>

@endsection