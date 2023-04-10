<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">

</head>
<style>
    body {
        background: #136a8a;
        font-family: Assistant, sans-serif;
        display: flex;
        min-height: 90vh;
        
    }

    .login {
        color: white;
        background: #136a8a;
        background:
            -webkit-linear-gradient(to right, #267871, #136a8a);
        background:
            linear-gradient(to right, #267871, #136a8a);
        margin: auto;
        box-shadow:
            0px 2px 10px rgba(0, 0, 0, 0.2),
            0px 10px 20px rgba(0, 0, 0, 0.3),
            0px 30px 60px 1px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        padding: 50px;
    }

    .login .head {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login .head .company {
        font-size: 2.2em;
    }

    .login .msg {
        text-align: center;
    }

    .login .form input[type=text].text {
        border: none;
        background: none;
        box-shadow: 0px 2px 0px 0px white;
        width: 100%;
        color: white;
        font-size: 1em;
        outline: none;
    }

    .login .form .text::placeholder {
        color: #D3D3D3;
    }

    .login .form input[type=password].password {
        border: none;
        background: none;
        box-shadow: 0px 2px 0px 0px white;
        width: 100%;
        color: white;
        font-size: 1em;
        outline: none;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .login .form .password::placeholder {
        color: #D3D3D3;
    }

    .login .form .btn-login {
        background: none;
        text-decoration: none;
        color: white;
        box-shadow: 0px 0px 0px 2px white;
        border-radius: 3px;
        padding: 5px 2em;
        transition: 0.5s;
    }

    .login .form .btn-login:hover {
        background: white;
        color: dimgray;
        transition: 0.5s;
    }

    .login .forgot {
        text-decoration: none;
        color: white;
        float: right;
    }

    footer {
        position: absolute;
        color: #136a8a;
        bottom: 10px;
        padding-left: 20px;
    }

    footer p {
        display: inline;
    }

    footer a {
        color: green;
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }

    footer .heart {
        color: #B22222;
        font-size: 1.5em
    }
</style>

<body>
   
    <!-- partial:index.partial.html -->
    <section class='login' id='login'>
    <h3>Use your username and password to get<br> enter in the Futsal management system</h3>
        <div class='head'>
            <h1 class='company' style="color: black; text-shadow:1px 1px 1px white;">Futsal-Login</h1>
        </div>
        <p class='msg' style="color: black;"> <u>Make login and enjoy the futsal universe.</u></p>
        <div class='form'>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" placeholder='Username' class='text' id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus><br>
                <input placeholder='Enter password from here' class='password' id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"><br>
                <button type="submit" class='btn-login' id='do-login' style="border: 0;">Login</button>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class='forgot'>Forgot?</a>
                @endif
            </form>
        </div>
    </section>

    <!-- partial -->

    <script src="./script.js"></script>

</body>

</html>






















<!-- <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form> -->