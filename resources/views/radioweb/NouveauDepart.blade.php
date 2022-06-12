
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
            top:900px;
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

        /*
        .navbar {
          overflow: hidden;
          background-color: #333;

        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        } */



        /*.navbar {
          overflow: hidden;
           background-color: #8F7AB5;
          position: fixed;
          top: 0;
          width: 100%;
        }

        .navbar a {
          float: left;
          display: block;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }*/

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
        /*
        .navbar a:hover {
          background: #ddd;
          color: black;
        } */

        /*
        * {
          box-sizing: border-box;
        }

        body {
          margin: 0;
          font-family: Arial;
          font-size: 17px;
        }

        #myVideo {
          position: fixed;
          right: 0;
          bottom: 0;
          min-width: 100%;
          min-height: 100%;
        }

        .content {
          position: fixed;
          bottom: 0;
          background: rgba(0, 0, 0, 0.5);
          color: #f1f1f1;
          width: 100%;
          padding: 20px;
        }

        #myBtn {
          width: 200px;
          font-size: 18px;
          padding: 10px;
          border: none;
          background: #000;
          color: #fff;
          cursor: pointer;
        }

        #myBtn:hover {
          background: #ddd;
          color: black;
        } */


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



        /* .styled {
            position: relative;
            top: -50px;
            left: 410px;

            border: 0;
            line-height: 2.5;
            padding: 0 20px;
            font-size: 1rem;
            text-align: center;
            color: #fff;
            text-shadow: 1px 1px 1px #000;
            border-radius: 10px;
            background-color: rgba(220, 0, 0, 1);
            background-image: linear-gradient(to top left,
                                              rgba(0, 0, 0, .2),
                                              rgba(0, 0, 0, .2) 30%,
                                              rgba(0, 0, 0, 0));
            box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                        inset -2px -2px 3px rgba(0, 0, 0, .6);
        }

        .styled:hover {
            background-color: rgba(255, 0, 0, 1);
        }

        .styled:active {
            box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                        inset 2px 2px 3px rgba(0, 0, 0, .6);
        } */



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





        /*
        .favorite {
            position: relative;
            top: 80px;
            right: 380px;

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

        .favorite:hover {
            background-color: white ;

        }

        .favorite:active {
            box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                        inset 2px 2px 3px rgba(0, 0, 0, .6);
        } */



        /*
        body, html {
          height: 100%;
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }

        * {
          box-sizing: border-box;
        }

        .bg-image {

          background-image: url("photographer.jpg");


          filter: blur(8px);
          -webkit-filter: blur(8px);


          height: 100%;


          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }


        .bg-text {
          background-color: rgb(0,0,0);
          background-color: rgba(0,0,0, 0.4);
          color: white;
          font-weight: bold;
          border: 3px solid #f1f1f1;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 2;
          width: 80%;
          padding: 20px;
          text-align: center;
        } */


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

        /* Images used */
        .img1 { background-image: url("{{asset('/app/public/avatars/uMco351mYffWWOWY7iaC7TrKqj5MxzRD57aDLW5l.jpg')}}"); }
        .img2 { background-image: url("https://radio.impactsansfrontieres.com/wp-content/uploads/2021/08/Back-player2.jpg"); }
        .img3 { background-image: url("https://radio.impactsansfrontieres.com/wp-content/uploads/2021/08/cropped-FavIcon.png"); }
        /*.img4 { background-image: url(""); }
        .img5 { background-image: url(""); }
        .img6 { background-image: url(""); }*/

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


    <!-- <script>
function initComparisons() {
  var x, i;
  /*find all elements with an "overlay" class:*/
  x = document.getElementsByClassName("img-comp-overlay");
  for (i = 0; i < x.length; i++) {
    /*once for each "overlay" element:
    pass the "overlay" element as a parameter when executing the compareImages function:*/
    compareImages(x[i]);
  }
  function compareImages(img) {
    var slider, img, clicked = 0, w, h;
    /*get the width and height of the img element*/
    w = img.offsetWidth;
    h = img.offsetHeight;
    /*set the width of the img element to 50%:*/
    img.style.width = (w / 2) + "px";
    /*create slider:*/
    slider = document.createElement("DIV");
    slider.setAttribute("class", "img-comp-slider");
    /*insert slider*/
    img.parentElement.insertBefore(slider, img);
    /*position the slider in the middle:*/
    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
    /*execute a function when the mouse button is pressed:*/
    slider.addEventListener("mousedown", slideReady);
    /*and another function when the mouse button is released:*/
    window.addEventListener("mouseup", slideFinish);
    /*or touched (for touch screens:*/
    slider.addEventListener("touchstart", slideReady);
    /*and released (for touch screens:*/
    window.addEventListener("touchend", slideFinish);
    function slideReady(e) {
      /*prevent any other actions that may occur when moving over the image:*/
      e.preventDefault();
      /*the slider is now clicked and ready to move:*/
      clicked = 1;
      /*execute a function when the slider is moved:*/
      window.addEventListener("mousemove", slideMove);
      window.addEventListener("touchmove", slideMove);
    }
    function slideFinish() {
      /*the slider is no longer clicked:*/
      clicked = 0;
    }
    function slideMove(e) {
      var pos;
      /*if the slider is no longer clicked, exit this function:*/
      if (clicked == 0) return false;
      /*get the cursor's x position:*/
      pos = getCursorPos(e)
      /*prevent the slider from being positioned outside the image:*/
      if (pos < 0) pos = 0;
      if (pos > w) pos = w;
      /*execute a function that will resize the overlay image according to the cursor:*/
      slide(pos);
    }
    function getCursorPos(e) {
      var a, x = 0;
      e = (e.changedTouches) ? e.changedTouches[0] : e;
      /*get the x positions of the image:*/
      a = img.getBoundingClientRect();
      /*calculate the cursor's x coordinate, relative to the image:*/
      x = e.pageX - a.left;
      /*consider any page scrolling:*/
      x = x - window.pageXOffset;
      return x;
    }
    function slide(x) {
      /*resize the image:*/
      img.style.width = x + "px";
      /*position the slider:*/
      slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
    }
  }
}
</script> -->
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


        <!-- <nav class="navbar">
          <a href="#home">Home</a>
       <a href="#news">News</a>
       <div class="dropdown">
         <button class="dropbtn">Dropdown
           <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
           <a href="#">Link 1</a>
           <a href="#">Link 2</a>
           <a href="#">Link 3</a>
         </div>
       </div>
        </nav> -->
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


        {{-- <a href="" download>
             <img src="/img/iStock-1145183163-min-460x307.jpg" alt="W3Schools" width="1000" height="742">
         </a>
         <a href="/img/" download>
             <img src="/img/cropped-FavIcon.png" alt="W3Schools" width="1000" height="742">
         </a>

         <a href="/img/" download>
             <img src="/img/image (5).png" alt="W3Schools" width="1000" height="742">
         </a>

         <a href="/img/" download>
             <img src="/img/image (6).png" alt="W3Schools" width="1000" height="742">
         </a>

         <a href="/img/" download>
             <img src="/img/evang-banner.jpg" alt="W3Schools" width="1000" height="742">
         </a>
   --}}

        <iframe  src="https://player.radioking.io/radio-impact-sans-frontieres-1/?c=%238F7AB5&c2=%23ffffff&f=h&i=1&p=1&s=0&li=0&popup=1&plc=0&h=145&l=430&v=2" style="border-radius: 5px; width: 430px; height: 145px; position:relative ; left :280px ; top:280px; z-index: 3;" frameBorder="0" ></iframe><script type="text/javascript" src="https://player.radioking.io/scripts/iframe.bundle.js"></script>
        <a href="" download>
            <img src="/img/Back-player-1536x320.jpg" alt="W3Schools" width="1000" height="742">
        </a>


        <div id="auCentre">

            <div class="fondu">

                <img class="haut" src="/img/cropped-FavIcon.png">
            </div>

        </div>











        <!-- <style>
    video {
      position: relative;
      top:290px;
      left: 50px;
      max-width: 200%;
      height: 399px;
    }
    </style> -->
        <!-- <video autoplay muted loop id="myVideo">
      <source src="rain.mp4" type="video/mp4">



    </video>  -->
        <!-- <video width="870" controls>
          <source src="mov_bbb.mp4" type="video/mp4">
          <source src="mov_bbb.ogg" type="video/ogg">
          Your browser does not support HTML5 video.
        </video> -->










        <div class="content">
            <h1></h1>

            <button class="button"><a href="">Acceptez Jésus !</a></button>



        </div>




        <style>
            * {
                box-sizing: border-box;
            }

            input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
            }

            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }




        </style>





















        <div class="container">
            <h2>Nouveau Depart</h2>
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Nom</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="Prenom" placeholder="Your name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="emails" placeholder="Your last name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Country</label>
                    </div>
                    <div class="col-75">
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Subject</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>






    </section>



</body>
<footer></footer>
</div>


</html>
