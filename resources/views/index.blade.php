<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Leospa</title>

        <link rel="icon" href="{{ URL::asset('/leospaIcon.png') }}" type="image/x-icon"/>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">

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
                <h1 class="text-3xl spacing font-sans">Leospa</h1>
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
            <h3 class="spacing text-coral font-sans font-bold">SPA & BEAUTY CENTER</h3>
            <h1 class="font-sans text-5xl">Beauty and success <br>starts here.</h1>
            <p class="des font-serif text-darkGrey text-sm">Together creeping heaven upon third dominion be upon won't darkness rule <br>
            behold it created good saw after she'd Out set living.</p>


                <button class="px-8 py-3 bg-coral font-serif text-white text-xs hover:bg-darkCoral cursor-pointer" style="float: left;"
                >RESERVE NOW  &#8594;</button>

                <div class="playButton"><span class="material-icons play">arrow_right</span></div>

                <p class="p-3 font-serif text-darkGrey text-sm">Watch our story</p>
        </div>

        <div class="about">
            <img class="logo" src="leospaIcon.png" alt="leospa Icon">
            <h4 class="font-serif text-grey mt-5 spacing">ABOUT OUR SPA CENTER</h4>
            <h1 class="font-sans text-4xl mt-5">Come and you will be inspired!</h1>
            <p class="font-serif text-sm text-grey mt-6 leading-loose">It's the end of summer the sweltering heat makes human sweat in the night and makes the plants and trees wilt even in the moonlit <br>
            nights. The eastern wind breeze brings and eerie feeling, that the monsoon clouds are soon coming, there is a strange silence in the <br>
            ears, the sky gets darker and darker.</p>

            <button class="px-8 py-2 rounded-full text-xs font-serif text-white mt-8 bg-coral hover:bg-darkCoral cursor-pointer">
                READ MORE</button>

        </div>
    </div>

    <div class="treatments">
        <div class="bg-lightGrey mr-1 gridItem"></div>
        <div class="bg-coral mx-1 verticaCenter">
                <div>
                    <img class="icon pb-2" src="herbCup.png" alt="Herb Cup Icon">
                    <p class="pt-2 font-sans text-white text-base text-center">Body Treatment</p>
                </div>
        </div>
        <div class="bg-lightGrey mx-1 gridItem"></div>
        <div class="bg-lightGrey ml-1 gridItem"></div>
    </div>





    </body>
</html>
