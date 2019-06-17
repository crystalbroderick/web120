<?php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//die;
switch(THIS_PAGE){
    
    case 'index.php':
        $title = "Tawny's Garden";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'contact.php':
        $title = "Tawny's Garden Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Me';
    break;
    
    case 'gallery.php':
        $title = "Tawny's Garden - Gallery Page";
        $logo = 'fa-home';
        $PageID = 'Gallery';
    break;
    case 'about.php':
        $title = "Tawny's Garden - About Tawny";
        $logo = 'fa-home';
        $PageID = 'About Tawny';
    break;
    case 'container.php':
        $title = "Tawny's Garden - Container Gardening";
        $logo = 'fa-home';
        $PageID = 'Container Gardening';
    break;
    case 'safeplants.php':
        $title = "Tawny's Garden - Resource";
        $logo = 'fa-home';
        $PageID = 'Safe Plants for Pets';
    break;
    case 'bouquets.php':
        $title = "Tawny's Garden - Bouquets";
        $logo = 'fa-home';
        $PageID = 'Safe Plants for Pets';
    break;
    case 'tips.php':
        $title = "Tawny's Garden - Tips and Tricks";
        $logo = 'fa-home';
        $PageID = 'Gardening Tips';
    break;
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
        
}

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');



/*$nav1['../index.php'] = "Portal";
$nav1['index.php'] = "Big";
$nav1['gallery.php'] = "Gallery";
$nav1['calendar.php'] = "Calendar";
$nav1['map.php'] = "Map";
$nav1['youtube.php'] = "Youtube";
$nav1['parallax.php'] = "Parallax";
$nav1['webcam.php'] = "Webcam";

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
*/

?>