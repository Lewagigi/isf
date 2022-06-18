<html>
<head>
    <title>
        Web Radio
    </title>
    <style>
        header {
            grid-column: 1 / 3;
            z-index: 1;
        }

        article{
            position: relative;
            top :-20px ;
            height: 6px;
            margin: 0px;
            grid-column: 1/3;
        }

        section {
            position: relative;
            margin-top: -1200px ;
            right: 100px;
            background-color: white;
            height: 20px;
            width: 950px;
            grid-column: 2/3;


        }


        footer {
            position:relative;
            top:1900px;
            width: auto;
            height: 122px ;
            background-color: #8F7AB5;
            grid-column: 1/3;
        }

        #main {
            display: grid;
            grid-template-rows: 100px auto 50px 50px ;
            grid-template-columns:minmax(200px,3fr) 9fr;
            padding: 0px;
            margin: 0px;
            height: 1500px; /* Used in this example to enable scrolling */
        }



        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0px;
        }


        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        .navbar {
            overflow: hidden;
            background-color: #8F7AB5;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .subnav {
            float: left;
            overflow: hidden;
        }

        .subnav .subnavbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .subnav:hover .subnavbtn {
            background-color: #8F7AB5;
        }

        .subnav-content {
            display: none;
            position: absolute;
            left: 0;
            background-color: #8F7AB5;
            width: 100%;
            z-index: 1;
        }

        .subnav-content a {
            float: left;
            color: white;
            text-decoration: none;
        }

        .subnav-content a:hover {
            background-color: #eee;
            color: black;
        }

        .subnav:hover .subnav-content {
            display: block;
        }



        .flex-container {
            position: relative;
            top: 70px;

            display: flex;
            background-color: #8F7AB5;



        }

        .flex-container > div {
            background-color: #f1f1f1;
            margin: 30px;
            padding:50px;
            font-size: 30px;
            cursor:hand;
        }






        .flex-container {



            display: flex;
            background-color: #8F7AB5;



        }

        .flex-container > div {
            background-color: #f1f1f1;
            margin: 20px;
            padding:40px;
            font-size: 30px;
            cursor:hand;
        }

        /*a completer pour plus de themes*/

        .grid-container {
            position :relative ;
            top: 190px;
            left: -976px;

            display: grid;
            grid-template-columns: auto auto auto auto;
            grid-gap: 10px;
            margin-left: -30px;
            background-color:red;
            padding: 100px;
        }

        .grid-container > div {
            position:relative ;
            left: -20px;

            width: 199px;
            height: 90px;
            background-color: #8F7AB5;
            border: 1px solid black;
            text-align: center;
            font-size: 30px;
        }



        div.scrollmenu {
            background-color: #8F7AB5;
            overflow: auto;
            white-space: nowrap;
            position: relative;
            top :50px;
        }

        div.scrollmenu a {
            position: relative;
            left: 190px;
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }





        * {box-sizing: border-box;}

        .img-comp-container {
            position: relative;
            top: 50px ;
            height: 200px; /*should be the same height as the images*/
        }

        .img-comp-img {
            position: absolute;
            width: auto;
            height: auto;
            overflow:hidden;
        }

        .img-comp-img img {
            display:block;
            vertical-align:middle;
        }

        .img-comp-slider {
            position: absolute;
            z-index:9;
            cursor: ew-resize;
            /*set the appearance of the slider:*/
            width: 40px;
            height: 40px;
            background-color: #2196F3;
            opacity: 0.7;
            border-radius: 50%;
        }




        .styled-right {
            position: relative;
            top: -50px;
            right: -390px;
            border: 0;

            cursor: hand;
            line-height: 2.5;
            padding: 0 20px;
            font-size: 1rem;
            text-align: center;
            color: #fff;
            text-shadow: 1px 1px 1px #000;
            border-radius: 10px;
            background-color: white;
            background-image: linear-gradient(to top left,
            rgba(0, 0, 0, .2),
            rgba(0, 0, 0, .2) 30%,
            rgba(0, 0, 0, 0));
            box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
            inset -2px -2px 3px rgba(0, 0, 0, .6);
        }

        .styled-rigt:hover {
            background-color: white;
        }

        .styled-right:active {
            box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
            inset 2px 2px 3px rgba(0, 0, 0, .6);
        }




        .styled-left {
            position: relative;
            top: -50px;
            left: 390px;

            border: 0;
            line-height: 2.5;
            padding: 0 20px;
            font-size: 1rem;
            text-align: center;
            color: #fff;
            text-shadow: 1px 1px 1px #000;
            border-radius: 10px;
            background-color: white ;
            background-image: linear-gradient(to top left,
            rgba(0, 0, 0, .2),
            rgba(0, 0, 0, .2) 30%,
            rgba(0, 0, 0, 0));
            box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
            inset -2px -2px 3px rgba(0, 0, 0, .6);
        }

        .styled-left:hover {
            background-color: white ;

        }

        .styled-left:active {
            box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
            inset 2px 2px 3px rgba(0, 0, 0, .6);
        }


        table,

        td {

            border: 1px solid #8F7AB5 ;


        }

        thead,
        tfoot {
            background-color:#8F7AB5;
            color: white;

        }

        th{
            cursor: hand;
        }


        .fit-picture {
            position: relative;
            width: 110px;
        }






        .fa {
            position: relative;
            left: 1120px;
            padding: 10px;

            width: 30px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 20;
        }

        .fa-facebook {
            background-color: #8F7AB5;
            color: white;
        }

        .fa-twitter {
            background-color: #8F7AB5;
            color: white;
        }

        .fa-google {
            background: #dd4b39;
            color: white;
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }

        .fa-youtube {
            background-color: #8F7AB5;
            color: white;
        }

        .fa-instagram {
            background-color: #8F7AB5;
            color: white;
        }

        .fa-pinterest {
            background-color: #8F7AB5;
            color: white;
        }

        .fa-snapchat-ghost {
            background: #fffc00;
            color: white;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        }

        .fa-skype {
            background: #00aff0;
            color: white;
        }

        .fa-android {
            background: #a4c639;
            color: white;
        }

        .fa-dribbble {
            background: #ea4c89;
            color: white;
        }

        .fa-vimeo {
            background: #45bbff;
            color: white;
        }

        .fa-tumblr {
            background: #2c4762;
            color: white;
        }

        .fa-vine {
            background: #00b489;
            color: white;
        }

        .fa-foursquare {
            background: #45bbff;
            color: white;
        }

        .fa-stumbleupon {
            background: #eb4924;
            color: white;
        }

        .fa-flickr {
            background: #f40083;
            color: white;
        }

        .fa-yahoo {
            background: #430297;
            color: white;
        }

        .fa-soundcloud {
            background: #ff5500;
            color: white;
        }

        .fa-reddit {
            background: #ff5700;
            color: white;
        }

        .fa-rss {
            background: #ff6600;
            color: white;
        }





        .button {
            position: relative;
            left: 320px;
            top: -20px;
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #8F7AB5;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px white;
        }

        .button:hover {background-color: white}

        .button:active {
            background-color: white;
            box-shadow: 0 5px #8F7AB5;
            transform: translateY(4px);
        }






        .vertical-menu {
            position :relative ;
            top :130px ;
            left :850px ;
            width: 200px;
        }

        .vertical-menu a {
            background-color: #eee;
            color: black;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: #ccc;
        }

        .vertical-menu a.active {
            background-color: #8F7AB5;
            color: white;
        }








    </style>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .bg-image {

            /* Full height */
            height: 1450%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }


        /* Position text in the middle of the page/image */
        .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            font-size: 80px;
            border: 10px solid #f1f1f1;
             position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 300px;
            padding: 20px;
            text-align: center;
        }
    </style>
    <style>
        .bas .haut{
            height:5px ;
            position:absolue ;
            right:0 ;
        }
        .fondu
        {
            margin-top:50px ;

            position:relative;
            height:15px ;

            top:-320px;
            left:195px;

        }
        .fondu img {
            transition:opacity 2s linear ;
        }
        .fondu img.haut:hover{
            opacity:0;

        }
    </style>

    <link href="toto.css" rel="stylesheet" integrity="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/mes-styles.css">
    <link rel="stylesheet" href="css/les-styles.css">


</head>
<body>



<div id="main">
    <header class="header">
        <nav class="navbar">

            <div class="navbar">
                <a href="{{route('register')}}">Créer un Compte</a>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>

                <div class="subnav">
                    <button class="subnavbtn"> <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="#company">Company</a>
                        <a href="#team">Team</a>
                        <a href="#careers">Careers</a>
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn"><a href="{{route('podcasts')}}">PodCasts </a><i class="fa fa-caret-down"></i></button>

                    <div class="subnav-content">
                        <a href="#bring">Arelier sur Les Finances</a>
                        <a href="#deliver">Deliver</a>
                        <a href="#package">Package</a>
                        <a href="#express">Express</a>
                    </div>
                </div>
                <div class="subnav">
                    <button class="subnavbtn">Menu <i class="fa fa-caret-down"></i></button>
                    <button class="subnavbtn"><a href="{{route('decouvjésus')}}">Découvrir Jésus</a> <i class="fa fa-caret-down"></i></button>
                    <button class="subnavbtn"><a href="{{route('nouveaudepart')}}">Nouveau Départ</a> <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="https://impactcentrechretien.com/">ICC</a>
                        <a href="https://impactsansfrontieres.com/">ISF</a>
                        <a href="{{route('devenirpartenaire')}}">Devenir Partenaire</a>
                        <a href="https://impactsansfrontieres.com/faire-un-don/">Faire Un Don</a>
                        <a href="{{route('notrevision')}}">Notre Vision</a>
                    </div>
                </div>
                <a href="{{route('login')}}">Se connecter</a>
            </div>

            <div style="padding:0 16px">

            </div>



        </nav>



    </header>

    <article class="article" id="un">

        <img class="image" src="/img/cropped-FavIcon.png" width="99" height="196" float="left"
             alt="">

    </article>


    <section class="section">

        <style>
            * {
                box-sizing: border-box;
            }

            body {

                font-family: Arial;
                font-size: 17px;
            }

            .container {
                position: relative;
                top:200px;

                max-width: 800px;
                margin: 0 auto;
            }

            .container img {
                vertical-align: middle;
                position: relative;
                top:290px;
                height: 400px;
            }

            .container .content {

                position: relative;
                bottom: 0;
                background: rgb(0, 0, 0); /* Fallback color */

                background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                color: #f1f1f1;
                width: 100%;
                padding: 20px;
            }
        </style>



        <iframe  src="https://player.radioking.io/radio-impact-sans-frontieres-1/?c=%238F7AB5&c2=%23ffffff&f=h&i=1&p=1&s=0&li=0&popup=1&plc=0&h=145&l=430&v=2" style="border-radius: 5px; width: 430px; height: 145px; position:relative ; left :280px ; top:280px; z-index: 3;" frameBorder="0" ></iframe><script type="text/javascript" src="https://player.radioking.io/scripts/iframe.bundle.js"></script>
        <a href="" download>

        </a>


















        <div class="content">
            <h1></h1>
            <button class="button"><a href="">Acceptez Jésus !</a></button>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/image.png" class="" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/image (3).png" class="" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



<body>





        <section id="main" role="main">
            <h2 class="sread"></h2>



        </section>

</body>















    </section>



</body>
<footer></footer>
</div>


</html>
