@extends('home.index')
@section('nav')

<style>
    .form-control {
        color: #185E57;
        font-style: italic;
    }

    .lbl {
        font-style: italic;
        font-weight: bold;
    }
</style>

<body>

    <div class="container" style="position:absolute; top:80px;">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2" style="height:500px; width:400px;">
                <!-- for making form to book the count. -->
                <div class="card text-bg-dark mb-3" style=" height:420px; width:400px;">
                    <div class="card-header" style="background-color:#24708B;">
                        <h5 style="font-weight: bold; font-style:italic; color:white; text-shadow:3px 3px black;">Fill booking form for booking court !</h5>
                    </div>
                    @if(session('status'))
                    <h6 style="color:red; font-weight:bold; font-style:italic; text-shadow:2px 2px black; text-align:center;">{{session('status')}}</h6>
                    @endif
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="" class="lbl">Full Name</label>
                                <input type="text" name="fullname" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your Name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="lbl">Contact</label>
                                <input type="number" name="contact" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your gmail" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="lbl">Booking Date</label>
                                <input type="date" name="bookingdate" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your booking date" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="lbl">Booking Time</label>
                                <input type="time" name="bookingtime" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your booking time" required>
                            </div>
                            <div>
                                <label for="" class="lbl">Court size</label>
                                <select name="courtsize" class="form-control required" required style="border:3px solid #CCAB06;" required>
                                    <option value="Court-5"><b></b>Five-Men</b></option>
                                    <option value="Court-7"><b></b>Seven-Men</b></option>
                                </select><br>
                                <button type="submit" class="btn" style="color: #B9C6CB; width:30%; background-color:#24708B; font-weight:bold;">Submit</button>
                                <a href="{{url('buypackages')}}" class="btn" style="color: #B9C6CB; background-color:#9C7B0F; font-weight:bold;">Buy monthly subscription</a>
                            </div>
                        </form>
                    </div>
                    <!-- finished -->
                </div>
            </div><br>

            <!-- next block -->
            <div class="col-md-auto" style="height:550px; width:600px;">



                <!-- for making the price of the futsal -->
                <p>
                    <button class="btn danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" style="position:relative; top:175px; left:220px; background-color:#185E57; color:aliceblue; font-weight:bolder;">
                        View Price and reserved time.
                    </button>
                </p>

                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="collapseWidthExample">
                        <h2 style="color:#F2F21D; font-weight:bold; font-size:30px; text-shadow:3px 3px black;">Book Now, hurry up !!<br></h2>
                        @foreach($booknow as $item)
                        <p style="font-style:italic; font-weight:bold; color:white; text-shadow:3px 3px black;">{{$item->price}}<br></p>
                        @endforeach

                            <table class="table table-borderless table-dark" style="position:absolute; top: 250px; width:50%; left:600px;">
                                <thead>
                                    <tr>

                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($booknow as $item)
                                    <tr>

                                        <td style="font-weight:bold;">Date:{{$item->bookingdate}} Time:  {{$item->bookingtime}}</td>


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table><br><br><br><br><br><br><br>










                        
                    </div>
                </div>
            </div>


        </div>
    </div>

</body>


@extends('footer.footer')
@section('footer')

@stop