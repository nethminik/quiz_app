<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
   <title>@section('title', 'Login Page')</title>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <p class="ml-44 text-2xl text-gray-800 dark:text-gray-400"> Login </p>

        <!-- User Role -->
        <div>
            <x-input-label for="user_role" :value="__('User Role')" />
            <select name="user_role" id="user_role" class="rounded-md border-gray-200 mb-4 mt-2 w-full block font-medium text-sm text-gray-500 dark:text-gray-300">
                <option value=""> Select User Role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <x-input-error :messages="$errors->get('user_role')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-around mt-4">
            <!-- Sign Up -->
            <div class="ml-0 text-gray-500">
                <label for="remember_me" class="inline-flex items-center">

                </label>
                <a  onclick="window.location.href='{{route('register')}}'" class="mr-6 ml-0 underline ms-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-500 cursor-pointer">{{ __('Create New Account') }}</a>
            </div>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <x-primary-button class="block ms-3 mt-3 w-full justify-center">
            {{ __('Log in') }}
        </x-primary-button>
    </form>
</x-guest-layout>
