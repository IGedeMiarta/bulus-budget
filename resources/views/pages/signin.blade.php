@extends('layouts.custom-master')

@section('styles')
@endsection

@section('custom-body')

    <body class="authentication-page">
    @endsection

    @section('content')
        <main id="content" class="w-full max-w-md mx-auto p-6">
            {{-- <a href="{{url('index')}}" class="header-logo">
                    <img src="{{asset('build/assets/img/brand-logos/desktop-logo.png')}}" alt="logo" class="mx-auto block dark:hidden">
                    <img src="{{asset('build/assets/img/brand-logos/desktop-dark.png')}}" alt="logo" class="mx-auto hidden dark:block">
                </a> --}}
            <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                        <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                            Don't have an account yet?
                            <a class="text-primary decoration-2 hover:underline font-medium"
                                href="{{ route('signup.index') }}">
                                Sign up here
                            </a>
                        </p>
                    </div>

                    <div class="mt-5">
                        {{-- <button type="button"
                            class="w-full py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                            <img src="{{ asset('build/assets/img/authentication/social/1.png') }}" class="w-4 h-4"
                                alt="google-img">Sign in with Google
                        </button> --}}
                        @if (session('error'))
                            <div class="bg-yellow-50 border border-yellow-200 alert mb-0" role="alert">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-4 w-4 text-yellow-400 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </div>
                                    <div class="ltr:ml-2 rtl:mr-2">
                                        <h3 class="text-sm text-yellow-800 font-semibold">
                                            Error!
                                        </h3>
                                        <div class="mt-1 text-sm text-yellow-700">
                                            {{ session('error') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div
                            class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 ltr:before:mr-6 rtl:before:ml-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 ltr:after:ml-6 rtl:after:mr-6 dark:text-white/70 dark:before:border-white/10 dark:after:border-white/10">
                            Or</div>

                        <!-- Form -->
                        <div>
                            <form action="{{ route('signin.post') }}" method="POST">
                                @csrf
                                <div class="grid gap-y-4">
                                    <!-- Form Group -->
                                    <div>
                                        <label class="block text-sm mb-2 dark:text-white">Email address</label>
                                        <div class="relative">
                                            <input type="email" name="email"
                                                class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                value="{{ old('email') }}" required>
                                            @error('email')
                                                <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label for="password"
                                                class="block text-sm mb-2 dark:text-white">Password</label>
                                            <a class="text-sm text-primary decoration-2 hover:underline font-medium"
                                                href="{{ url('forgot') }}">Forgot password?</a>
                                        </div>
                                        <div class="relative">
                                            <input type="password" id="password" name="password"
                                                class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                required>
                                            @error('password')
                                                <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Checkbox -->
                                    <div class="flex items-center">
                                        <div class="flex">
                                            <input id="remember-me" name="remember-me" type="checkbox"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-primary pointer-events-none focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-white/10">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                                        </div>
                                    </div>
                                    <!-- End Checkbox -->

                                    <button type="submit"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Sign
                                        in</button>
                                </div>
                            </form>
                        </div>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </main>
    @endsection

    @section('scripts')
    @endsection
