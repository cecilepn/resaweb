<?php 

include("db_connect.php"); 

    // Récupérer les données du formulaire

$prenom = $_POST["firstName"]; 
$nom = $_POST["lastName"]; 
$mail = $_POST["email"]; 
$tel = $_POST["phone"]; 
$guest = $_POST["guest"]; 
$checkin = $_POST["checkin"]; 
$checkout = $_POST["checkout"]; 
$room = $_POST["room_preference"]; 
$msg = $_POST["message"]; 

    // Envoi des données vers la base de données

$requete = "INSERT INTO rw_reservation (id_espace,prenom,nom,tel,mail,guest,debut,fin,request) VALUES ('$room','$prenom','$nom','$tel','$mail','$guest','$checkin','$checkout','$msg')";
$db->query($requete); 


$requete = "SELECT * FROM rw_espaces WHERE id_espace = " . $room;
$stmt=$db->query($requete); 
$result=$stmt->fetchall(PDO::FETCH_ASSOC);
foreach ($result as $affiche)
?> 

<?php 
    // Envoi mail de confirmation 

    $to = $mail; 
    $subject = 'Unlocking creativity, together: thank you for reserving your Studio/Gallery!'; 
    $message = "
    <html>
    <body>
    <h1> Thank you! </h1> 
    <p>Hello $nom $prenom, you have reserved {$affiche["titre"]} for $guest from $checkin to $checkout. Thank you for trusting us.</p>
    </body>
    </html>";

    // En-têtes de l'e-mail
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Envoi de l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        header("Location: confirmation.html");
    } else {
        header("Location: fail.html");
    
    mail($to, $subject, $message);  
    }

    
?>
