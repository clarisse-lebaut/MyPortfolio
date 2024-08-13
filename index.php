<link rel="stylesheet" href="./assets/styles/global.css">

<?php
// **Function to load the correct page
function loadPage($page) {
    switch ($page) {
        // TODO : the first box allows you to automatically redirect to the home page
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

$page = isset($_GET['page']) ? $_GET['page'] : '';

// Load the correct page
loadPage($page);
?>

