@extends('admin.adminnav')
@section('content')
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

    .firstcol {
        border: 2px solid black;
        box-shadow: 2px 2px 2px 2px black;
    }

    .secondcol {
        border: 2px solid black;
        box-shadow: 2px 2px 2px 2px black;
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
                <h3>Update score from here,</h3>
                <p>see the score list/table below,edit update and delete theun-required items from the list </p>
                <hr>
                <!-- edit update score from here-->
                <h3><u>See scores from here</u></h3>
                <table class="table table-boardered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Team one</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Status</th>
                                                
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                  

                    @foreach($scores as $item)
                        <tr>
                            <td><img src="{{asset('uploads/teamlogoone/' .$item->imageone)}}" width="40px;"></td>
                            <td>{{$item->teamone}}</td>
                            <td>{{$item->scoreone}}</td>
                            <td>{{$item->scoretwo}}</td>
                            <td>{{$item->teamtwo}}</td>
                            
                           <td> <img src="{{asset('uploads/teamlogotwo/' .$item->imagetwo)}}" width="40px;"></td>
                            <td>{{$item->status}}</td>
                            <td><a href="{{url('edit-score/'.$item->id)}}"><i class="fa fa-edit" style="font-size:20px;"></i></a></td>
                            <td><a href="{{url('delete-score/'.$item->id)}}"><i class="fa fa-trash" style="font-size:20px; color:red;"></i></a></td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            
                <hr>
                <!-- for table player of the month  -->
                <table class="table table-boardered table-striped table-dark" style="background-color:white;">
                    <thead>
                        <u><h4>Player of the month</h4></u>
                        <tr>
                            <th>Player of the month</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($playerofthemonth as $item)

                        <tr>
                            
                            <td><img src="{{asset('uploads/playerofthemonth/' .$item->playerofthemonth)}}" width="40px;"></td>
                            <td><a href="{{url('edit-player/'.$item->id)}}"><i class="fa fa-edit" style="font-size:20px;"></i></a></td>
                            <td><a href="{{url('delete-player/'.$item->id)}}"><i class="fa fa-trash" style="font-size:20px; color:red;"></i></a></td>
                            
                        </tr>
                        @endforeach
                       

                    </tbody>
                </table>


            </div>
            <div class="col-sm-6 secondcol">
              <!-- update score from here  -->
                  <form  action="{{url('updatescores')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4><u>Update score from here.</u></h4>
                    @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label>First team name</label><br>
                    <input type="text" name="nameone" placeholder="Enter first team name"><br>
                    <label>First team logo</label><br>
                    <input type="file" name="imageone" placeholder="Enter first team logo"><br>
                    <label>First team score</label><br>
                    <input type="text" name="scoreone" placeholder="score of first team"><br>
                    <label>Second team name</label><br>
                    <input type="text" name="nametwo" placeholder="Enter second team name"><br>
                    <label>Second team logo</label><br>
                    <input type="file" name="imagetwo" placeholder="Enter second team logo"><br>
                    <label>Second team score</label><br>
                    <input type="text" name="scoretwo" placeholder="score of second team"><br>
                    <label>Status</label><br>
                    <input type="text" name="status" placeholder="enter status halftime/fulltime/running">                
                    <div style="text-align: center;" class="button"><br>
                        <button type="submit"
                            style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Update score</button>
                    </div>

                </form>

        
                <!-- for player of the month  -->
                
                <form action="{{url('playerofthemonth')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4><u>Update player of the month</u></h4>
                    @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label>Image of player of the month</label><br>
                    <input type="file" name="playerofthemonth" placeholder="Enter second team logo">
                    <div style="text-align: center;" class="button"><br>
                        <button type="submit"
                            style="width: 100%; background: blue; color: aliceblue; font-weight: bold;">Post player of the month</button>
                    </div>
                    <br>
                </form>
                

            </div>
        </div>


    </div>


  
</body>