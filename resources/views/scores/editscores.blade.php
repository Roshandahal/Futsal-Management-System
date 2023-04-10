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
            <form action="{{url('update-scores/' .$scores->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h4><u>Update score from here.</u></h4>
                @if(session('status'))
                <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                @endif
                <label>First team name</label><br>
                <input type="text" name="nameone" value="{{$scores->nameone}}" placeholder="Enter first team name"><br>
                <label>First team logo</label><br>
                <img src="{{asset('uploads/teamlogoone/' .$scores->imageone)}}" width="40px;">
                <input type="file" name="imageone" placeholder="Enter second team name"><br>
                <br>
                <label>First team score</label><br>
                <input type="text" name="scoreone" value="{{$scores->scoreone}}" placeholder="score of first team"><br>
                <label>Second team name</label><br>
                <input type="text" name="nametwo" value="{{$scores->nametwo}}" placeholder="Enter second team name"><br>
                <label>Second team logo</label><br>
                <img src="{{asset('uploads/teamlogotwo/' .$scores->imagetwo)}}" width="40px;">
                <input type="file" name="imagetwo" placeholder="Enter second team name"><br>
                <br>
                <label>Second team score</label><br>

                <input type="text" name="scoretwo" value="{{$scores->scoretwo}}" placeholder="score of second team"><br>
                <label>Status</label><br>
                <input type="text" name="status" value="{{$scores->status}}" placeholder="enter status halftime/fulltime/running">
                <div style="text-align: center;" class="button"><br>
                    <button type="submit" style="width: 100%; background: red; color: aliceblue; font-weight: bold;">Update score</button>
                </div>

            </form>
        </div>
    </div>
</div>