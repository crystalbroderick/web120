<?php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//die;
switch(THIS_PAGE){
    
    case 'index.php':
        $title = "Crystal's WEB120 Big Page";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;
    
    case 'contact.php':
        $title = "Crystal's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Crystal';
    break;
    
    case 'gallery.php':
        $title = "Crystal's WEB120 Gallery Page";
        $logo = 'fa-home';
        $PageID = 'Gallery';
    break;
    case 'calendar.php':
        $title = "Crystal's WEB120 Calendar Page";
        $logo = 'fa-home';
        $PageID = 'Calendar';
    break;
    case 'map.php':
        $title = "Crystal's WEB120 Map Page";
        $logo = 'fa-home';
        $PageID = 'Map';
    break;
    case 'parallax.php':
        $title = "Crystal's WEB120 Parallax Page";
        $logo = 'fa-home';
        $PageID = 'Parallax';
    break;
    case 'webcam.php':
        $title = "Crystal's WEB120 Webcam Page";
        $logo = 'fa-home';
        $PageID = 'Webcam';
    break;
    case 'youtube.php':
        $title = "Crystal's WEB120 Youtube Page";
        $logo = 'fa-home';
        $PageID = 'Youtube';
    break;
    case 'rvsm.php':
        $title = "Crystal's WEB120 Big Research Page";
        $logo = 'fa-home';
        $PageID = 'Big Research 1: Responsive Webpages vs Mobile Apps';
    break;  
    case 'galleries.php':
        $title = "Crystal's WEB120 Big Research Page";
        $logo = 'fa-home';
        $PageID = 'Big Research 2: Galleries';
    break; 
    case 'shoppingcarts.php':
        $title = "Crystal's WEB120 Big Research Page";
        $logo = 'fa-home';
        $PageID = 'Big Research 3: Shopping Carts';
    break;
    case 'flexbox.php':
        $title = "Crystal's WEB120 Big Research Page";
        $logo = 'fa-home';
        $PageID = 'Big Research 4: Flexbox';
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