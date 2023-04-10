@extends('adminnav.adminnav')
@section('adminnavbar')

<body>
<marquee>
            <h5 style="color:red; font-weight:bold;"> Court-Booked details </h5>
        </marquee>

    
        


        <div class="container" style="position:absolute; top:100px;">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Booking Date</th>
                        <th scope="col">Booking Time</th>
                        <th scope="col">Court Size</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($booknow as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->contact}}</td>
                        <td>{{$item->bookingdate}}</td>
                        <td>{{$item->bookingtime}}</td>
                        <td>{{$item->courtsize}}</td>
                        <td><a href="{{url('editbooked/'.$item->id)}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{url('destroy/'.$item->id)}}" class="btn btn-danger">Delete</a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table><br><br><br><br><br><br><br>
        </div>

    






</body>
@stop