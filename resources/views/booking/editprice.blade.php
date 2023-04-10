<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .formlbl {
        font-style: italic;
        color: black;
        font-weight: bold;
        width: 100%;
    }

    .container {
        position: absolute;
        top: 100px;
        width: 100%;
        margin: 0px;
        padding: 0px;
    }

    form input {
        width: 100%;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12">




            <form action="{{url('update-price/' .$price->id)}}" method="post">
                @csrf
                @method('PUT')
                <h4><u>Update price</u></h4>
                @if(session('status'))
                <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                @endif
                <label>Five men</label><br>
                <input type="text" name="fivemenprice" value="{{$price->fivemenprice}}" placeholder="Enter the price of small court"><br>
                <label>Seven men</label><br>
                <input type="text" name="sevenmenprice" value="{{$price->sevenmenprice}}" placeholder="Enter the price of second court"><br>
                <label>Time duration</label><br>
                <input type="datetime" name="timeduration" value="{{$price->timeduration}}" placeholder="Enter the time given for one game"><br>
                <div style="text-align: center;" class="button">
                    <button type="submit" style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Post
                        price</button>
                </div>

            </form>


            
        </div>
    </div>
</div>