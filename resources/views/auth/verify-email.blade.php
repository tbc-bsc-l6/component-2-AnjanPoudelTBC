@extends('layouts.masterlayout')
@section('header')
Groceries | Verify Email
@endsection
@section ('content')
<div class="flex flex-col sm:justify-center items-center ">


    <div
        class="w-full sm:max-w-md  px-6 py-4 bg-white border-solid border-2 border-sky-500 overflow-hidden sm:rounded-lg">
        <!-- Session Status -->
        {{--
        <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

        <div class="mt-2 mb-4 text-xl font-semibold">
            Verify Your Account
        </div>

        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
        @endif

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Verify your account to get access. If link wasnt sent to your address please click the resend
            button') }}
        </div>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class=" mt-4 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</div>
@endsection