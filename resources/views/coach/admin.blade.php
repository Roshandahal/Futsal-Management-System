@extends('admin.adminnav')
@section('content')
@endsection
<title>Coach details</title>


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
                <h3>update coach details from here</h3>
                <p>Update coach details from this pannel. make edit,update and delete the details from the table listed below as per the requirement. </p>
                <hr>
                <!-- making table for tiesheet  -->
                <h4><u>Players who want coach</u></h4>
                <table class="table table-boardered table-striped table-dark" style="background-color:white;">
                    <thead>
                        <tr>
                            <th>Player name</th>
                            <th>contact</th>
                            <th>coach needed</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookcoach as $item)
                        <tr>

                            <td>{{$item->coachname}}</td>
                            <td>{{$item->playername}}</td>
                            <td>{{$item->contact}}</td>
                            <td><i class="fa fa-edit" style="font-size:20px;"></i></td>
                            <td><i class="fa fa-trash" style="font-size:20px; color:red;"></i></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>





            </div>
            <div class="col-sm-6 secondcol">
                <!-- Update the details of the tournment -->
                <form action="" method="post">

                    @csrf
                    <h4><u>Fill the form and update the coach details</u></h4>
                    @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label>Name of the coach</label><br>
                    <input type="text" name="name" placeholder="Enter coach name"><br>
                    <label>Available time</label><br>
                    <input type="text" name="coachtime" placeholder="enter the time of coach availability"><br>
                    <label>club belonging</label><br>
                    <input type="text" name="club" placeholder="coach belongs to which club?">
                    <div style="text-align: center;" class="button"><br>
                        <button type="submit" style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Post the fees</button>
                    </div>

                </form>
                <!-- edit the details of the coach  -->
                <h4><u>Edit,update/delete coach details</u></h4>
                <table class="table table-boardered table-striped table-dark" style="background-color:white;">
                    <thead>
                        <tr>
                            <th>coach name</th>
                            <th>Time of available</th>
                            <th>club belonging</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coachdetails as $item)
                        <tr>

                            <td>{{$item->name}}</td>
                            <td>{{$item->namecoachtime}}</td>
                            <td>{{$item->club}}</td>
                            <td><i class="fa fa-edit" style="font-size:20px;"></i></td>
                            <td><i class="fa fa-trash" style="font-size:20px; color:red;"></i></td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>






            </div>
        </div>


    </div>


</body>