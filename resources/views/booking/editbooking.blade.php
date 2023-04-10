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




        <form action="{{url('update-booking/' .$booking->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <h4><u>edit now, Fill up the form</u></h4>
                    @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label>Team name/your name</label><br>
                    <input type="text" name="name" value="{{$booking->name}}" placeholder="Enter your name/enter team name."><br>
                    <label>Contact</label><br>
                    <input type="text" name="contact" value="{{$booking->contact}}" placeholder="Enter your contact number."><br>
                    <label>Booking Date/Time</label><br>
                    <input type="datetime-local" name="timeanddate" value="{{$booking->timeanddate}}" placeholder="Enter date and time you need"><br>
                    <label>Court size</label><br>
                    <select name="courtsize" value="{{$booking->courtsize}}" class="required" style="width: 100%;" required>
                        <option value="Five-man"><b></b>Five-Men</b></option>
                        <option value="seven-man"><b></b>Seven-Men</b></option>
                    </select><br><br>
                    <div style="text-align: center;" class="button">
                        <button type="submit" style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Booknow</button>
                    </div>

                </form>


            
        </div>
    </div>
</div>