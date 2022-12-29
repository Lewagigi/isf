<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            font-family: Arial, Helvetica, sans-serif;
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
            font: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: red;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            width: 100%;
            left: 0;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content .header {
            background: red;
            padding: 16px;
            color: white;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            background-color: #ccc;
            height: 250px;
        }

        .column a {
            float: none;
            color: black;
            padding: 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .column a:hover {
            background-color: #ddd;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                height: auto;
            }
        }
    </style>

    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0 }
        .mySlides {display: none}
        img {vertical-align: middle; }

        /* Slideshow container */
        .slideshow-container {
            max-width: 10000px;
            position: relative;
            margin: 0px;
            padding: 0px;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 0px ;
            position: relative;
            margin: 10px;
            top:-390px;
            bottom: 8px;
            width: 100%;
            text-align: center;


        .button {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;

        }

        .button:hover {background-color: #3e8e41}

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
           }


        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */


        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
    </style>

    <style>
        .block {
            display: block;
            width: 100%;
            border: none;
            background-color: #04AA6D;
            color: white;

            font-size: 16px;
            cursor: pointer;
            text-align: center;
            height:193px;
            margin: 0px;
            position: relative;
            top: -34px;
        }

        .block:hover {
            background-color: #ddd;
            color: black;
        }
    </style>


    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The grid: Three equal columns that floats next to each other */
        .column {
            float: left;

            padding: 50px;
            text-align: center;
            font-size: 25px;


        }



    </style>

    <style>
        .container {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .container img {
            width: 100%;
            height: auto;
        }

        .container .btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #555;
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .container .btn:hover {
            background-color: black;
        }
    </style>


    <style>
        .btn {
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            top: -250px;
            left: 190px;
            z-index: 1;
        }

        .success {background-color: #04AA6D;} /* Green */
        .success:hover {background-color: #46a049;}

        .info {background-color: #2196F3;} /* Blue */
        .info:hover {background: #0b7dda;}

        .warning {background-color: #ff9800;} /* Orange */
        .warning:hover {background: #e68a00;}

        .danger {background-color: #f44336;} /* Red */
        .danger:hover {background: #da190b;}

        .default {background-color: #e7e7e7; color: black;} /* Gray */
        .default:hover {background: #ddd;}
    </style>

    <style>
        .bt {
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            top: -250px;
            right: -948px;

        }

        .success {background-color: #04AA6D;} /* Green */
        .success:hover {background-color: #46a049;}

        .info {background-color: #2196F3;} /* Blue */
        .info:hover {background: #0b7dda;}

        .warning {background-color: #ff9800;} /* Orange */
        .warning:hover {background: #e68a00;}

        .danger {background-color: #f44336;} /* Red */
        .danger:hover {background: #da190b;}

        .default {background-color: #e7e7e7; color: black;} /* Gray */
        .default:hover {background: #ddd;}
    </style>


    <style>
        .button {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {background-color: #3e8e41}

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }
    </style>

    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>

      <style>
          footer{
              height:90px;
              color: #8F7AB5;
             }
      </style>

</head>
<body>


<div class="navbar">
    <a href="#home">Home</a>
    <a href="#news">News</a>
    <div class="dropdown">
        <button class="dropbtn">Dropdown
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <div class="header">
                <h2>Mega Menu</h2>
            </div>
            <div class="row">
                <div class="column">
                    <h3>Category 1</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 2</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="/img/isf2.png" style="width:100%">

        <div class="text">
            <button class="button">Click Me</button>
        </div>
    </div>


    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/isf1.png" style="width:100%">
        <div class="text">
            <button class="button">Click Me</button>
        </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>


<button class="block">Block Button</button>


<p></p>

{{--
<div class="row">


        <img src="/img/Rester-en-contact-1024x683.jpeg"  style="width:700px ;position: relative; left: 20px;">

            <img src="/img/Nouveau-depart-1024x683.jpeg"  style="width:700px ;position: relative; left: 60px;" >

</div>
--}}

<div class="row">
    <img src="/img/Rester-en-contact-1024x683.jpeg"  style="width:510px ;position: relative; left: 20px;">
    <img src="/img/Nouveau-depart-1024x683.jpeg"  style="width:510px ;position: relative; left: 160px;" >

</div>


<button class="btn success">Success</button>

<button class="bt warning">Warning</button>

<br>

<div class="row">
    <div class="column">
        <img src="/img/La pâque.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/La-Misericorde-de-DIEU-1024x427.jpeg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/Le pardon.jpg" alt="Mountains" style="width:100%">
    </div>
</div>


<div class="row">
    <div class="column">
        <img src="/img/La délivrance.jpg" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/La repentance.jpg" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/La paix intérieure.jpg" alt="Mountains" style="width:100%">
    </div>
</div>



<div class="row">
    <div class="column">
        <img src="/img/image (3).png" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/image (4).png" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/La dépendance.jpg" alt="Mountains" style="width:100%">
    </div>
</div>

<h1>
    <br>

</h1>

<h1> PodCast : Les personnes qui ont fait une rencontre </h1>

<div class="row">
    <div class="column">
        <img src="/img/1.png" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/2.png" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/3.png" alt="Mountains" style="width:100%">
    </div>
</div>

<div class="row">
    <div class="column">
        <img src="/img/4.png" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/7.png" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/12.png" alt="Mountains" style="width:100%">
    </div>
</div>


<div class="row">
    <div class="column">
        <img src="/img/14.png" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/17.png" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/18.png" alt="Mountains" style="width:100%">
    </div>
</div>



<div class="row">
    <div class="column">
        <img src="/img/18.png" alt="Snow" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/19.png" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <img src="/img/21.png" alt="Mountains" style="width:100%">
    </div>
</div>










</body>

<footer>

</footer>

</html>
