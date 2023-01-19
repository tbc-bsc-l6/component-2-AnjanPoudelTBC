@extends('layouts.masterlayout')

@section ('content')
<div class="flex flex-col sm:justify-center items-center ">


    <div
        class="w-full sm:max-w-md  px-6 py-4 bg-white border-solid border-2 border-sky-500 overflow-hidden sm:rounded-lg">
        <!-- Session Status -->
        {{--
        <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

        <div class="mt-2 mb-4 text-xl font-semibold">
            Forgot Password
        </div>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Enter your Email to get the reset link.') }}
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" placeholder="Your Email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-6 mb-2">
                <x-primary-button class="w-full text-center">
                    {{ __('Get Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
@endsection