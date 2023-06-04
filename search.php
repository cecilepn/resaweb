<?php 

include("db_connect.php"); 

//filtre permettant de choisir d'exécuter sa recherche parmi 2 catégories, l'une ou l'autre ou les deux 
if (isset($_GET["studio"], $_GET["gallery"])) {
    $requete = "SELECT * FROM rw_espaces";


} else if (isset($_GET["studio"])) {
    $requete = "SELECT * FROM rw_espaces 
    WHERE id_cat=1";


} else if (isset($_GET["gallery"])) {
    $requete = "SELECT * FROM rw_espaces 
    WHERE id_cat=2";

};

//barre de recherche permettant de trouver une correspondance entre la recherche de l'utilisateur et la description d'un(e) des studios/galeries 

//bloque la recherche "vide" 
if (isset($_GET["search"]) && $_GET["search"] !== ''){
    $userInput = $_GET["search"]; 
    $requete = "SELECT * FROM rw_espaces 
    WHERE description LIKE '%$userInput%'";  
}


if (isset($requete)) {
$stmt=$db->query($requete); 
$result=$stmt->fetchall(PDO::FETCH_ASSOC);
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artbnb</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="../css/search.css">
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
            <li> <a href="../index.php"> Home </a></li>
            <li> <a href="../studio.html"> Studio </a></li>
            <li> <a href="../gallery.html"> Gallery </a></li>
            <li> <a href="../about.html"> About </a></li>
            <a href="search.php"> <img src="../images/search.png" alt="go to searching page" class="search"></a>
        </nav>
    </header>

    <section class="container">
        <h1 data-aos="fade-down" data-aos-duration="3000">Where art meets desire. <br> Search, find, and make it yours.</h1>

    <form action="search.php" method="GET" class="searching">
        <div class="wrap">
            <div class="searchbar">
            <label for="search">
                <input id="search" type="text" placeholder="What're you searching for ?" class="form-control form-control-underlined" name="search"></label>
            </div>

            <div class="form-group">
        <button type="submit" class="btn">Search</button>
            </div>

        </div>

        <div class="filters">
                <div class="wrap-switch">
                        <input type="checkbox" id="checkbox1" name="studio">
                        <label id="checkbutton" for="checkbox1" class="checkfond">
                <div id="knob"></div>
                        </label>
                        <h2>Studio</h2>
                </div>

                <div class="wrap-switch">
                        <input type="checkbox" id="checkbox2" name="gallery">
                        <label id="checkbutton" for="checkbox2">
                <div id="knob"></div>
                            </label>
                            <h2>Gallery</h2>
                </div>
            </div>
   

        </form>
    </section>

    <section class="template">
<?php 

if (isset($result)) {

    if (count($result) == 0){
//renvoie à un message d'erreur si la recherche ne correspond à aucune description
        echo  '<div class="no-result">
        <h3>Sorry, no result were found :( <br>  Try <span class="prop">authentic</span>. </h3>
        </div>';
    } else {

//renvoie aux studios et/ou galeries correspondant à la recherche ou au filtre 
        foreach($result as $row) {
            echo '
            <div class="card">
            <img src="'. $row["img"] . '" alt="">
            <h4>'. $row["titre"] .'</h4>
            <p> '. $row["description"] .'</p>
            <a href="../model.php?id='. $row["id_espace"] .'" class="morebtn"> More </a>
        </div>
            ';
        }; 
    }
};



?>




            
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
<script src="search.js"></script>


</html>