@extends('home.index')
@section('nav')
@stop
<style>
  body {

    background: black;
    color: white;

  }

  img.background {
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
    width: 100%;
    height: 100%;
    -webkit-filter: blur(1.5px);
    /* Safari 6.0 - 9.0 */
    filter: blur(1.5px);
  }



  .container {
    position: relative;
    top: 100px;

  }
</style>

<body>
  <img class="background" src="/images/two.jpg" alt="Aleq">
  <div class="container">

    <h3 style="font-weight:bold; position:absolute; top:370px; color:yellow; text-shadow:2px 2px black;">Visit our Website to get more information about the futsal. You can make booking,Buy packages,See Scores, sees tournment champainship, can book for the trainer etc.</h1>
      <h1 style="font-weight:bold; position:absolute; top:420px; color:#FABC13; font-family:New Century Schoolbook, TeX Gyre Schola, serif; font-weight:bold; text-shadow:3px 3px black; font-size:50px; position:fixed;">Futsal Management System, since 2017
    </h3>
  </div>
</body>