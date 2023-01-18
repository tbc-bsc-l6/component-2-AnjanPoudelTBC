@extends('layouts.masterlayout')

@section( 'content')

<div class="container ">
    <div class="auth-dashboard">
        @include('components.auth-nav',['activePanel'=>'my-profile'])
        <div class="auth-page-content">
            <div class="user-profile-page">
                <div class="user-profile">
                    <form method="POST" action="/profile" class="form-blank user-profile-form">
                        @csrf
                        @method('PATCH')
                        <div class=" mb-4 text-xl font-semibold">
                            User Profile
                        </div>

                        <div class="user-profile-update">
                            <div class="user-update-item">
                                <div>
                                    <x-input-label for="name" :value="__('Full Name')" />
                                    <x-text-input placeholder="Enter your full name" id="full_name" type="text"
                                        name='name' value="{{$user->name}}" required />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="email" :value="__('Email Address')" />
                                    <x-text-input placeholder="Enter your email address" id="email" type="email"
                                        name='email' value="{{$user->email}}" :disabled=true />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
                            <div class="user-update-item">
                                <div>
                                    <x-input-label for="phone_number" :value="__('Phone Number')" />
                                    <x-text-input placeholder="Enter your phone number" id="phone_number" type="text"
                                        name='phone_number' value="{{$user->phone_number}}" />
                                    <x-input-error :messages=" $errors->get('phone_number')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for=" product_name" :value="__('Gender')" />
                                    <select name="gender" id="gender"
                                        class=" my-form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full {{count($errors->get('gender'))>0? 'error-input' :''}}">
                                        <option value="">---- Your Gender ----</option>

                                        <option value="male" {{ $user->gender=="male" ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="female" {{ $user->gender=="female" ? 'selected' : '' }}>Female
                                        </option>
                                        <option value="other" {{ $user->gender=="other" ? 'selected' : '' }}>Others
                                        </option>
                                    </select>
                                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                </div>
                            </div>

                        </div>

                        <button class="btn btn-primary" type="submit">
                            Update
                        </button>


                    </form>
                </div>

                <div class="reset-password mt-4 ">
                    <div class=" mb-4 text-xl font-semibold">
                        Reset Your Password
                    </div>
                    <form method="POST" action="{{route('password.update')}}" class="form-blank password-reset-form">
                        @csrf
                        @method('PUT')
                        <div class="mt-3">
                            <x-input-label for="current_password" :value="__('Current Password')" />
                            <x-text-input placeholder="Enter your current password" id="current_password"
                                type="password" name='current_password' required />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>
                        <div class="mt-3">
                            <x-input-label for="password" :value="__('New Password')" />
                            <x-text-input placeholder="Enter the new password" id="password" type="password"
                                name='password' value="{{old('password')}}" required />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        <div class="mt-3">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input placeholder="Confirm your password" id="password_confirmation" type="password"
                                name='password_confirmation' value="{{old('password_confirmation')}}" required />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                                class="mt-2" />
                        </div>


                        <button type="submit" class="btn btn-danger mt-4">
                            Reset Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection