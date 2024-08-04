<link rel="stylesheet" href="./assets/styles/global.css">

<?php
// **Fonction pour charger la bonne page
function loadPage($page) {
    switch ($page) {
        // TODO : le premier case permet de rediriger automatiquement sur la page home
        case "":
        case 'home':
            include 'pages/home.php';
            break;
  
        case 'projects':
            include 'pages/projects.php';
            break;
        case 'web':
            include 'pages/projects/web.php';
            break;
        case 'music':
            include 'pages/projects/music.php';
            break;
        case 'graphic':
            include 'pages/projects/graphic.php';
            break;

        case 'me':
            include 'pages/me.php';
            break;

        default:
            include 'pages/404.php';
            break;
    }
}

// **Obtenir la page demandée
/* 
    TODO : Expression ternaire en PHP
    Utilisée pour définir une variable en fonction de la présence ou de l'absence d'un paramètre dans l'URL

    * isset($_GET['page']) :
    Vérifie si le paramètre page est défini dans la query string de l'URL. 
    La variable $_GET est un tableau associatif en PHP qui contient les paramètres de l'URL. 
    La fonction isset renvoie true si $_GET['page'] existe et n'est pas null.

    * ? $_GET['page'] : '' :
    Expression ternaire. 
    Elle fonctionne comme une instruction if simplifiée. 
    Si la condition avant le ? (dans ce cas, isset($_GET['page'])) est vraie, la valeur après le ? est utilisée (ici, $_GET['page']). 
    Si la condition est fausse, la valeur après le : est utilisée (ici, une chaîne vide '').
*/ 
$page = isset($_GET['page']) ? $_GET['page'] : '';

/*
    ! attention = lorsque je veux vérifier la page sur laquelle je veux être rediriger
    il faut bien faire attention que dans le href je mette le même mot que de celui
    que je met dans $_GET --> sinon le router ne sait pas ce que je cherche
*/

// Charger la bonne page
loadPage($page);
?>

