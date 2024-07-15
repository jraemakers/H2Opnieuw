@extends('layouts.app')

@section('head')
    <title>H2Opnieuw | Login</title>
    <meta name="title" content="H2Opnieuw | Login">
    <meta name="description" content="Log in to get access to your dashboard and see all you details of your water saving system of H2Opnieuw. And find out how much water you saved today." />
    <meta property="og:title" content="H2Opnieuw | Login" />
    <meta property="og:description" content="Log in to get access to your dashboard and see all you details of your water saving system of H2Opnieuw. And find out how much water you saved today." />
@endsection

@section('main')
    <div
        class="max-w-5xl bg-white rounded-lg shadow-lg mx-auto mt-16 lg:ml-auto ml-2 sm:ml-4 lg:mr-auto mr-2 sm:mr-4 border overflow-hidden mb-2">
        <h1 class="p-2 border-b pl-8 bg-gray-100 rounded-tlr-lg">Login</h1>
        <div class="p-4">
            <form method="POST" action="{{ route('login') }}" class="w-fit mx-auto">
                @csrf
                <div class="grid grid-flow-row mt-3 text-center">
                    <div class="mb-6">
                        <label for="email" class="h3">E-mail address:</label><br>
                        <input id="email" type="email"
                            class="col-span-3 border rounded shadow focus:outline-none focus:border-blue-300 focus:border-2 focus:shadow-blue-300 w-72 sm:w-96 h-8 px-2 transition @error('email') border-red-500 border-2 @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="text-red-500" role="alert">
                                <h4>{{ $message }}</h4>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="h3">Password:</label><br>
                        <input id="password" type="password"
                            class="col-span-3 border rounded shadow focus:outline-none focus:border-blue-300 focus:border-2 focus:shadow-blue-300 w-72 sm:w-96 h-8 px-2 transition @error('password') border-red-500 border-2 @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="text-red-500" role="alert">
                                <h4>{{ $message }}</h4>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="h5" for="remember">
                            Remember me
                        </label>
                    </div>

                    <div class="mb-3">
                        <button type="submit"
                            class="button px-4 py-2 border rounded shadow h3 hover:outline hover:outline-blue-300">
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
