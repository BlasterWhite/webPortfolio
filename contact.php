<?php 
    $msg = "";
    if(isset($_POST['submit']) AND $_POST['contenu'] != '' AND $_POST['nom'] != '' AND $_POST['prenom'] != '' AND $_POST['email'] != '') {
    
        $name = $_POST['nom'] . ' ' . $_POST['prenom'];
        $from = $_POST['email'];
        $to = "icarambala@gmail.com";
        $subject = "Contact mateo-guezennec.fr";
        $headers = "Message de :" . $from;
        
        $message =  "De : $name\nE-Mail : $from\n";

        if($_POST['phone'] != '') {
            $message .= "Téléphone : ".$_POST['phone']."\n";
        }

        $message .= "Message :\n" . $_POST['contenu'];
 
        if (mail($to,$subject,$message, $headers)) { 
            $msg = '<p>Votre message a été envoyé!</p>';
        } else { 
            echo mail($to,$subject,$message, $headers);
            $msg = '<p>Votre message n\'a pas été envoyé!</p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ce site est le site web personnel de Matéo GUEZENNEC, développeur logiciel et web. page pour me contacter ">
    <meta name="keywords" content="matéo mateo matheo mathéo matteo mathéo guezen guez guezennec guézen guéz guézennec developper dévelopeur dev programmation programmateur programmeur informaticien concepteur realisateur alternance bachelor BUT informatique logiciel site web application base de données java javascript html html5 css css3 php my sql python c c++ c# node js py mysql figma maquettage cahier de tests poulailler autonome connecte echequier cavalier yams tris vieux pistons bretons portfolio recherche 2 ans années Bac STI2D Baccalauréat Science techniques technologies  industries development durable system numérique linux windows reseaux network udp tcp arduino domotique ">
    <title>Matéo G. - Home</title>
    <link rel="stylesheet" href="css/charteGraphique.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://kit.fontawesome.com/d50a18be62.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
</head>
<body>
    <nav>
        <p class="menubtn">Matéo GUEZENNEC</p>
        <a class="menubtn" id="btnBurger">Menu <i class="far fa-compass"></i></a>
        <a href="index"><i class="fas fa-home"></i> Accueil</a>
        <a href="competences"><i class="fas fa-dolly"></i> Compétences</a>
        <a href="projets"><i class="far fa-folder"></i> Projets</a>
        <a href="profile"><i class="fa-solid fa-id-card"></i> Profil</a>
        <a href="#" class="activeTab"><i class="fa-regular fa-user"></i> Contact</a>
    </nav>
    <main>
        <h1 class="titre">Me contacter</h1>
        <div class="container">
            <div id="contactList">
                <h3>Mes Coordonnées : </h3>
                <p>Adresse : <Address>kernoas, Guipavas 29490 FRANCE</Address></p>
                <p>Adresse Universitaire : <Address>2 Rue Édouard Branly, Lannion 22300 FRANCE</Address></p>
                <p><i class="fa-brands fa-linkedin"></i> LinkedIn : <a href="https://www.linkedin.com/in/mateo-guezennec/" target="_blank">mateo-guezennec</a></p>
                <p><i class="fa-brands fa-github"></i> Github : <a href="https://github.com/BlasterWhite" target="_blank"> BlasterWhite</a></p>
                <p>Mail : mat.guezen@gmail.com</p>
                <p>Téléphone : +33 6 49 22 47 25</p>
                <p><a href="assets/files/CV.pdf">Mon CV</a></p>
            </div>
            <form method="post" action="contact.php">
                <h3>Formulaire de contact direct : </h3>
                <label for="nom">Nom</label>
                <input type="text" name="nom" require>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" require>
                <label for="prenom">Email</label>
                <input type="email" name="email" require>
                <label for="prenom">Téléphone <em>(facultatif)</em></label>
                <input type="tel" name="phone">
                <label for="contenu">Contenu</label>
                <textarea name="contenu" cols="30" rows="10" require></textarea>
                <button name="submit">Envoyer<i class="far fa-paper-plane"></i></button>
                <p style="margin=0px; padding=4px"><?php echo $msg; ?></p>
            </form>
        </div>
    </main>
    <script src="js/navbar.js"></script>
    <footer>
        <div class="footertop">
            <p>Site fait avec le 💖 par Matéo GUEZENNEC</p>
            <ul>
                <li><a href="https://www.linkedin.com/in/mateo-guezennec/" class="linkedin" target="_blank">LinkedIn <i class="fa-brands fa-linkedin"></a></i></li>
                <li><a href="https://github.com/BlasterWhite" class="github" target="_blank">Github <i class="fa-brands fa-github"></i></a></li>
            </ul>
        </div>
        <a href="metions" id="mentions"><i class="fa-solid fa-scale-balanced"></i><p>Mentions légales</p></a>
    </footer>
</body>
</html>