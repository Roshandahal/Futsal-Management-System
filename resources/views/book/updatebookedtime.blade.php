@extends('adminnav.adminnav')
@section('adminnavbar')


<body style="background-color: grey;">
    <div class="container" style=" position:absolute; top:250px;">
        <div class="card" style="width: 50%;">
            <div class="card-header">
                <h4>Update reserved time from here</h4>
            </div>
            @if(session('status'))
                        <h6 style="color:red; font-weight:bold; font-style:italic; text-shadow:2px 2px black; text-align:center;">{{session('status')}}</h6>
                        @endif
            <div class="card-body">
                <form action="" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="" class="lbl">Booked date</label>
                        <input type="date" name="date" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your booking date" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="lbl">Booked Time</label>
                        <input type="time" name="time" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your booking time" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="lbl">Booked Time</label>
                        <input type="longtext" name="price" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your booking time" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning" style="color: #B9C6CB; width:30%; background-color:#24708B; font-weight:bold; text-align:center;">Post</button>


                        
                    </div>
                </form>




            </div>


        </div>
        <!-- for making the price of the futsal -->
        <p>
            <button class="btn danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" style="position:relative; top:-55px; left:220px; background-color:#185E57; color:aliceblue; font-weight:bolder;">
                View Price and reserved time.
            </button>
        </p>

        <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="collapseWidthExample">

                @foreach($alreadybooked as $item)
                <p style="font-style:italic; font-weight:bold; color:white; text-shadow:3px 3px black;">{{$item->price}}<br></p><hr>
                @endforeach

                <table class="table table-borderless table-dark" style="position:absolute; top: 250px; width:50%; left:700px;">
                    <thead>
                        <tr>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alreadybooked as $item)
                        <tr>

                            <td>Date: {{$item->date}}, Time: {{$item->time}}</td>
                            <td><a href="{{url('edit-resurve/'.$item->id)}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{url('delete-resurve/'.$item->id)}}" class="btn btn-danger">Delete</a></td>


                        </tr>
                        @endforeach
                    </tbody>
                </table><br><br><br><br><br><br><br>

            </div>
</body>


@stop