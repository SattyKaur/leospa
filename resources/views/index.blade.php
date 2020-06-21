<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Leospa</title>

    <link rel="icon" href="{{ URL::asset('/leospaIcon.png') }}" type="image/x-icon"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rufina&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resources/sass/app.scss">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">


</head>
<body>
<img class="backgroundImage" src="leospaBackgroundImage.png" alt="Background Image">

<!--NAV / INTRO-->
<div class="intro">
    <div class="navBar">
        <div>
            <img class="w-16 h-14 m-auto" src="leospaIcon.png" alt="Leospa Icon">
            <h1 class="text-3xl tracking-wider font-sans">Leospa</h1>
        </div>
        <div class="links ml-8 xs:hidden xl:flex">
            <div class="m-8">HOME</div>
            <div class="m-8">ABOUT</div>
            <div class="m-8">FEATURE</div>
            <div class="m-8">SERVICE</div>
            <div class="m-8">CONTACT</div>
        </div>
    </div>
    <div class="links mt-6 xs:flex xl:hidden">
        <div class="md:mr-10 xs:mr-4">HOME</div>
        <div class="md:mr-10 xs:mr-4">ABOUT</div>
        <div class="md:mr-10 xs:mr-4">FEATURE</div>
        <div class="md:mr-10 xs:mr-4">SERVICE</div>
        <div class="md:mr-10 xs:mr-4">CONTACT</div>
    </div>
    <div class="mt-48">
        <h3 class="tracking-widest text-coral font-sans">SPA & BEAUTY CENTER</h3>
        <h1 style="font-size: calc(20px + 2.5vw)" class="font-sans font-bold">Beauty and success <br>starts here.</h1>
        <p class="mt-3 mb-10 font-serif text-darkGrey text-sm">Together creeping heaven upon third dominion be upon won't
            darkness rule <br>
            behold it created good saw after she'd Out set living.</p>
        <button class="px-3 pb-3 pt-1 bg-coral font-serif text-white text-xs hover:bg-darkCoral cursor-pointer md:float-left xs:block">
            RESERVE NOW <span class="material-icons transform translate-y-2 pl-2">arrow_forward</span>
        </button>
        <div class="playButton mx-6 md:float-left md:mt-0 xs:mt-5 xs:inline-block">
            <span class="material-icons play">arrow_right</span>
        </div>
        <p class="md:p-3 font-serif text-darkGrey text-sm xs:p-0">Watch our story</p>
    </div>
</div>


<!--ABOUT-->
<div class="about">
    <img class="w-22 h-20 m-auto" src="leospaIcon.png" alt="leospa Icon">
    <h4 class="font-serif text-grey mt-5 tracking-widest">ABOUT OUR SPA CENTER</h4>
    <h1 class="font-sans md:text-4xl mt-5 xs:text-3xl">Come and you will be inspired!</h1>
    <p class="font-serif text-sm text-grey mt-6 leading-loose">It's the end of summer the sweltering heat makes human
        sweat in the night and makes the plants and trees wilt even in the moonlit <br>
        nights. The eastern wind breeze brings and eerie feeling, that the monsoon clouds are soon coming, there is a
        strange silence in the <br>
        ears, the sky gets darker and darker.</p>
    <button class="px-8 py-2 rounded-full text-xs font-serif text-white mt-8 bg-coral hover:bg-darkCoral cursor-pointer">
        READ MORE
    </button>
</div>


<!--TREATMENTS-->
<div class="treatments">
    <div class="bg-lightGrey mr-1 gridItem"></div>
    <div class="bg-coral mx-1 flex justify-center items-center">
        <div>
            <img class="m-auto pb-2 xl:w-16 xl:h-16 xs:w-8 xl:h-8" src="herbCup.png" alt="Herb Cup Icon">
            <p class="pt-2 font-sans text-white text-base text-center xl:text-2xl xs:text-xs">Body Treatment</p>
        </div>
    </div>
    <div class="bg-lightGrey mx-1 gridItem"></div>
    <div class="bg-lightGrey ml-1 gridItem"></div>
</div>


<!--POPULAR PROCEDURE-->
<div class="popularProcedures">
    <h3 class="font-sans text-center text-4xl">Popular Procedures</h3>
    <p class="font-serif text-center text-sm text-grey mt-6 leading-loose mx-5">To doesn't his appear replenish together
        called he of mad place won't wherein blessed second every <br>
        wherein were meat kind wherein and martcin</p>
    <div class="cardContainer">
        <div class="card border-2 border-lightGrey mx-4">
            <div class="bg-grey cardImg"></div>
            <h2 class="font-sans text-center text-3xl pt-3">Massage Therapy</h2>
            <p class="font-serif text-center p-1 text-grey text-xs leading-loose">Living winged said you
                darkness you're divide <br> gathered and bring one seasons face great dr <br>
                Waters firmament place which.</p>
            <button
                class="block px-6 py-2 my-4 mx-auto rounded-full text-xs font-serif text-white bg-darkGrey hover:bg-grey cursor-pointer">
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
                class="block px-6 py-2 my-4 mx-auto rounded-full text-xs font-serif text-white bg-coral hover:bg-darkCoral cursor-pointer">
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
                class="block px-6 py-2 my-4 mx-auto rounded-full text-xs font-serif text-white bg-darkGrey hover:bg-grey cursor-pointer">
                READ MORE
            </button>
        </div>
    </div>
</div>


<!--TESTIMONIALS-->
<div class="carousel">
    <div class="testimonial text-center">
        <img class="mx-auto py-24" src="quote.png" alt="Quote Icon">
        <p class="font-sans leading-loose xs:px-8">First I beast be fruitful open you tree all Won't can't likeness and
            you're have
            whale creature seed to two grass life <br>
            blessed you meat shall you winged under from their there he That you're one called gather make much red <br>
            wherein set fourth green bearing fifth replenish given she had.</p>
        <img class="mx-auto pt-10" src="profilePic.png" alt="Profile Photo">
        <h2 class="pt-4 pb-8 text-2xl">Satty Kaur, <small class="font-serif">Executive</small></h2>
    </div>
    <div class="testimonial text-center">
        <img class="mx-auto py-24" src="quote.png" alt="Quote Icon">
        <p class="font-sans leading-loose xs:px-8">First I beast be fruitful open you tree all Won't can't likeness and
            you're have
            whale creature seed to two grass life <br>
            blessed you meat shall you winged under from their there he That you're one called gather make much red <br>
            wherein set fourth green bearing fifth replenish given she had.</p>
        <img class="mx-auto pt-10" src="profilePic.png" alt="Profile Photo">
        <h2 class="pt-4 pb-8 text-2xl">Satty Kaur, <small class="font-serif">Executive</small></h2>

    </div>
    <div class="testimonial text-center">
        <img class="mx-auto py-24" src="quote.png" alt="Quote Icon">
        <p class="font-sans leading-loose xs:px-8">First I beast be fruitful open you tree all Won't can't likeness and
            you're have
            whale creature seed to two grass life <br>
            blessed you meat shall you winged under from their there he That you're one called gather make much red <br>
            wherein set fourth green bearing fifth replenish given she had.</p>
        <img class="mx-auto pt-10" src="profilePic.png" alt="Profile Photo">
        <h2 class="pt-4 pb-8 text-2xl">Satty Kaur, <small class="font-serif">Executive</small></h2>

    </div>
    <div class="testimonial text-center">
        <img class="mx-auto py-24" src="quote.png" alt="Quote Icon">
        <p class="font-sans leading-loose xs:px-8">First I beast be fruitful open you tree all Won't can't likeness and
            you're have
            whale creature seed to two grass life <br>
            blessed you meat shall you winged under from their there he That you're one called gather make much red <br>
            wherein set fourth green bearing fifth replenish given she had.</p>
        <img class="mx-auto pt-10" src="profilePic.png" alt="Profile Photo">
        <h2 class="pt-4 pb-8 text-2xl">Satty Kaur, <small class="font-serif">Executive</small></h2>
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
            <div class="teamDetail bg-white p-8 shadow-xl">
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
    <div class="greyDiv bg-grey"></div>
    <div class="formDiv bg-lightPink">
        <form class="p-6 form">
            <div class="m-3 sm:flex py-4">
                <input
                    class="border-b border-b-2 bg-lightPink text-grey
                    font-serif text-sm mr-3 py-1 px-2 xs:mb-10 sm:mb-0 focus:outline-none inputField"
                    type="text" placeholder="NAME" aria-label="Name">
                <input
                    class="border-b border-b-2 bg-lightPink text-grey
                    font-serif text-sm mr-3 py-1 px-2 focus:outline-none inputField"
                    type="text" placeholder="EMAIL" aria-label="Email">
            </div>
            <div class="m-3 sm:flex py-4">
                <select
                    class="border-b border-b-2 bg-lightPink text-grey
                    font-serif text-sm mr-3 py-1 px-2 xs:mb-10 sm:mb-0 focus:outline-none inputField"
                    type="text" aria-label="Service">
                    <option>SELECT SERVICE</option>
                    <option>Thai Massage</option>
                    <option>Executive Reflexology</option>
                    <option>Beauty Care</option>
                </select>
                <input
                    class="border-b border-b-2 bg-lightPink text-grey
                    font-serif text-sm mr-3 py-1 px-2 focus:outline-none inputField"
                    type="text" placeholder="PHONE NUMBER" aria-label="Phone Number">
            </div>
            <div class="m-3 sm:flex py-4">
                <input
                    class="border-b border-b-2 bg-lightPink text-grey
                    font-serif text-sm mr-3 py-1 px-2 xs:mb-10 sm:mb-0 focus:outline-none inputField"
                    type="date" aria-label="Date">
                <input
                    class="border-b border-b-2 bg-lightPink text-grey
                    font-serif text-sm mr-3 py-1 px-2 focus:outline-none inputField"
                    type="time" aria-label="Time">
            </div>
            <div class="m-3 sm:flex py-10">
                <input
                    class="border-b border-b-2 bg-lightPink text-grey
                    font-serif text-sm mr-3 py-1 px-2 focus:outline-none inputField"
                    type="text" placeholder="YOUR NOTES" aria-label="Notes">
            </div>
        </form>
        <button
            class="my-6 px-6 py-2 ml-8 rounded-full text-xs font-serif text-white bg-coral hover:bg-darkCoral cursor-pointer">
            Make an Appointment
        </button>
    </div>
</div>


<!--BLOG-->
<div class="popularProcedures">
    <h3 class="font-sans text-center text-4xl">Latest From Blog</h3>
    <p class="font-serif text-center text-sm text-grey mt-6 leading-loose">To doesn't his appear replenish together
        called he of mad place won't wherein blessed second every <br>
        wherein were meat kind wherein and martcin</p>
    <div class="cardContainer">
        <div class="card border-2 border-lightGrey mx-4">
            <div class="bg-grey cardImg"></div>
            <p class="font-serif text-center p-1 text-grey text-xs leading-loose">
                RELAXATION | JULY 03, 2019</p>
            <h2 class="font-sans text-center text-2xl pt-3">Had seed herb grass mids</h2>
            <p class="smallText font-serif text-center p-1 text-grey text-xs leading-loose">She'd yielding seas green
                appear unto worne seas <br> field most come mede do bad</p>
            <button
                class="block px-6 py-2 my-4 mx-auto rounded-full text-xs font-serif text-white bg-darkGrey hover:bg-grey cursor-pointer">
                READ MORE
            </button>
        </div>
        <div class="card mx-4 shadow-2xl">
            <div class="bg-grey cardImg"></div>
            <p class="font-serif text-center p-1 text-grey text-xs leading-loose">
                RELAXATION | JULY 03, 2019</p>
            <h2 class="font-sans text-center text-2xl pt-3">Divid image unto creeping</h2>
            <p class="smallText font-serif text-center p-1 text-grey text-xs leading-loose">She'd yielding seas green
                appear unto worne seas <br> field most come mede do bad</p>
            <button
                class="block px-6 py-2 my-4 mx-auto rounded-full text-xs font-serif text-white bg-coral hover:bg-darkCoral cursor-pointer">
                READ MORE
            </button>
        </div>
        <div class="card border-2 border-lightGrey mx-4">
            <div class="bg-grey cardImg"></div>
            <p class="font-serif text-center p-1 text-grey text-xs leading-loose">
                RELAXATION | JULY 03, 2019</p>
            <h2 class="font-sans text-center text-2xl pt-3">Had seed herb grass mids</h2>
            <p class="smallText font-serif text-center p-1 text-grey text-xs leading-loose">She'd yielding seas green
                appear unto worne seas <br> field most come mede do bad</p>
            <button
                class="block px-6 py-2 my-4 mx-auto rounded-full text-xs font-serif text-white bg-darkGrey hover:bg-grey cursor-pointer">
                READ MORE
            </button>
        </div>
    </div>
</div>


<!--CONTACT-->
<div class="contact">
    <h1 class="text-center font-sans text-4xl">Get In Touch</h1>
    <p class="font-serif text-center text-sm text-grey mt-6 leading-loose">To doesn't his appear replenish together
        called he of mad place won't wherein blessed second every <br>
        wherein were meat kind wherein and martcin</p>

    <div class="contactGrid  font-serif text-sm text-grey md:float-left xs:float-none">
        <div class="contactGridItem">
            <span class="material-icons text-white bg-coral p-4 rounded-full float-left">room</span>
            <div class="float-left pl-6 pt-2">
                <p>848 E 28th ST, BROOKLYN</p>
                <P>NEW YORK, USA</P>
            </div>
        </div>
        <div class="contactGridItem">
            <span class="material-icons text-white bg-coral p-4 rounded-full float-left">email</span>
            <div class="float-left pl-6 pt-2">
                <p>EXAMPLE@LEOSPA.COM</p>
                <p>EXAMPLE@LEOSPA.COM</p>
            </div>
        </div>

        <div class="contactGridItem">
            <span class="material-icons text-white bg-coral p-4 rounded-full float-left">phone_android</span>
            <div class="float-left pl-6 pt-2">
                <p>+02 365 2365 3265 (02)</p>
                <p>+01 365 2365 3265 (04)</p>
            </div>
        </div>
    </div>

    <div class="contactForm">
        <input
            class="border border-2 border-lightGrey text-grey font-serif text-sm mr-3 py-3 px-2 my-5 focus:outline-none"
            type="text" placeholder="NAME" aria-label="Name">
        <input
            class="border border-2 border-lightGrey text-grey font-serif text-sm mr-3 py-3 px-2 my-5 focus:outline-none"
            type="text" placeholder="EMAIL" aria-label="Email">

        <input
            class="border border-2 border-lightGrey text-grey font-serif text-sm mr-3 pt-3 pb-20 px-2 my-5 focus:outline-none"
            type="text" placeholder="WRITE A COMMENT" aria-label="Comments">

        <button
            class="my-4 px-6 py-2 rounded-full text-xs font-serif text-white bg-coral hover:bg-darkCoral cursor-pointer">
            SUBMIT NOW
        </button>

    </div>

</div>


<!--FOOTER-->
<div class="bannerBottom bg-lightPink text-center pt-32">

    <img class="w-18 h-14 m-auto" src="leospaIcon.png" alt="Leospa Icon">
    <h1 class="text-3xl tracking-wider font-sans">Leospa</h1>

    <div class="banner-links font-serif">
        <div>HOME</div>
        <div>ABOUT</div>
        <div>FEATURE</div>
        <div>SERVICE</div>
        <div>CONTACT</div>
    </div>

    <div class="banner-icons">
        <img src="facebook-a.png" class="contactIcons cursor-pointer"
             onmouseover="this.src='facebook-b.png'"
             onmouseout="this.src='facebook-a.png'"> |
        <img src="twitter-b.png" class="contactIcons cursor-pointer"
             onmouseover="this.src='twitter-a.png'"
             onmouseout="this.src='twitter-b.png'"> |
        <img src="instagram-a.png" class="contactIcons cursor-pointer"
             onmouseover="this.src='instagram-b.png'"
             onmouseout="this.src='instagram-a.png'"> |
        <img src="vimeo-a.png" class="contactIcons cursor-pointer"
             onmouseover="this.src='vimeo-b.png'"
             onmouseout="this.src='vimeo-a.png'">
    </div>
</div>



<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="{{ asset('js/index.js') }}" type="text/javascript"></script>


</body>
</html>




