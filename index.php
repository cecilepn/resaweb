<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artbnb</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="../images/faviconw.ico">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,800;1,400;1,800&family=Roboto:ital,wght@0,100;0,400;0,700;0,900;1,100;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>

    <header>
        <a href="index.php"> <img src="../images/logow.png" alt="back to home page" class="logo"></a>
        <nav class="navMain">
            <li> <a href="index.php"> Home </a></li>
            <li> <a href="studio.html"> Studio </a></li>
            <li> <a href="gallery.html"> Gallery </a></li>
            <li> <a href="about.html"> About </a></li>
            <a href="search.php"> <img src="../images/search.png" alt="go to searching page" class="search"></a>
        </nav>
    </header>

    <section id="container1" class="container">
        <h1>
            <div class="line1" data-aos="fade-right" data-aos-duration="3000"> <span class="huge"> A PLACE </span>
                <span class="italic"> where </span>
            </div>
            <div class="line2" data-aos="fade-left" data-aos-duration="3000">
                <span class="italic"> to </span>
                <span class="huge">CREATE</span>
                <span class="italic"> &to be.</span>
            </div>
        </h1>
        <a href="#secStudio"><span></span></a>
    </section>

    <section id="secStudio" class="container2">

        <h2 class="bftitle">explore our </h2>
        <div class="hr-theme">
            <div class="hr-left"></div>
                <h2> Studios </h2>
            <div class="hr-right"></div>
        </div>

        <div class="contenu">
            <div class="studios">
                <img class="photos" src="images/color3.jpg" alt="">
                <img class="photos" src="images/messy.jpg" alt="">
                <img class="photos" src="images/minimalist.jpg" alt="">
                <img class="photos" src="images/studios.gif" alt="">
            </div>

            <div class="ss-contenu">

                <div class="dStudio" data-aos="fade-down" data-aos-duration="3000">
                    <p class="textStudio"> Whether you're looking for a space to work on a specific project or simply want to
                        explore your creativity
                        in a supportive environment, our art studios are the perfect choice. <br> <br>  So why wait ? <br> <br> Discover our
                        studios
                        today
                        and book your space now to begin your artistic journey.</p>
                </div>
                    <a href="../studio.html" class="btn"> Discover </a>

            </div>

        </div>

    </section>

    <section class="container3">

    <h2 class="bftitle">explore our </h2>
        <div class="hr-theme">
            <div class="hr-left"></div>
                <h2> Gallery </h2>
            <div class="hr-right"></div>
        </div>

        <div class="qst">
            <h4 data-aos="fade-right" data-aos-duration="3000">Need a gallery to <br /> expose your artwork ? </h4>
            <img src="images/statue.png" alt="" class="tete">
        </div>
        <div class="rep">
            <h4>Choose your <a href="../gallery.html" class="spe">
                    gallery <span class="arrow">&#8594;</span></a>
            </h4>
        </div>

    </section>

    <section class="container4">
        
        <div class="slider-container">
            <div class="slider">
                <div class="slider-item">Coming soon</div>
            </div>
        </div>
        <div class="secComing">
            <img class="pic" src="images/blue.jpg" alt="">
            <img class="pic" src="images/full.jpg" alt="">
            <img class="pic" src="images/night.jpg" alt="">
        </div>

    </section>

    <footer>
        <nav class="navFoot">
            <li> <a href="../index.php"> Home </a></li>
            <li> <a href="../studio.html"> Studio </a></li>
            <li> <a href="../gallery.html"> Gallery </a></li>
            <li> <a href="../about.html"> About </a></li>
            <li> <a href="../term.html"> Legal Policies</a></li>        </nav>

        <p class="credit"> © Cécile PHAN NGUYEN - All rights reserved </p>

    </footer>


</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="index.js"></script>

</html>