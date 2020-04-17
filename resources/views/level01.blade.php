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
              <a class="typewrite" data-period="2000" data-type='["Welcome to Level 01 !","Maybe life is random, but I doubt it!"]'> </a> 
            </div>
            <div class="futurepanel">  
              <div class="futurepanel__header" style="text-align:center;">
                <h1 class="futurepanel_title">LEVEL 01</h1>
              </div>
              <div class="futurepanel__body">  
                <h2 class="heading" style="text-align:center;">&#9830;&#9830;&#9830;&nbsp;STORY&nbsp;&#9830;&#9830;&#9830;</h2>
                <div class="temp" style=" text-align: justify;text-justify: inter-word;">
                  <p>You arrive at glass water creek with Susan Pevensie and Mr Tumnus where the rest of the Pevensie siblings: Peter, Edmund and Lucy greets you at the shore. 
                      Peter welcomes you and gives a scroll of ancient text written to protect Narnia in its darkest times. 
                      You need to read the scroll if you’re to prepare for the doomsday battle. 
                      Be aware that not all Narnian texts can be read easily.</p>

                  <input type="text" placeholder="Us3M3" value="Ook. Ook. Ook. 
                    Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook.Ook. Ook. Ook. 
                    Ook. Ook. Ook! Ook? Ook! Ook! Ook. Ook? Ook. Ook. Ook. Ook.Ook. Ook. Ook. 
                    Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook.Ook. Ook? Ook. 
                    Ook? Ook! Ook. Ook? Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook.Ook. Ook. Ook.
                    Ook. Ook. Ook. Ook. Ook. Ook! Ook. Ook! Ook! Ook! Ook! Ook!Ook! Ook! Ook! 
                    Ook! Ook! Ook! Ook! Ook! Ook! Ook! Ook. Ook? Ook. Ook. Ook.Ook. Ook. Ook. 
                    Ook. Ook! Ook? Ook! Ook! Ook. Ook? Ook. Ook. Ook. Ook. Ook.Ook. Ook? Ook.
                    Ook? Ook! Ook. Ook? Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook.Ook. Ook. Ook.
                    Ook. Ook! Ook. Ook! Ook! Ook! Ook! Ook! Ook! Ook! Ook! Ook!Ook! Ook! Ook! 
                    Ook! Ook! Ook! Ook. Ook! Ook! Ook! Ook! Ook! Ook! Ook! Ook!Ook! Ook! Ook! 
                    Ook! Ook! Ook! Ook! Ook! Ook! Ook. Ook. Ook. Ook. Ook. Ook.Ook. Ook. Ook.
                    Ook! Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook. Ook.Ook! Ook. Ook? Ook. " hidden>
                </div>
                <div class="futurepanel__divider"></div>
                <div class="futureinput futureinput--text">
                  <form method="POST" action="{{url('/authflag/ch1')}}">
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
            </div>  
              <a href="{{ URL::asset('/attachments/manuscript.pdf') }}" download style="visibility:hidden">Dwo</a>
        </body>
</html>
