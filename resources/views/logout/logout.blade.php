@extends('admin.adminnav')
@section('content')
@endsection


<style>
    .container {
        position: absolute;
        top: 100px;
        width: auto;
    }
</style>

<style>
    .container {

        position: relative;
        top: 100px;
    }

    .form .image:hover {

        opacity: 1;
        background: black;
        animation-duration: 2s;
        border-radius: 150px;
        transition: 0.4s;

    }

    /* .description {
            border: 2px solid black;
            background: yellow;
        } */

    label {
        font-weight: bold;
    }
</style>
</head>

<body style="background: white;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 description">
                <h1 style="text-shadow: 1px 1px 1px black;"><u>see your profile here</h1></u>
                <p style=" font-weight:bold;">
                    see your profile which includes all the necessary items.your username, your name, your password.the credincal for changing password
                    two factor authentication.Browser section.credincal to delete account.
                </p>
            </div>

            <div class="col-sm-6 form">
                <a class="nav-link" href="{{url('/user/profile')}}" style="font-weight:bold; color:yellow;"><img src="images/profile.webp" class="image" style="width: 100px; height:100px; border-radius:100px;"></a>
            </div>













        </div>
    </div>

</body>