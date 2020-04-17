<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NIFFL3R CTF</title>
        <link href='https://fonts.googleapis.com/css?family=Exo+2:400,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200,100italic,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script type="text/javascript" src="{{ URL::asset('/js/typewriter.js') }}"></script>
    <style>
      body
      {
          background: url("/img/niffl3rCTF.png");
          background-repeat: no-repeat;
      }
       h2,p
       {
           color:white;
       }
    </style>
    </head>
    <body>
        <div style="color:white;text-align:center;font-size:150%; margin: 0;position: absolute;top: 8%;left: 50%;-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);"> 
          <a class="typewrite" data-period="2000" data-type='["Welcome to Level 03 !","Maybe life is random, but I doubt it!"]'> </a> 
        </div>
        <div class="futurepanel">  
          <div class="futurepanel__header" style="text-align:center;">
            <h1 class="futurepanel_title">LEVEL 03</h1>
          </div>
          <div class="futurepanel__body">  
            <h2 class="heading" style="text-align:center;">&#9830;&#9830;&#9830;&nbsp;STORY&nbsp;&#9830;&#9830;&#9830;</h2>
          <div class="temp" style=" text-align: justify;text-justify: inter-word;">
            <p>You and Peter make your way back to Aslan’s camp where Aslan’s army is at. 
                News is received that the final battle will take place in the battle field at the dawn of the new day. 
                You along with Aslan and the Pevensies address the army for one last time before handing out each soldier the plan for the final battle. 
                Come dawn of the new day, you, the key of this battle, should join the Platoon A of the army to march to the Fords of Beruna.</p>
          </div>
          <div class="futurepanel__divider"></div>
          <p>Attachement URL  : <a href="{{ URL::asset('/attachments/collection.zip') }}" download style="text-decoration:none;color:green;">Download .zip file</a> </p>
        
          <div class="futureinput futureinput--text">
            <form method="POST" action="{{url('/authflag/ch3')}}">
            @csrf
              <p></p>
              <label class="required" for="example1">Flag (required)</label>
              <input type="text" name="flag" id="flag" placeholder="flag goes here ..." required>
              <button class="futurebutton">Submit</button>
              <p></p>
              <span class="futureinput__help">Submission Format - niffl3rCTF{...}</span>
            </form>
          </div>
          <div class="futurepanel__footer" style="text-align:center;">
            <p> [ NIFFL3R CTF - POWERED BY CIPH3R 007 ] </p> 
          </div>
          </div>
          </div>
    </body>
    
</html>
