@extends('home.index')
@section('nav')
@endsection
<style>
    .container {
        position: absolute;
        top: 100px;
        height: auto;
    }

    /* .row {
        border: 2px solid red;
    } */

    /* .firstcol {
        border: 2px solid black;
        box-shadow: 2px 2px 2px 2px black;
    } */

    .secondcol {
        /* border: 2px solid black;
        box-shadow: 2px 2px 2px 2px black; */
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
                <h3>See score from here</h3>
                <p>This is a live game score and the score of previous games that has is going on or already finished.
                    see player of the month photos down it is analysis by looking overall performance of the player.
                </p>
                <hr>
                <!-- player of the month -->
                @foreach($playerofthemonth as $item)
                <h3><u>Player of the month</u></h3>
               
                <img src="{{asset('uploads/playerofthemonth/' .$item->playerofthemonth)}}" width="100%;" style="box-shadow:2px 2px 2px 2px black;">
                <hr>
                @endforeach
        
            </div>
            <div class="col-sm-6 secondcol">
                <!-- see scores from here -->
                <h3><u>See scores from here</u></h3>
                <table class="table  table-dark" style="box-shadow:2px 2px 2px 2px black;">
                    <thead>
                        <tr>
                        <th>Team one</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Team two</th>
                            <th>Status</th>
                                                
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($scores as $item)
                        
                        <tr>
                        <td><img src="{{asset('uploads/teamlogoone/' .$item->imageone)}}" width="40px;"></td>
                            <td>{{$item->teamone}}</td>
                            <td style="font-weight: bold;">{{$item->scoreone}}</td>
                            <td style="font-weight: bold; font-size:larger;">-</td>
                            <td style="font-weight: bold; ">{{$item->scoretwo}}</td>
                            <td>{{$item->teamtwo}}</td>
                            
                           <td> <img src="{{asset('uploads/teamlogotwo/' .$item->imagetwo)}}" width="40px;"></td>
                            <td style="color: red;">{{$item->status}}</td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>

            </div>
        </div>


    </div>


</body>