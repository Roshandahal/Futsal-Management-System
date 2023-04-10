@extends('home.beforelogin')
@section('nav')

    
    <title>Welcome|page</title>



    <style>
        body {

            background: black;
            color: white;
            background-image: url("./images/one.jpg");
            height: 1000px;
            width: 100%;
            background-size: cover;
        }

        .container {
            position: relative;
            top: 400px;
           
        }



        .description {

            color: black;
        }

        .login {
            color: white;
           
            
        }
    </style>


<body class="antialiased">

    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <!-- for description of the welcome page  -->
                <h1 style="text-shadow: 1px 1px 1px black;">Welcome to user interface of Futsal management system.
                    <p style="font-size: 15px; color:aliceblue;"> Make login using your credintal and click register to make new account using your new information.</p>
                    <!-- for login and register button  -->
                    <div>
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-danger">Register</a>
                            @endif
                            @endauth
                        </div>
                        @endif



                    </div>



            </div>
            <div class="col-sm-6 login">
                <!-- for login and register  -->


            </div>
        </div>
    </div>
    @endsection






















</body>

</html>