<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ URL::asset('/css/map.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ URL::asset('/js/typewriter.js') }}"></script>

        <title>Map</title>

    </head>
    <body>
   
        <div id="flag" style="z-index:10;position:absolute;width:20%;height:25%;top: 73%;
  left: 84%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);">
        <a href="{{ URL('/l1') }}" style="text-decoration:none">  <img src="{{ URL::asset('/img/flag.png') }}" style="width:20%;height:20%"><p style="font-weight:bold;color:green;font-size:18px">Level 01</p></a>
        </div>
        <div id="flag" style="z-index:10;position:absolute;width:20%;height:25%;top: 57%;
  left: 90%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);">
        <a href="{{ URL('/l2') }}" style="text-decoration:none">  <img src="{{ URL::asset('/img/flag.png') }}" style="width:20%;height:20%"><p style="font-weight:bold;color:green;font-size:18px">Level 02</p></a>
        </div>
        <div id="flag" style="z-index:10;position:absolute;width:20%;height:25%;top: 59%;
  left: 74%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);">
        <a href="{{ URL('/l3') }}" style="text-decoration:none">  <img src="{{ URL::asset('/img/flag.png') }}" style="width:20%;height:20%"><p style="font-weight:bold;color:green;font-size:18px">Level 03</p></a>
        </div>

        <div id="flag" style="z-index:10;position:absolute;width:20%;height:25%;top: 29%;
  left: 65%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);">
        <a href="{{ URL('/l4') }}" style="text-decoration:none">  <img src="{{ URL::asset('/img/flag.png') }}" style="width:20%;height:20%"><p style="font-weight:bold;color:green;font-size:18px">Level 04</p></a>
        </div>
    
    <div id="wrap">
      
<!-- <img class="leftfoot1" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" style="margin-left:750px;margin-bottom:200px" />

<img class="right" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" style="margin-left:750px;margin-bottom:200px"/>

<img class="leftfoot1" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" style="margin-left:980px;margin-bottom:310px" />

<img class="right" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" style="margin-left:920px;margin-bottom:310px"/>

<img class="leftfoot1" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" style="margin-left:920px;margin-bottom:320px"/>

<img class="right" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" style="margin-left:850px;margin-bottom:320px"/> -->

<!-- <img class="leftfoot1" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" style="margin-left:700px"/>

<img class="right" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" style="margin-left:700px"/>

<img class="leftfoot1" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="right" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="leftfoot1" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="right" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="leftfoot1" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="right" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="leftfoot1" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="right" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="leftfoot1" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="right" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="leftfoot1" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" />

<img class="right" src="{{ URL::asset('/img/ft.svg') }}" alt="footprint" /> -->
</div>
</body>

<!-- There's nothing to look in here.......... -->
</html>
