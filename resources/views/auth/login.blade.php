<div class="bg-local ..." style="background-image: url(css/images/bg.jpeg)"></div>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="text-lg font-bold text-center pt-2 ">Welcome to Qhub</div>
            <div class="text-sm font-medium text-center pb-6">NSBM Question & Answer Platform</div>
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Username')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center pb-2">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600 ">{{ __('Remember me') }}</span>
                </label>
            </div>
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
            <div class="w-120 rounded-lg sm:max-w-md mt-6 px-8 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <!-- Session Status -->
       <div class = "text-s font-normal text-center pb-2">Your Login instructions as follows</div>
        <div class="text-xs"><ul class="list-disc justify-content ">
            <li >For the username please use your account name of your NSBM student email address.</li>
            <li >Account name is the first portion of your NSBM student email address before the “@” symbol.</li>

<li >For further queries, please drop us an email to NSBM IT Support via <a>its@nsbm.ac.lk.<a/></li></ul></div>

        <!-- Validation Errors -->
       </div>
        </form>
    </x-auth-card>
</x-guest-layout>
