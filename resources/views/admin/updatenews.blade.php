@extends('admin.adminnav')
@section('content')
@endsection
<style>
    .container{
        position: absolute;
        top: px;
    }
</style>


<body>

    <div class="container" >
        <div class="row">
            <div class="col-md-12" style="position: absolute; width:500px;">
                @if(session('status'))
                <h6 class="alert alert-success">{{('status')}}</h6>
                @endif
                <div class="card" style="position: absolute; top:100px; width:500px;">
                    <div class="card-header">
                        <h4>Post your latest news and current affares
                        </h4>

                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Headline</label>
                                <input type="text" name="headline" class="form-control" placeholder="Headline of the first news">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">About</label>
                                <input type="text" name="about" class="form-control" placeholder="Explanation of the event">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Add image</label>
                                <input type="file" name="profile_image" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Post</button>
                                <a href="{{url('postnews')}}" class="btn btn-danger">Back</a>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@extends('admin.footer')
@section('footers')
@stop