@extends('adminnav.adminnav')
@section('adminnavbar')


<body style="background-color: grey;">
<div class="container" style="position:absolute; top:200px;">

    @foreach($review as $item)

    <thead>
        <hr>
        <th scope="col">
            <U><h5>Feedback from the user</h5></U>
            
        </th>
        <p style="font-style:italic; font-weight:bold; color:aliceblue;">{{$item->review}}</p>
        <td><a href="{{url('deletereview/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
        <hr>

    </thead><br><br><br>
    <tbody>



        @endforeach
    </tbody>


</div>
</body>



@stop