@extends('home.index')
@section('nav')
<title>Tournments</title>
<style>
    .container {
        position: absolute;
        top: 70px;
        height: auto;
    }

    /* .row {
        border: 2px solid red;
    } */

    .firstcol {
        /* border: 2px solid black;
        box-shadow: 2px 2px 2px 2px black; */
        background: yellow;
    }

    .secondcol {
        /* border: 2px solid black;
        box-shadow: 2px 2px 2px 2px black; */
        height: auto;
        background: black;
        color: white;


    }

    form label {
        font-weight: bold;

    }

    form input {
        width: 100%;
        outline: none;

    }
</style>



<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 firstcol">
                <!-- for making tournment description -->
                <h3>See tournment from here</h3>
                <p>Tournment is going to be started soon,you can register your team in this tournment. before 3 days of starting date.make register and enter in the champainship.</p>
                <hr>
                @foreach($tournmentfees as $item)
                <!-- for entry fee and price  -->
                Entry fee: <p style="font-weight: bold; font-style:italic;">{{$item->entryfee}}</p>
                Winner price: <p style="font-weight: bold; font-style:italic;">{{$item->winnerprice}}</p>
                Runner up: <p style="font-weight: bold; font-style:italic;">{{$item->runnerup}}</p>
                <hr>
                @endforeach


                @foreach($tiesheet as $item)
                <h3>View Tie-sheet</h3>
                <img src="{{asset('uploads/teamlogoone/' .$item->tiesheet)}}" width="100%;" style="box-shadow: 2px 2px 2px 2px red;">
                @endforeach
                <br><br>




            </div>
            <div class="col-sm-6 secondcol">
                <!-- Register team from here -->
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4><u>Make entry in tournment from here</u></h4>
                    @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label>Name of the team</label><br>
                    <input type="text" name="name" placeholder="Enter team name"><br>
                    <label>Contact number</label><br>
                    <input type="text" name="contact" placeholder="Enter contact number"><br>
                    <label>Location of team</label><br>
                    <input type="text" name="location" placeholder="place of the team belonging">
                    <div style="text-align: center;" class="button"><br>
                        <button type="submit" style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Enter tournment</button>
                    </div>

                </form>


                <!-- Registered team details  -->

                <h4><u>Registered team till now</u></h4>
                @foreach($tournmententry as $item)
                
                <p style="font-weight: bold;">Team name: {{$item->name}}, Address: {{$item->name}}</p>
                <hr>

                @endforeach




            </div>
        </div>


    </div>

</body>