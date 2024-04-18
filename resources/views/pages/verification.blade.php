@extends('layouts.custom-master')

@section('styles')
@endsection

@section('custom-body')

    <body class="authentication-page">
    @endsection

    @section('content')
        <main id="content" class="w-full max-w-md mx-auto p-6">
            {{-- <a href="{{ url('index') }}" class="header-logo">
                <img src="{{ asset('build/assets/img/brand-logos/desktop-logo.png') }}" alt="logo"
                    class="mx-auto block dark:hidden">
                <img src="{{ asset('build/assets/img/brand-logos/desktop-dark.png') }}" alt="logo"
                    class="mx-auto hidden dark:block">
            </a> --}}

            <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                @if (session('success'))
                    <div class="box-body">
                        <div class="bg-primary/10 border border-primary alert mb-0" role="alert">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-4 w-4 text-primary mt-1" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </svg>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2">
                                    <h3 class="text-gray-800 dark:text-gray-200 font-semibold">
                                        Success!
                                    </h3>
                                    <div class="mt-2 text-sm text-gray-600 dark:text-white/70">
                                        {{ session('success') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="p-4 sm:p-7">
                    <form method="POST" action="{{ route('email.verify.post') }}">
                        @csrf

                        <div class="text-center">

                            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Two Step Verification</h1>

                            @if (session('email'))
                                <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                                    Please enter the 4 digit code sent to {{ session('email') }}
                                </p>
                                <input type="hidden" name="email" value="{{ session('email') }}">
                            @endif
                        </div>

                        <div class="mt-5">
                            <!-- Form -->
                            <div class="grid gap-y-4">
                                <div class="grid grid-cols-4 gap-4 max-w-[15rem] mx-auto">
                                    <!-- Form Group -->
                                    <input type="text" name="code[]"
                                        class="text-center py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                        required id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                    <!-- End Form Group -->
                                    <!-- Form Group -->
                                    <input type="text" name="code[]"
                                        class="text-center py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                        required id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                    <!-- End Form Group -->
                                    <!-- Form Group -->
                                    <input type="text" name="code[]"
                                        class="text-center py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                        required id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                    <!-- End Form Group -->
                                    <!-- Form Group -->
                                    <input type="text" name="code[]"
                                        class="text-center py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                        required id="four" maxlength="1">
                                    <!-- End Form Group -->
                                </div>
                                <button type="submit"
                                    class="mt-4 w-full py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Confirm</button>

                                <p class="text-center text-xs text-gray-600 dark:text-white/70">
                                    Didn't received any code ?
                                    <a class="text-primary decoration-2 hover:underline font-medium"
                                        href="{{ route('email.verify.resend') }}">
                                        Resend
                                    </a>
                                </p>
                            </div>
                            <!-- End Form -->
                        </div>
                    </form>
                </div>
            </div>
        </main>
    @endsection

    @section('scripts')
        <!-- INTERNAL TWO STEP VERIFICATION JS -->
        <script src="{{ asset('build/assets/two-step-verification.js') }}"></script>
    @endsection
