<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- for nav  -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-weight: bold;">Futsal Management system</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="text-shadow: 1px 1px 1px black; font-weight:bold;">Admin pannel</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active btn btn-primary" aria-current="page" href="{{('logout') }}" style="width:50px; font-weight:bold; color:white; font-style:italic;">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'dashboard'}}" style="color: white; text-shadow:1px 1px 1px black;">Go to userinterface</a>
                        </li>

                        <!-- for updating the credincial  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Update from here
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="{{('updatehome')}}">Update home page</a></li>
                                <li><a class="dropdown-item" href="{{('updatenews')}}">update news</a></li>
                                <li><a class="dropdown-item" href="{{('score')}}">update score</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{('updatecart')}}"></a></li>
                            </ul>
                        </li>
                        <!-- for viewing the details  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                View details from here
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="{{('userdetails')}}">View user details</a></li>
                                <li><a class="dropdown-item" href="{{('bookingdetails')}}">Show booking details</a></li>
                                <li><a class="dropdown-item" href="{{('updatecoach')}}">Coach details</a></li>
                                <li><a class="dropdown-item" href="{{('updatetournment')}}">Tournment details</a></li>
                                <li><a class="dropdown-item" href="{{('feedbackdetails')}}">Monthly suscribtion of players</a></li>
                                <li><a class="dropdown-item" href="{{('contactdetails')}}">Show contact details from user</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">others</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
@yield('adminnav')
