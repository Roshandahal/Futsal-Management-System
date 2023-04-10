@extends('adminnav.adminnav')
@section('adminnavbar')


<body style="background-color:#24708B;">
    <div class="card" style="width: 50%; position:absolute; top: 200px;">
        <div class="card-header">
            <h4>Update reserved time from here</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-resurve/'.$alreadybooked->id)}}" method="POST">
                @csrf
                @method('put')

                <div class="form-group mb-3">
                    <label for="" class="lbl">Booked date</label>
                    <input type="date" name="date" value="{{$alreadybooked->date}}" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your booking date" required>
                </div>
                <div class="form-group mb-3">
                    <label for="" class="lbl">Booked Time</label>
                    <input type="time" name="time" value="{{$alreadybooked->time}}" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your booking time" required>
                </div>
                <div class="form-group mb-3">
                    <label for="" class="lbl">say something about price.</label>
                    <input type="longtext" name="price" value="{{$alreadybooked->price}}" class="form-control" style="border:3px solid #CCAB06;" placeholder="Enter your booking time" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-warning" style="color: #B9C6CB; width:30%; background-color:#24708B; font-weight:bold; text-align:center;">update</button>


                    @if(session('status'))
                    <h6 style="color:red; font-weight:bold; font-style:italic; text-shadow:2px 2px black; text-align:center;">{{session('status')}}</h6>
                    @endif
                </div>
            </form>
        </div>
</body>
@stop