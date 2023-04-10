@extends('home.index')
@section('nav')
<title>Book coach</title>
<style>
    .container {
        position: absolute;
        top: 100px;
        height: auto;
    }

    /* .row {
        border: 2px solid red;
    } */

    /* .firstcol {
        border: 2px solid black;
        box-shadow: 2px 2px 2px 2px black;
    } */

    .secondcol {
        border: 2px solid black;
        box-shadow: 2px 2px 2px 2px black;
        height: auto;

    }

    form label {
        font-weight: bold;

    }

    form input {
        width: 100%;
        outline: none;

    }
</style>



<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 firstcol">
                <!-- for making tournment description -->
                <h3>Make booking of the coach.</h3>
                <p>You can see coach availability time, can choose the coach and fill the form yo book coach for your children.</p>
                <hr>
                <!-- making table for tiesheet  -->
                <h4><u>List of the coach,available time and club belonging.</u></h4>
                <table class="table table-boardered table-striped table-dark" style="box-shadow: 2px 2px 2px 2px black;">
                    <thead>
                        <tr>
                            <th>Name of the coach</th>
                            <th>Available time</th>
                            <th>club</th>
                                  

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($coachdetails as $item)    
                        <tr>
                    
                            <td>{{$item->name}}</td>
                            <td>{{$item->namecoachtime}}</td>
                            <td>{{$item->club}}</td>
                            
                        </tr>
@endforeach
                    </tbody>
                </table>
                

                


            </div>
            <div class="col-sm-6 secondcol">
              <!-- Update the details of the tournment -->
                  <form action="" method="post">
                    @csrf
                    <h4><u>Book coach for your children</u></h4>
                    <p>See the list of the coach in the table in the left side and book as per your choise.</p>
                    <h4><u>Fill the form and update the coach details</u></h4>
                    @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label>Coach name you want to book</label><br>
                    <input type="text" name="coachname" placeholder="Enter coach name you want to book"><br>
                    <label>Your name</label><br>
                    <input type="text" name="playername" placeholder="enter your name"><br>
                    <label>Your contact</label><br>
                    <input type="text" name="contact" placeholder="enter your contact">               
                    <div style="text-align: center;" class="button"><br>
                        <button type="submit"
                            style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Book coach</button>
                    </div><br>

                </form>
                
               

        
                
                

            </div>
        </div>


    </div>


</body>

@endsection