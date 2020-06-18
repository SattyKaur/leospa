<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Leospa</title>

        <link rel="icon" href="{{ URL::asset('/leospaIcon.png') }}" type="image/x-icon"/>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="resources/sass/app.scss">

        <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rufina&display=swap" rel="stylesheet">


    </head>
    <body>
        <img class="backgroundImage" src="leospaBackgroundImage.png" alt="Background Image">

    <div class="content">

        <div class="navBar">
            <div>
                <img class="icon" src="leospaIcon.png" alt="Leospa Icon">
                <h1 class="brand font-sans">Leospa</h1>
            </div>
            <div class="links font-serif">
                <div>HOME</div>
                <div>ABOUT</div>
                <div>FEATURE</div>
                <div>SERVICE</div>
                <div>CONTACT</div>
            </div>
        </div>


        <div style="margin-top: 150px">
            <h3 class="rufina text-coral font-sans">SPA & BEAUTY CENTER</h3>
            <h1 class="font-sans text-5xl">Beauty and success <br>starts here.</h1>
            <p class="des font-serif text-darkGrey text-sm">Together creeping heaven upon third dominion be upon won't darkness rule <br>
            behold it created good saw after she'd Out set living.</p>

            <div style="display: inline-block">
                <div class="p-3 bg-coral font-serif text-white text-xs" >RESERVE NOW &#8594;</div>
            </div>

        </div>







    </div>







    </body>
</html>
