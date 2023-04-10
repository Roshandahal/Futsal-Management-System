<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    .navbar {
        background-color: black;
        height: auto;
        width: 100%;
        color: white;


    }

    .nav-link {
        color: white;
        font-weight: bold;
        font-style: italic;
    }

    .navbar-brand {
        color: yellow;
        font-style: italic;
        font-weight: bold;
    }
</style>

<body>

    <!-- for navication -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h4>
                    <marquee>Futsal Management System</marquee>
                </h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{('/dashboard')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('gallery')}}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('gallery')}}">Events</a>
                    </li>

                    <!-- <li class="nav-item">
          <a class="nav-link" href="{{('admin')}}">Admin</a>
        </li> -->


                </ul>

            </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>

@yield('nav')