@extends('layouts.masterlayout')

@section ('content')
<div class="flex flex-col sm:justify-center items-center ">


    <div
        class="w-full sm:max-w-md  px-6 py-4 bg-white border-solid border-2 border-sky-500 overflow-hidden sm:rounded-lg">
        <!-- Session Status -->
        {{--
        <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

        <div class="mt-2 mb-4 text-xl font-semibold">
            Reset Your Password
        </div>



        <div class="mb-4 text-sm text-gray-600">
            {{ __('It looks like you requested to reset your password. You may proceed') }}
        </div>
        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email', $request->email)" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
@endsection