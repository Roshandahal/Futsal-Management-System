@extends('admin.adminnav')
@section('content')
@endsection
<title>Update tournment</title>
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


                <!-- for making tournment description -->
                <h3>update tournment from here</h3>
                <p>Tournment details entry fees and all the stuff that is seen on the tournment user interface will be updated from here. </p>
                <hr>
                <!-- for making the price edit update and delete  -->
                <table class="table table-boardered table-striped table-dark" style="background-color:white; box-shadow: 2px 2px 2px 2px black;">
                    <thead>
                        <!-- table for making the details of registered user update edit and delete  -->
                        <tr>
                            <th>Entryfee</th>
                            <th>Winner price</th>
                            <th>Runnerup</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tournmentfees as $item)
                        <tr>
                            <td> {{$item->entryfee}}</td>
                            <td> {{$item->winnerprice}}</td>
                            <td> {{$item->runnerup}}</td>
                            <td><i class="fa fa-edit" style="font-size:20px;"></i></td>
                            <td><i class="fa fa-trash" style="font-size:20px; color:red;"></i></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>


                <p>Details of tiesheet for making edit update as well as delete.</p>
                <!-- making table for tiesheet  -->
                <table class="table table-boardered table-striped table-dark" style="background-color:white; box-shadow: 2px 2px 2px 2px black;">
                    <thead>
                        <tr>
                            <th>Tiesheet</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>


                        <!-- table for making tiesheet update edit and delete  -->
                        @foreach($tiesheet as $item)
                        <tr>

                            <td><img src="{{asset('uploads/teamlogoone/' .$item->tiesheet)}}" width="30px;" </td>
                            <td><i class="fa fa-edit" style="font-size:20px;"></i></td>
                            <td><i class="fa fa-trash" style="font-size:20px; color:red;"></i></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <!-- entry data of the teams that ahs fill form to the registration of tournment  -->
                <p>Details of the registered players for making edit update as well as delete.</p>
                <table class="table table-boardered table-striped table-dark" style="background-color:white; box-shadow: 2px 2px 2px 2px black;">
                    <thead>
                        <!-- table for making the details of registered user update edit and delete  -->
                        <tr>
                            <th>Name of the team</th>
                            <th>Contact</th>
                            <th>Location</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tournmententry as $item)
                        <tr>
                            <td> {{$item->name}}</td>
                            <td> {{$item->contact}}</td>
                            <td> {{$item->location}}</td>
                            <td><i class="fa fa-edit" style="font-size:20px;"></i></td>
                            <td><i class="fa fa-trash" style="font-size:20px; color:red;"></i></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>





            </div>
            <div class="col-sm-6 secondcol">
                <!-- Update the details of the tournment -->
                <form action="{{ url('updatedetails')  }}" method="post">
                    @csrf
                    <h4><u>Update the details of the tournment</u></h4>
                    @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label>Entry fee</label><br>
                    <input type="text" name="entryfee" placeholder="Enter the entry fee of the tournment"><br>
                    <label>Winner price</label><br>
                    <input type="text" name="winnerprice" placeholder="enter the price of the winner"><br>
                    <label>Runnerup</label><br>
                    <input type="text" name="runnerup" placeholder="Enter the price of runnerup">
                    <div style="text-align: center;" class="button"><br>
                        <button type="submit" style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Post the fees</button>
                    </div>

                </form>


                <!-- Post for the tiesheet-->
                <h4><u>Update tie-sheet from here.</u></h4>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(session('tiesheet'))
                    <h6 style="background: black; color:aliceblue;">{{session('tiesheet')}}</h6>
                    @endif
                    <label>Tie-sheet</label><br>
                    <input type="file" name="tiesheet">
                    <div style="text-align: center;" class="button"><br>
                        <button type="submit" style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Post the fees</button>
                    </div>
                </form>



            </div>
        </div>


    </div>

</body>