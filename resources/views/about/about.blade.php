@extends('home.beforelogin')
@section('nav')

<body>
  <!-- for card grout of the details of the futsal -->
  <div class="card-group" style="position:absolute; top:570px;">
    <div class="card">
      <img src="images/three.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Location:</h5>
        <p class="card-text">Pathivara futsal is established in 2016, it is located in kabyabatika,pachruki/itahari-sunsari.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <img src="images/one.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Futsal for:</h5>
        <p class="card-text">It is established for making the football platform explore all over the places.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <img src="images/two.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Area and design:</h5>
        <p class="card-text">the design of the futsal is catogarized in to two steps, for five-man game and seven man i.e. field is catogarized in to two parts.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <!-- finished -->
  <div class="card text-center" style="position:absolute; top:100px; width:100%;">
    <div class="card-body">
      <h5 class="card-title" style="font-weight: bold; font-style:italic;">Map for better location</h5>

      <!-- gps location for map of the futsal -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d449.49561696489275!2d87.25595270448542!3d26.67791623447797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6d85ec271429%3A0x726471d3d310ab7d!2sPathivara%20Futsal%20PVT.Ltd.!5e0!3m2!1sen!2snp!4v1645139979476!5m2!1sen!2snp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">view location</iframe>

      <p class="card-text" style="color:black;font-style:italic; font-weight:bold;">See the location given in the map as well see the see live location of the actual streat map. </p>
      <a href="#" class="btn btn-warning">Gallary</a><br><br>
      <form action="{{url('about')}}" method="POST">
        @csrf
        <input type="longtext" name="review" placeholder="Give review about pathivara futsal" style="width: 100%; border:2px solid black;">
        <a href="" type="submit">send review</a>
      </form>
      @if(session('status'))
      <h6 style="color:red; font-weight:bold; font-style:italic; text-shadow:2px 2px black; text-align:center;">{{session('status')}}</h6>
      @endif
    </div>
    <!-- for button grougs in about link -->

  </div>




</body>
