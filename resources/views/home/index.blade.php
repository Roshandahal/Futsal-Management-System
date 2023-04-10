<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pathivara Futsal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <style>
    .navbar{
        background-color: black;
        position: fixed;
        height: auto;
        width: 100%;
        
      
    }
    .nav-link {
        color: white;
        font-weight: bold;
        font-style: italic;
    }
    .navbar-brand{
        color: black;
        text-shadow: 1px 1px 0px white;
        font-style: italic;
        font-weight: bold;
    }

 </style>
  <body>

    <!-- for navication -->
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h4><marquee>Welcome</marquee></h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{('/dashboard')}}">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{('booknow')}}">Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('coach')}}">Book coach</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('tournment')}}">Tournments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('seenews')}}">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('viewscore')}}">Score</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{('admin')}}">Admin</a>
        </li> -->
        
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{('payment')}}">Payment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('logout')}}">Logout</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

@yield('nav')