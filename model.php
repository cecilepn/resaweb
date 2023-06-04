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
    <link rel="stylesheet" href="../css/mod-stud.css">
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

    <section class="stud">

        <div class="bg-img" style="background-image: url(<?php echo $room["img"] ?>);"></div>

        <div class="bg-text">
            <h1 class="name"><?php echo $room["titre"] ?> Studio</h1>
        </div>
        <a href="../form.html" class="reservation-btn btn-position"> Book </a>


    </section>

    <section class="descriptif">
        <div class="hr-theme">
                <div class="hr-left"></div>
                <h2 class="titreDesc"> Description </h2>
        </div>

        <div class="description">
            <p class="textDesc"> <?php echo $room["description"] ?> </p>
         </div>
    </section>



    <section class="price">

    <div class="tarif">
        <h3> one-day reservation </h3>
        <img class="pict" src="<?php echo $room["img2"] ?>" alt="">
        <h4> <?php echo $room["prix"]?> $ </h4>
        <p class="textPrice">Unleash your creativity and immerse yourself in an art-filled day. <br> <br> Our art studio offers the perfect sanctuary for artists seeking a brief escape, providing a space to freely express ideas, experiment with techniques, and bring your artistic vision to life in a focused and inspiring environment.</p>

        <a href="../form.html" class="btn-book"> Book </a>

    </div>

    <div class="tarif border">
        <h3> four-days reservation </h3>
        <img class="pict" src="<?php echo $room["img3"] ?>" alt="">
        <h4> <?php echo $room["prix2"]?> $ </h4>
        <p class="textPrice">Dive deeper into your artistic journey with our four-day art studio reservation. <br> <br> Expand your creative horizons, engage in longer art sessions, and truly delve into the process of creation. In our well-equipped studio,you can dedicate uninterrupted time to refine your craft and produce meaningful works of art.</p>

        <a href="../form.html" class="btn-book"> Book </a>

    </div>

    <div class="tarif">
        <h3> one-week reservation </h3>
        <img class="pict" src="<?php echo $room["img4"] ?>" alt="">
        <h4> <?php echo $room["prix3"]?> $ </h4>
        <p class="textPrice"> Embark on an intensive art immersion with our week-long studio reservation. <br> <br> Immerse yourself completely in your artistic practice, allowing your creativity to flourish and your skills to evolve. Our studio awaits, ready to support your artistic growth and provide the ideal setting for a week of creativity.</p>
        <a href="../form.html" class="btn-book"> Book </a>

    </div>

    </section>


   
    <section class="materials">
        
    <div class="hr-theme">
            <div class="hr-left"></div>
            <h5 class="titreDesc">Materials </h5>
    </div>

        <div class="desc-materials">

            <div class="secPics">
                <img class="pic" src="../images/paint.jpg" alt="">
                <img class="pic" src="../images/brush.jpg" alt="">
                <img class="pic" src="../images/chalk.jpg" alt="">
            </div>


            <p class="d-material">Equipped with high-quality materials and
                equipment, our studios provide the perfect setting for you to explore new techniques and experiment with
                different mediums. <br> <br> From painting and drawing to sculpture and mixed media, our spaces are ideal for
                artists
                working in a range of disciplines. <br> <br>
            <span data-aos="fade-up" data-aos-duration="3000" style="font-style:italic">* All the studios are equipped with the same materials.</span> </p>

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

</html>