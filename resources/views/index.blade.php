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

<!--BANNER-->
<div class="banner">

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
        <p class="des font-serif text-darkGrey text-sm">Together creeping heaven upon third dominion be upon won't
            darkness rule <br>
            behold it created good saw after she'd Out set living.</p>


        <button class="px-8 py-3 bg-coral font-serif text-white text-xs hover:bg-darkCoral cursor-pointer"
                style="float: left;"
        >RESERVE NOW &#8594;
        </button>

        <div class="playButton"><span class="material-icons play">arrow_right</span></div>

        <p class="p-3 font-serif text-darkGrey text-sm">Watch our story</p>
    </div>


</div>


<!--ABOUT-->
<div class="about">
    <img class="logo" src="leospaIcon.png" alt="leospa Icon">
    <h4 class="font-serif text-grey mt-5 spacing">ABOUT OUR SPA CENTER</h4>
    <h1 class="font-sans text-4xl mt-5">Come and you will be inspired!</h1>
    <p class="font-serif text-sm text-grey mt-6 leading-loose">It's the end of summer the sweltering heat makes human
        sweat in the night and makes the plants and trees wilt even in the moonlit <br>
        nights. The eastern wind breeze brings and eerie feeling, that the monsoon clouds are soon coming, there is a
        strange silence in the <br>
        ears, the sky gets darker and darker.</p>

    <button
        class="px-8 py-2 rounded-full text-xs font-serif text-white mt-8 bg-coral hover:bg-darkCoral cursor-pointer">
        READ MORE
    </button>

</div>


<!--TREATMENTS-->
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


<!--POPULAR PROCEDURE-->
<div class="popularProcedures">
    <h3 class="font-sans text-center text-4xl">Popular Procedures</h3>
    <p class="font-serif text-center text-sm text-grey mt-6 leading-loose">To doesn't his appear replenish together
        called he of mad place won't wherein blessed second every <br>
        wherein were meat kind wherein and martcin</p>
    <div class="cardContainer">
        <div class="card border-2 border-lightGrey mx-4">
            <div class="bg-grey cardImg"></div>
            <h2 class="font-sans text-center text-3xl pt-3">Massage Therapy</h2>
            <p class="smallText font-serif text-center p-1 text-grey text-xs leading-loose">Living winged said you
                darkness you're divide <br> gathered and bring one seasons face great dr <br>
                Waters firmament place which.</p>
            <button
                class="cardButton px-6 py-2 rounded-full text-xs font-serif text-white bg-darkGrey hover:bg-grey cursor-pointer">
                READ MORE
            </button>
        </div>
        <div class="card mx-4 shadow-2xl">
            <div class="bg-grey cardImg"></div>
            <h2 class="font-sans text-center text-3xl pt-3">Beauty Care</h2>
            <p class="smallText font-serif text-center p-1 text-grey text-xs leading-loose">Living winged said you
                darkness you're divide <br> gathered and bring one seasons face great dr <br>
                Waters firmament place which.</p>
            <button
                class="cardButton px-6 py-2 rounded-full text-xs font-serif text-white bg-coral hover:bg-darkCoral cursor-pointer">
                READ MORE
            </button>
        </div>
        <div class="card border-2 border-lightGrey mx-4">
            <div class="bg-grey cardImg"></div>
            <h2 class="font-sans text-center text-3xl pt-3">Executive Reflexology</h2>
            <p class="smallText font-serif text-center p-1 text-grey text-xs leading-loose">Living winged said you
                darkness you're divide <br> gathered and bring one seasons face great dr <br>
                Waters firmament place which.</p>
            <button
                class="cardButton px-6 py-2 rounded-full text-xs font-serif text-white bg-darkGrey hover:bg-grey cursor-pointer">
                READ MORE
            </button>
        </div>
    </div>
</div>


<!--TESTIMONIALS-->
<div class="testimonial text-center">
    <img class="mx-auto py-24" src="quote.png" alt="Quote Icon">
    <p class="font-sans leading-loose">First I beast be fruitful open you tree all Won't can't likeness and you're have
        whale creature seed to two grass life <br>
        blessed you meat shall you winged under from their there he That you're one called gather make much red <br>
        wherein set fourth green bearing fifth replenish given she had.</p>
    <img class="mx-auto pt-10" src="profilePic.png" alt="Profile Photo">
    <h2 class="pt-4 pb-8 text-2xl">Satty Kaur, <small class="font-serif">Executive</small></h2>
    <div class="py-12">
        <span class="dot bg-lightCoral cursor-pointer"></span>
        <span class="dot bg-coral"></span>
        <span class="dot bg-lightCoral cursor-pointer"></span>
        <span class="dot bg-lightCoral cursor-pointer"></span>
    </div>
</div>


<!--TEAM-->
<div class="team">
    <h3 class="font-sans text-center text-4xl">Experienced Team</h3>
    <p class="font-serif text-center text-sm text-grey mt-6 leading-loose">To does'nt his appear replenish called he of
        mad place won't wherein blessed second every <br>
        wherein were meat kind wherein and martcin</p>

    <div class="cardContainer">
        <div class="teamCard bg-paleGrey border-2 border-lightGrey mx-4">
            <div class="teamDetail bg-white p-8">
                <h2 class="text-center font-sans">Joseph Austin</h2>
                <p class="text-center font-serif py-3 text-sm text-grey">Thai Massage</p>
            </div>
        </div>
        <div class="teamCard bg-paleGrey border-2 border-lightGrey mx-4">
            <div class="selectedDetail bg-white p-8 shadow-xl">
                <h2 class="text-center font-sans">David Hannan</h2>
                <p class="text-center font-serif py-3 text-sm text-grey">Thai Massage</p>
                <div class="flexIcons">
                    <img src="facebook.png" class="contactIcons cursor-pointer"
                         onmouseover="this.src='facebook-c.png'"
                         onmouseout="this.src='facebook.png'">
                    <img src="twitter.png" class="contactIcons cursor-pointer"
                         onmouseover="this.src='twitter-c.png'"
                         onmouseout="this.src='twitter.png'">
                    <img src="google-plus.png" class="contactIcons cursor-pointer"
                         onmouseover="this.src='google-plus-c.png'"
                         onmouseout="this.src='google-plus.png'">
                    <img src="instagram.png" class="contactIcons cursor-pointer"
                         onmouseover="this.src='instagram-c.png'"
                         onmouseout="this.src='instagram.png'">
                </div>
            </div>
        </div>
        <div class="teamCard bg-paleGrey border-2 border-lightGrey mx-4">
            <div class="teamDetail bg-white p-8">
                <h2 class="text-center font-sans">Cheryl Harris</h2>
                <p class="text-center font-serif py-3 text-sm text-grey">Thai Massage</p>
            </div>
        </div>
    </div>

</div>


<!--APPT FORM-->
<div class="apptForm">
    <div class="formDiv bg-grey"></div>
    <div class="form bg-lightPink">
        <form class="p-6 form">
            <div class="m-3 flex py-4">
                <input
                    class="w-screen border-b border-b-2 bg-lightPink text-grey font-serif text-sm mr-3 py-1 px-2 focus:outline-none"
                    type="text" placeholder="NAME" aria-label="Name">
                <input
                    class="w-screen border-b border-b-2 bg-lightPink text-grey font-serif text-sm mr-3 py-1 px-2 focus:outline-none"
                    type="text" placeholder="EMAIL" aria-label="Email">
            </div>
            <div class="m-3 flex py-4">
                <select
                    class="w-screen border-b border-b-2 bg-lightPink text-grey font-serif text-sm mr-3 py-1 px-2 focus:outline-none"
                    type="text" aria-label="Service">
                    <option>SELECT SERVICE</option>
                    <option>Thai Massage</option>
                    <option>Executive Reflexology</option>
                    <option>Beauty Care</option>
                </select>
                <input
                    class="w-screen border-b border-b-2 bg-lightPink text-grey font-serif text-sm mr-3 py-1 px-2 focus:outline-none"
                    type="text" placeholder="PHONE NUMBER" aria-label="Phone Number">
            </div>
            <div class="m-3 flex py-4">
                <input
                    class="w-screen border-b border-b-2 bg-lightPink text-grey font-serif text-sm mr-3 py-1 px-2 focus:outline-none"
                    type="date" aria-label="Date">
                <input
                    class="w-screen border-b border-b-2 bg-lightPink text-grey font-serif text-sm mr-3 py-1 px-2 focus:outline-none"
                    type="time" aria-label="Time">
            </div>
            <div class="m-3 flex py-10">
                <input
                    class="w-screen border-b border-b-2 bg-lightPink text-grey font-serif text-sm mr-3 py-1 px-2 focus:outline-none"
                    type="text" placeholder="YOUR NOTES" aria-label="Notes">
            </div>

            <button
                class="my-8 px-6 py-2 rounded-full text-xs font-serif text-white bg-coral hover:bg-darkCoral cursor-pointer">
                Make an Appointment
            </button>
        </form>
    </div>

</div>


</body>
</html>
