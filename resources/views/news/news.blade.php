@extends('home.index')
@section('nav')
<style>
    .container {
        height: auto;
        width: 100%;
        position: relative;
        top: 100px;
        
    }


    .columnone {
        height: 600px;

    }

    .columntwo {
        height: 600px;


    }

    .newscard {

        font-weight: bold;

        height: 90%;
        box-shadow: 3px 3px 10px 2px black;

    }

    .img {
        box-shadow: 2px 2px 10px 2px black;


    }

    .comment {

        box-shadow: 1px 1px 3px 2px black;
        outline: none;
    }

    .comment:hover {
        border: 2px solid black;
        box-shadow: 1px 1px 2px 2px black;
    }

    /* for second colume from here */
    .cardtwo {
        background-color: red;
        height: 90%;

    }

    .scorerow {

        height: 50%;
    }

    .scorecard {
        background-color: white;
        width: 95%;
        height: 85%;
        margin: 10px;
        box-shadow: 2px 2px 4px 2px black;
        background-image: url("madridteam.jpg");
    }

    .tournmentcard {
        background-color: white;
        box-shadow: 2px 2px 4px 2px black;
        height: 240px;
        width: 95%;
        margin: 10px;
        background-image: url("GettyImages-921645970.0.0.jpg");


    }

    .introduction {
        background-color: black;
        position: relative;
        top: 70px;
        height: 100px;
        transition: 0.6s;
        box-shadow: 1px 1px 3px 1px black;
    }

    .introduction p {
        visibility: hidden;
        opacity: 0;
        margin: 5px;
        margin: 5px;
        color: white;
        position: relative;
        top: 30px;
        text-align: center;
        text-shadow: 0px 1px white;
    }

    .introduction h1 {

        color: aliceblue;
        margin: 5px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        font-size: 30px;
        position: relative;
        top: 25px;
        text-shadow: 0px 1px white;
    }

    .introduction a {

        color: black;
        margin: 5px;
        font-family: Arial, Helvetica, sans-serif;
        align-items: center;
        position: relative;
        top: 25px;
        left: 225px;
        text-shadow: 0px 1px white;
        visibility: hidden;
        opacity: 0;
        background-color: white;
        border: 2px solid blue;
        text-decoration: none;
        font-weight: bold;


    }

    .introduction a:hover {
        background-color: brown;
        cursor: pointer;
    }

    .introduction:hover {
        background-color: black;
        position: relative;
        top: 70px;
        height: 180px;
        cursor: pointer;

    }

    .introduction:hover p {
        visibility: visible;
        opacity: 1;
    }

    .introduction:hover a {
        visibility: visible;
        opacity: 1;
    }

    /* for tournment and games column */
    .tournmentintro h1 {
        color: black;
        margin: 2px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        text-shadow: 0px 1px black;
        font-weight: bold;

    }

    .tournmentintro {
        height: 100%;
        transition: 0.4s;

    }

    .tournmentintro p {
        color: black;
        margin: 2px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        text-shadow: 0px 1px black;
        font-weight: bold;

    }

    .tournmentintro a {
        color: black;
        border: 2px solid black;
        margin: 2px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        text-shadow: 0px 1px black;
        font-weight: bold;
        visibility: hidden;
        opacity: 0;
    }

    .tournmentintro:hover {
        background-color: #072F6C;
        height: 100%;
        color: aliceblue;
        margin: 2px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        text-shadow: 0px 1px #072F6C;
        font-weight: bold;
        cursor: pointer;




    }

    .tournmentintro:hover a {
        color: black;
        border: 2px solid black;
        background-color: white;
        margin: 2px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        text-shadow: 0px 1px black;
        font-weight: bold;
        visibility: visible;
        opacity: 1;
    }


    .tournmentintro:hover h1 {
        color: aliceblue;
    }

    .tournmentintro:hover p {
        color: aliceblue;
    }
</style>




<body>
    <!-- to make a container -->
    <div class="container">
        <div class="row">
            <div class="columnone col-sm-6">

                <!-- for viewing the post of the newsinterface -->
                @foreach($news as $item)
                <div class="newscard">
                    <table>
                        <td>
                            <div class="row" style=" color:black; font-weight:bold; font-family:Arial; text-shadow:2px 2px white;">
                                <h3 style="color:red; text-shadow:1px 1px black; font-weight:bold; position:relative; right:-20px;">
                                {{$item->headline}}</h1>
                            </div>
                            <div class="row" style="position:relative; right:-20px; font-weight:bold;">
                                <p style="color: black; text-shadow:2px 2px white;">Post-time:3pm,updated time:8pm
                                </p>
                            </div>
                            <div class="row" style="position:relative; right:-20px;">
                                <h6 style="color:black;">
                                    {{$item->about}}

                                </h6>
                            </div>
                            <div class="row"><img src="{{asset('uploads/news/' .$item->profile_image)}}" width="80px;"></div>
                            <br>
                            <input class="comment" type="text" style="width: 85%; position: relative; right:-5px; top:5px;" placeholder="Add comment to the post">

                            

                        </td>
                        <hr>

                    </table>
                </div>
                @endforeach






            </div>
            <!-- for second column -->
            <div class="columntwo col-sm-6">
                <div class="scorerow row">
                    <div class="scorecard">
                        <div class="introduction">
                            <h1>View scores From here</h1>
                            <p>View score from here and enjoy the running game</p>
                            <a href="" class="btn btn-danger">View score</a>
                        </div>
                    </div>


                </div>
                <div class="tournmentrow row">
                    <div class="tournmentcard">
                        <div class="tournmentintro">
                            <h1>See upcomming Games/Tournment</h1>
                            <p>See the latest upcomming games and enjoy by giving presence in futsal court.</p>
                            <a href="">Upcomming Games</a>
                            <a href="">Tournment Details</a>
                            <a href="">Make Challange</a>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>

</body>




@endsection