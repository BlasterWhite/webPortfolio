<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ce site est le site web personnel de Matéo GUEZENNEC, développeur logiciel et web. page de ses projets">
    <meta name="keywords" content="matéo mateo matheo mathéo matteo mathéo guezen guez guezennec guézen guéz guézennec developper dévelopeur dev programmation programmateur programmeur informaticien concepteur realisateur alternance bachelor BUT informatique logiciel site web application base de données java javascript html html5 css css3 php my sql python c c++ c# node js py mysql figma maquettage cahier de tests poulailler autonome connecte echequier cavalier yams tris vieux pistons bretons portfolio recherche 2 ans années Bac STI2D Baccalauréat Science techniques technologies  industries development durable system numérique linux windows reseaux network udp tcp arduino domotique ">
    <title>Matéo G. - Projets</title>
    <link rel="stylesheet" href="css/charteGraphique.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/projets.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d50a18be62.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <p class="menubtn">Matéo GUEZENNEC</p>
        <a class="menubtn" id="btnBurger">Menu <i class="far fa-compass"></i></a>
        <a href="index"><i class="fas fa-home"></i> Accueil</a>
        <a href="competences"><i class="fas fa-dolly"></i> Compétences</a>
        <a href="#" class="activeTab"><i class="far fa-folder"></i> Projets</a>
        <a href="profile"><i class="fa-solid fa-id-card"></i> Profil</a>
        <a href="contact"><i class="fa-regular fa-user"></i> Contact</a>
    </nav>
    <main>
        <form onsubmit="event.preventDefault();" role="search">
            <input id="search" type="search" placeholder="Rechercher..." bar-recherche autofocus required />
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>    
          </form>
          <h3 id="nbProjet" style="text-align: center;">x projets trouvés</h3>
        <div class="projet vert" id="P_poulailler">
            <h1>Poulailler Connecté</h1>
            <div class="categories"><span class="html">HTML</span><span class="css">CSS</span><span class="js">JavaScript</span><span class="nodejs">NodeJS</span><span class="arduino">Arduino</span><span class="reseau">Réseau</span></div>
            <p>Pour le grand oral du Baccalauréat j'ai réalisé un Poulailler qui transmet les informations captées à un site web</p>
            <details>
                <summary>Clique pour en savoir plus</summary>
                <h3 id="poulailler">Description du Projet : </h3>
                <p>
                    Mes deux équipé et moi nous avons réalisé une solution pour rendre un habitat de basse-cour connecté.
                    Nous avons donc pensé à mettre en place: 
                </p>
                <ul>
                    <li>Puce RFID pour le comptage des poules</li>
                    <li>Capteur de température</li>
                    <li>Servo-moteur pour ouvrir/fermer la porte</li>
                    <li>Balance pour peser l'eau</li>
                    <li>Reconnaissance d'images pour compter les oeufs</li>
                    <li>Transmission des données vers un site web</li>
                </ul>
                <p>Je me suis occupé du site Web ainsi que de l'envoi des données de l'Arduino.</p>
                <h3>L'Arduino :</h3>
                <p>Dans le projet je me suis occupé de l'envoi de données vers un ordinateur via le réseau grâce à l'encapsulation du <strong>protocole UDP</strong>. j'ai donc pris un Arduino Uno équipé d'un Shield Ethernet</p>
                <h3>Le Site Web :</h3>
                <p>Pour faire une Interface Homme Machine j'ai mis en place un site web avec un serveur NodeJS en backend qui reçoit les données UDP via le réseau puis communique avec la page web via web socket. <br> Le site web est divisé en 4 parties :</p>
                <ol>
                    <li>Accueil    - Toutes les informations sont affichées sous forme visuelle</li>
                    <li>Logs       - Toutes les informations sont affichées sous forme de tableau avec heures de réception</li>
                    <li>Paramètres - Où on peut voir les paramètres de réception du serveur</li>
                    <li>Aide       - Les infos en cas de problème</li>
                </ol>
                <img src="assets/screens/projetBac1.png" alt="image du Panel en ligne" title="Capture d'écran du Panel du Poulailler">
            </details>
            <div class="buttons">
                <a href="https://github.com/BlasterWhite/ProjetBac" target="_blank">
                    <div class="btn noir center">
                        Repository Github <i class="fa-brands fa-github"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="projet rouge" id="P_portfolio">
            <h1>Portfolio</h1>
            <div class="categories"><span class="css">CSS</span><span class="js">JavaScript</span><span class="html">HTML</span><span class="php">PHP</span></div>
            <p>Dans la démarche de développer mon CV et de présenter mes projets j'ai réalisé le site que vous visitez actuellement.</p>
            <details>
                <summary>Clique pour en savoir plus</summary>
                <p>
                    J'ai pensé le site en plusieurs étapes:
                </p>
                <ol>
                    <li>Visualisation des pages et Création d'une arborescence du site</li>
                    <li>Création d'une charte graphique</li>
                    <li>Création d'une maquette sur Figma afin de faire une mise en page</li>
                    <li>Développement du site en HTML, CSS et JavaScript</li>
                    <li>Mise en ligne du site via un hébergeur Web</li>
                </ol>
                <h3>Les Défis :</h3>
                <p>Pour créer ce site je me suis imposé de tout faire par moi même c'est à dire de ne pas de copier coller sur des site comme StackOverflow ou autre.<br> De même pour les problèmes rencontrés, je me suis seulement aidé des documentations en ligne comme w3school.com ou MDN web docs.</p>
                <br>
                <br>
                <p>L'étape finale était le peuplement du site avec tous les projets que j'avais déjà fait puis le remplissage des autres pages avec toutes les informations.</p>
                <img src="assets/screens/WebPortfolio1.png" alt="Capture d'écran de la page d'Accueil du site">
            </details>
            <div class="buttons">
                <a href="https://github.com/BlasterWhite/webPortfolio" target="_blank" style="width: fit-content;">
                    <div class="btn noir center">
                        Repository Github <i class="fa-brands fa-github"></i>
                    </div>
                </a>
                <a href="https://mateo-guezennec.fr" target="_blank">
                    <div class="btn orange center">
                        Site Web <i class="fa-solid fa-globe"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="projet orange" id="P_vpb">
            <h1>Site Vieux Pistons Brestons</h1>
            <div class="categories"><span class="html">HTML</span><span class="css">CSS</span><span class="js">JavaScript</span><span class="php">PHP</span><span class="sql">MySQL</span></div>
            <p>Réalisation d'un site web pour une association</p>
            <details>
                <summary>Clique pour en savoir plus</summary>
                <p>
                    J'ai réalisé un site web pour l'association Vieux Pistons Bretons.
                    Le site est assez simple et est divisé en plusieurs parties.
                </p>
                <ul>
                    <li>Accueil</li>
                    <li>Événements</li>
                    <li>Annonces</li>
                    <li>À propos</li>
                    <li>Membre</li>
                </ul>
                <p>Le site a nécessité la mise en place d'un système de comptes afin que certaines personnes puissent créer des articles et des actualités et d'autres aient juste accès aux actualités membre.</p>
                <p>Le compte membre a accès aux actualités membre émises par l'association et à la possibilité de créer des annonces.</p>
                <p>Le compte Admin a tous les droits, de la création, suppression, modification de compte et d'article, à la création d'événements et d'actualité membre</p>
                <img src="assets/screens/vpb1.png" alt="Capture d'écran page Accueil vieuxpistonsbretons.fr">
            </details>
            <div class="buttons">
                <a href="https://vieuxpistonsbretons.fr" target="_blank">
                    <div class="btn orange center">
                        Site Web <i class="fa-solid fa-globe"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="projet bleu" id="P_kohfrais">
            <h1>Site KohFrais</h1>
            <div class="categories"><span class="html">HTML</span><span class="css">CSS</span><span class="js">JavaScript</span></div>
            <p>Réalisation d'un site vitrine dans le cadre d'un projet d'étude</p>
            <details>
                <summary>Clique pour en savoir plus</summary>
                <p>
                    Dans le cadre d'un projet de mon BUT informatique lors de ma première année, j'ai réalisé en équipe un site web vitrine pour une entreprise fictive nommée KohFrais. <br>
                    Notre travail a été fractionné en plusieurs étapes :
                </p>
                <ul>
                    <li>Création d'une charte graphique</li>
                    <li>Réalisation de logo et assets graphique</li>
                    <li>Développement du site Internet</li>
                    <li>Mise en ligne</li>
                    <li>Soutenance de présentation</li>
                </ul>
                <p>Tout notre travail a été sauvegardé étape par étape grâce au Gitlab de l'IUT, ce qui m'a permis d'apprendre l'utilité des outils comme <strong>git</strong>.</p>
                <img src="assets/screens/KohFrait1.png" alt="Image de la page contact" title="Page Contact du site KohFrais">
            </details>
            <div class="buttons">
                <a href="https://github.com/BlasterWhite/KohFrais" target="_blank" style="width: fit-content;">
                    <div class="btn noir center">
                        Repository Github <i class="fa-brands fa-github"></i>
                    </div>
                </a>
                <a href="https://kohfrais.mateo-guezennec.fr" target="_blank">
                    <div class="btn orange center">
                        Site Web <i class="fa-solid fa-globe"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="projet vert" id="P_yams">
            <h1>Yams CLI</h1>
            <div class="categories"><span class="c">Langage C</span></div>
            <p>Réalisation d'un Yams dans un terminal</p>
            <details>
                <summary>Clique pour en savoir plus</summary>
                <p>
                    Dans le cadre d'un projet de mon BUT informatique lors de ma première année, j'ai réalisé un jeu de Yams/Yathzee dans le terminal. <br>
                    Mon Yams a été fait en plusieurs étapes :
                </p>
                <ul>
                    <li>Réalisation des premiers visuels en ASCII</li>
                    <li>Développement en PseudoCode du programme</li>
                    <li>Programmation en C</li>
                    <li>Phase de tests</li>
                </ul>
                Durant ce projet j'ai fait globalement les étapes de création d'un logiciel qui sont: modélisation, programmation, puis phases de test.
                <img src="assets/screens/yams1.png" alt="Image de la page contact" title="Capture d'écran début du jeu">
            </details>
            <div class="buttons">
                <a href="https://github.com/BlasterWhite/YamsCLI" target="_blank" style="width: fit-content;">
                    <div class="btn noir center">
                        Repository Github <i class="fa-brands fa-github"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="projet rouge" id="P_pbCavalier">
            <h1>Parcours du cavalier Echecs</h1>
            <div class="categories"><span class="python">Python</span></div>
            <p>Réalisation d'un algorithme de parcours d'échiquier par un cavalier</p>
            <details>
                <summary>Clique pour en savoir plus</summary>
                <p>
                    Dans le cadre d'un projet de mon BUT informatique lors de ma première année, j'ai réalisé un algorithme de parcours d'échiquier par un cavalier <br>
                    Le problème est simple : un cavalier est sur l'échiquier et il doit passer par toutes les cases sans passer deux fois par la même. <br>
                    Après avoir trouvé un graphe possible je l'affiche sous forme graphique. <br>
                    Une derniere version du programme permet de faire un cycle, c'est à dire que le cavalier finira sur la même case d'où il est parti. <br>
                </p>
                </p>
                <img src="assets/screens/pbCavalier1.png" alt="Image de la page contact" title="Capture d'écran début du jeu">
            </details>
            <div class="buttons">
                <a href="https://github.com/BlasterWhite/ChevalierEchec" target="_blank" style="width: fit-content;">
                    <div class="btn noir center">
                        Repository Github <i class="fa-brands fa-github"></i>
                    </div>
                </a>
            </div>
        </div>
        <div id="aucunProjet" class="cache">
            <h1>Rien a été trouvé</h1>
            <i class="fa-solid fa-user-secret"></i>
        </div>
    </main>
    <script src="js/projet.js"></script>
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