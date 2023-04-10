<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

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

</head>

<body style="background-color:#185E57;">

    <div class="container" style="position:absolute; top:80px;">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2" style="height:500px; width:400px;">
                <!-- for making form to book the count. -->
                <div class="card text-bg-dark mb-3" style=" height:550px; width:400px;">
                    <div class="card-header" style="background-color:#24708B;">
                        <h5 style="font-weight: bold; font-style:italic; color:white; text-shadow:3px 3px black;">Edit and update the booked court!</h5>
                    </div>
                    @if(session('status'))
                    <h6 style="color:red; font-weight:bold; font-style:italic; text-shadow:2px 2px black; text-align:center;">{{session('status')}}</h6>
                    @endif
                    <div class="card-body">
                        <form action="{{url('update-booking/'.$booknow->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group mb-3">
                                <label for="" class="lbl">Full Name</label>
                                <input type="text" name="fullname" value="{{$booknow->fullname}}" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your Name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="lbl">Contact</label>
                                <input type="number" name="contact" value="{{$booknow->contact}}" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your gmail" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="lbl">Booking Date</label>
                                <input type="date" name="bookingdate" value="{{$booknow->bookingdate}}" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your booking date" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="lbl">Booking Time</label>
                                <input type="time" name="bookingtime" value="{{$booknow->bookingtime}}" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your booking time" required>
                            </div>
                            <div>
                                <label for="" class="lbl">Court size</label>
                                <select name="courtsize" value="{{$booknow->courtsize}}" class="form-control required" required style="border:3px solid #CCAB06;" required>
                                    <option value="Court-5"><b></b>Five-Men</b></option>
                                    <option value="Court-7"><b></b>Seven-Men</b></option>
                                </select><br>
                                <button type="submit" class="btn" style="color: #B9C6CB; width:70%; background-color:#24708B; font-weight:bold;">update</button>
                                <a href="{{url('booked')}}" class="btn" style="color: #B9C6CB; background-color:#9C7B0F; font-weight:bold; width:25%;">Back</a>

                            </div>
                        </form>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>