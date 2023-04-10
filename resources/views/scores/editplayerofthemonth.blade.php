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

            <!-- update score from here  -->
            <form action="{{url('update-player/' .$player->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label>Update Image of player of the month</label><br>
                    <img src="{{asset('uploads/playerofthemonth/' .$player->playerofthemonth)}}" width="40px;">
                    <input type="file" name="playerofthemonth" placeholder="Enter second team logo">
                    <div style="text-align: center;" class="button"><br>
                        <button type="submit"
                            style="width: 100%; background: blue; color: aliceblue; font-weight: bold;">Post player of the month</button>
                    </div>
                    <br>
                

            </form>
        </div>
    </div>
</div>