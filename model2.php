<?php 

include("db_connect.php"); 

$requete = " SELECT * FROM rw_espaces WHERE id_espace = " . $_GET["id"];

$stmt=$db->query($requete); 

$result=$stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($result as $room);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artbnb</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="../css/mod-gal.css">
    <link rel="icon" type="image/x-icon" href="../images/faviconw.ico">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,800;1,400;1,800&family=Roboto:ital,wght@0,100;0,400;0,700;0,900;1,100;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <section class="gallery">

        <div class="titre">
            <img src="<?php echo $room["img"]?>" alt="">
            <h1 class="move"> <?php echo $room["titre"] ?> </h1>
            <h1> Gallery </h1>
            <h2 class="move"> <?php echo $room["titre"] ?> </h2>
            <h2> Gallery </h2>
        </div>

    </section>

<section class="descriptif">
    <div class="hr-theme">
            <div class="hr-left"></div>
            <h3 class="titreDesc"> Description </h3>
    </div>

<div class="description">
    <p class="textDesc"> <?php echo $room["description"] ?> </p>
</div>


</section>



    <section class="price">

        <div class="desc">
            <h4> two-week reservation </h4>
            <p class="text">Experience a blissful getaway with our two-week reservation package. Immerse people in into a curated collection of masterpieces, contemporary works, and thought-provoking exhibitions. So they enjoy a 14-day escape filled with art and exploration. 
            </p>
            <h5 class="prix"> <?php echo $room["prix"] ?> $ </h5>
            <div class="reserve">
            <a href="../formG.html" class="reservation-btn btn-position"> Book </a>
            </div>
        </div>
        <div class="rightpart">
            <img class="morePic" src="<?php echo $room["img2"] ?>" alt="">
        </div>
    </section>

    <section class="price">

        <div class="leftpart">
            <img class="morePic" src="<?php echo $room["img3"] ?>" alt="">
        </div>

        <div class="desc">
            <h4> one-month reservation </h4>
            <p class="text">With ample time to immerse people in the destination's wonders, they can savor each moment, uncover hidden gems, and create lasting memories. Our impeccable service and accommodations will ensure an unparalleled experience during the month-long exhibition.</p>
            <h5 class="prix"> <?php echo $room["prix2"] ?> $ </h5>
            <div class="reserve">
                <a href="../formG.html" class="reservation-btn btn-position"> Book </a>
            </div>
        </div>
    </section>

    <section class="price">

        <div class="desc">
            <h4> add 14 days </h4>
            <p class="text">With our exclusive offer, you can secure additional time to display your masterpieces, ensuring they receive the attention they deserve. Whether you're a painter, sculptor, photographer, or any other kind of artist, our gallery provides the perfect platform to showcase your talent and share your creative vision.</p>
            <h5 class="prix"> <?php echo $room["prix3"] ?> $</h5>
            <div class="reserve">
                <a href="../formG.html" class="reservation-btn btn-position"> Book </a>
            </div>
        </div>

        <div class="rightpart">
            <img class="morePic" src="<?php echo $room["img4"] ?>" alt="">
        </div>
    </section>





    <footer>
        <nav class="navFoot">
            <li> <a href="../index.php"> Home </a></li>
            <li> <a href="../studio.html"> Studio </a></li>
            <li> <a href="../gallery.html"> Gallery </a></li>
            <li> <a href="../about.html"> About </a></li>
            <li> <a href="../term.html"> Legal Policies</a></li>
        </nav>

        <p class="credit"> © Cécile PHAN NGUYEN - All rights reserved </p>

    </footer>


</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>