@extends('home.index')
@section('nav')
<style>
    .container {
        position: absolute;
        top: 100px;
        height: auto;
    }

    body {
        background-image: url("./images/futsal2.jpg");
        height: auto;
        width: 100%;
        background-size: cover;
    }

    /* .row {
        border: 2px solid red;
    } */

    .firstcol {

        background: darkgoldenrod;
        color: white;

    }

    .secondcol {
        border: 5px solid black;
        height: auto;

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
                <!-- for making booking description -->
                <h3>Make booking from here</h3>
                <p>Make booking from here fill up the form by using essential credintals,use your proper information for
                    making court booked.</p>
                <hr>
                <h3><u>Price of the futsal is here</u></h3>
                <!-- for making table of the futsal price  -->
                <table class="table table-boardered table-striped table-dark" style="background-color:white;  box-shadow: 2px 2px 2px 2px black;">
                    <thead>
                        <tr>
                            <th>Five men</th>
                            <th>Seven men</th>
                            <th>Time</th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach($price as $item)
                        <tr>
                            <td>{{$item->fivemenprice}}</td>
                            <td>{{$item->sevenmenprice}}</td>
                            <td>{{$item->timeduration}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 secondcol">
                <!-- for making form to make booking  -->
                <form action="" method="post">
                    @csrf
                    <h4><u>Book now, Fill up the form</u></h4>
                    @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label>Team name/your name</label><br>
                    <input type="text" name="name" placeholder="Enter your name/enter team name."><br>
                    <label>Contact</label><br>
                    <input type="text" name="contact" placeholder="Enter your contact number."><br>
                    <label>Booking Date/Time</label><br>
                    <input type="datetime-local" name="timeanddate" placeholder="Enter date and time you need"><br>
                    <label>Court size</label><br>
                    <select name="courtsize" class="required" style="width: 100%;" required>
                        <option value="Five-man"><b></b>Five-Men</b></option>
                        <option value="seven-man"><b></b>Seven-Men</b></option>
                    </select><br><br>
                    <div style="text-align: center;" class="button">
                        <button type="submit" style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Booknow</button>
                    </div>

                </form>
            </div>
        </div>


    </div>


</body>






@stop