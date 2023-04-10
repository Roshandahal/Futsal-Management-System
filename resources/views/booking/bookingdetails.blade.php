@extends('admin.adminnav')
@section('content')
@endsection
<title>Booking details</title>

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
        background: blue;
        color: white;
    }

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
        border: 3px solid black;

    }
</style>



<body style="background: yellow;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 firstcol">
                <!-- for making booking description -->
                <h3>Update the price of the futsal/See booking details</h3>
                <p style="font-weight: bold;">Here you can update the price of the futsal by filling up the form given below and you can see/edit
                    and delete the booking details from the bable in the rightside.</p>
                <hr>
                <!-- for updatin the price of the futsal  -->
                
                <form action="" method="post">
                    @csrf
                    <h4><u>Update price</u></h4>
                    @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label>Five men</label><br>
                    <input type="text" name="fivemenprice" placeholder="Enter the price of small court"><br>
                    <label>Seven men</label><br>
                    <input type="text" name="sevenmenprice" placeholder="Enter the price of second court"><br>
                    <label>Time duration</label><br>
                    <input type="datetime" name="timeduration" placeholder="Enter the time given for one game"><br>
                    <label>Court size</label><br>
                    <div style="text-align: center;" class="button">
                        <button type="submit" style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Post
                            price</button>
                    </div>

                </form>
                
                <hr>
                <table class="table table-boardered table-striped table-dark" style="background-color:white; box-shadow: 2px 2px 2px 2px black;">
                    <thead>
                        <tr>
                            <th>Five men</th>
                            <th>Seven men</th>
                            <th>Time</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($price as $item)
                        <tr>
                            <td>{{$item->fivemenprice}}</td>
                            <td>{{$item->sevenmenprice}}</td>
                            <td>{{$item->timeduration}}</td>
                            <td><a href="{{url('edit-price/'.$item->id)}}"><i class="fa fa-edit" style="font-size:20px;"></a></td>
                            <td><a href="{{url('delete-price/'.$item->id)}}"><i class="fa fa-trash" style="font-size:20px; color:red;"></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
            <div class="col-sm-6 secondcol">
                <!-- for viewing the bookdetailed on the table  -->
                <!-- for making table of the futsal price  -->
                <h2 style="font-weight: bold;">See Booking Details</h2>
                <p style="font-weight: bold;">Here you can update the details of the booked court by filling up the form given below and you can see/edit
                    and delete the booking details from the bable in the rightside.</p>
                <hr>
                <table class="table table-boardered table-striped table-dark" style="background-color:white; box-shadow: 2px 2px 2px 2px black;">
                    <thead>
                        <tr>
                            <th>Name </th>
                            <th>Contact</th>
                            <th>Date/Time</th>
                            <th>Court Size</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($booked as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->contact}}</td>
                            <td>{{$item->timeanddate}}</td>
                            <td>{{$item->courtsize}}</td>
                            <td><a href="{{url('edit-booking/'.$item->id)}}"><i class="fa fa-edit" style="font-size:20px;"></a></td>
                            <td><a href="{{url('delete-booking/'.$item->id)}}"><i class="fa fa-trash" style="font-size:20px; color:red;"></i></a></td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>


    </div>














</body>