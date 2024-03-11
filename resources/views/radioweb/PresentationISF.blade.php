<!DOCTYPE html>
<html>
<head>
    <title>Impact Sans Frontières</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

        body, html {
            height: 100%;
            line-height: 1.8;
        }

        /* Full height image header */
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("https://impactsansfrontieres.com/wp-content/uploads/2023/02/IMG_78951-2-scaled.jpeg");
            min-height: 100%;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }
    </style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="{{route('presentationISF')}}" class="w3-bar-item w3-button w3-wide"><img src="/img/cropped-FavIcon.png" width="70" height="70"></a>

        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="{{route('maiin')}}" class="w3-bar-item w3-button">ACCEUIL</a>
            <a href="{{route('presentationISF')}}" class="w3-bar-item w3-button">PRESENTATION ISF</a>
            <a href="{{route('nosactions')}}" class="w3-bar-item w3-button">NOS ACTIONS</a>
            <a href="{{route('commentparticiper')}}" class="w3-bar-item w3-button">COMMENT PARTICIPER ?</a>
            <a href="{{route('nouscontacter')}}" class="w3-bar-item w3-button">NOUS CONTACTER </a>
            <a href="https://donorbox.org/impactsansfrontieres" class="w3-bar-item w3-button">FAIRE UN DON </a>
            <a href="https://www.instagram.com/" class="w3-bar-item w3-button" style="font-size:30px;color:#8F7AB5"><i class="fa fa-instagram"></i> </a>
            <a href="https://www.facebook.com/ImpactSansFrontieres/?locale=fr_FR" class="w3-bar-item w3-button" style="font-size:30px;color:#8F7AB5"><i class="fa fa-facebook"></i> </a>

        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="{{route('maiin')}}" onclick="w3_close()" class="w3-bar-item w3-button">ACCEUIL</a>
    <a href="{{route('presentationISF')}}" onclick="w3_close()" class="w3-bar-item w3-button">PRESENTATION ISF</a>
    <a href="{{route('commentparticiper')}}" onclick="w3_close()" class="w3-bar-item w3-button">COMMENT PARTICIPER ?</a>
    <a href="{{route('nouscontacter')}}" onclick="w3_close()" class="w3-bar-item w3-button">NOUS CONTACTER</a>
    <a href="https://donorbox.org/impactsansfrontieres" onclick="w3_close()" class="w3-bar-item w3-button">FAIRE UN DON</a>
    <a href="https://www.instagram.com/" class="w3-bar-item w3-button" style="font-size:30px;color:#8F7AB5"><i class="fa fa-instagram"></i> </a>
    <a href="https://www.facebook.com/ImpactSansFrontieres/?locale=fr_FR" class="w3-bar-item w3-button" style="font-size:30px;color:#8F7AB5"><i class="fa fa-facebook"></i> </a>

</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
        <span class="w3-jumbo w3-hide-small">PRESENTATION ISF</span><br>
        <span class="w3-xxlarge w3-hide-large w3-hide-medium">PRESENTATION ISF</span><br>
        <span class="w3-large">

            </span>
        <span class="w3-large"></span>

    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">

    <p class="w3-center w3-large">Impact Sans Frontières (ISF) est un mouvement d’évangélisation missionnaire Créée en 2008 dont le visionnaire est Yvan Castanou et le Président est André AMBENDET.</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">

        <!-- Promo Section - "We know design" -->

        <h2>Notre Mission en 3 axes</h2>
        <h3>ACTES DE COMPASSIONS</h3>
        <h3>COMPAGNE D'EVANGELISATION</h3>
        <h3>IMPLANTATIONS DES EGLISES</h3>

        <div class="w3-container w3-light-grey" style="padding:128px 16px">

                  <h6>ACTES DE COMPASSIONS</h6>
            <p>Apporter du soutien à celles et ceux qui en ont besoin, en distribuant
                à boire, à manger, des kits d’hygiène, des kits scolaires aux plus nécessiteux.</p>
                  <h6>COMPAGNE D'EVANGELISATION</h6>
              <p>Soutenir des populations démunies en organisant des grandes missions qui consistent à : procurer des soins médicaux, à organiser des ateliers pour les femmes, les hommes et les jeunes,  à réhabiliter les écoles et en faisant de la distribution de kits alimentaire et vestimentaire et enfin, prêcher la Bonne Nouvelle de l’évangile.</p>
                  <h6>IMPLANTATIONS DES EGLISES</h6>
               <p>Etablir des Eglises qui ont pour but d’aider, de soutenir, d’accompagner, et d’affermir spirituellement la population locale.</p>
            <div class="w3-row-padding">
                <div class="w3-col m6">
                    <h3>NOTRE MISSION</h3>

                    <img class="w3-image w3-round-large" src="/img/31388E22-1D80-425C-81E8-93FAE6AFA959.png" alt="Buildings" width="700" height="394">

                    <h3>NOS ACTIONS</h3>
                    <img class="w3-image w3-round-large" src="/img/ACF55445-C569-4149-8A37-EA30661ECBC4.png" alt="Buildings" width="700" height="394">
                    <p>
                    <h4>
                        <a href="" class=""></a>
                        <i class="fas fa-hand-holding-heart " style='font-size:48px;color:black'></i>
                    </h4>

                    <h4> </h4>
                    <h4><a href=""></a>
                        <i class='fas fa-handshake' style='font-size:36px'></i>
                    </h4>

                </div>
                <div class="w3-col m6">

                    <h3>SOUTENIR NOS ACTIONS</h3>

                    <img class="w3-image w3-round-large" src="/img/9C902AFC-AB24-4287-A9BC-EDBC02F8478B(1).png" alt="Buildings" width="700" height="394">
                    <h3>QUI SOMMES-NOUS ?</h3>
                    <img class="w3-image w3-round-large" src="/img/06A657B4-8E52-4F22-BDED-5F19F37086E3.png" alt="Buildings" width="700" height="394">
                </div>


                <div class="w3-col m6">

                </div>
            </div>
        </div>

    </div>
</div>




    <h3 class="w3-center">NOS VALEURS</h3>

    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="/img/consecration-icon.png" alt="" style="width:30%">
                <div class="w3-container">
                    <h3>Consécration</h3>



                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="/img/humilite-icon.png" alt="" style="width:30%">
                <div class="w3-container">
                    <h3>Humilité</h3>


                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="/img/respect-icon.png" alt="" style="width:30%">
                <div class="w3-container">
                    <h3>Respect</h3>


                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="/img/integrite-icon.png" alt="" style="width:30%">
                <div class="w3-container">
                    <h3>Intégrité</h3>


                </div>
            </div>
        </div>
    </div>



    <div class="w3-row-padding w3-grayscale" style="">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="/img/service-icon.png" alt="" style="width:30%">
                <div class="w3-container">
                    <h3>Service</h3>


                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="/img/transparent-icon.png" alt="" style="width:30%">
                <div class="w3-container">
                    <h3>Transparence</h3>


                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">

        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">


            </div>
        </div>
    </div>

<!-- Promo Section "Statistics" -->

<!-- Work Section -->



<!-- Modal for full size images on click-->


<!-- Pricing Section -->


<!-- Contact Section -->


<!-- Footer -->
<footer class="w3-center " style="background-color: #8F7AB5; height:300px">
    <a href="#home" class="w3-button "><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official " ></i>
        <i class="fa fa-instagram "></i>

    </div>
    <p> <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green" style="background-color: #8F7AB5"></a></p>
</footer>

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>

</body>
</html>
