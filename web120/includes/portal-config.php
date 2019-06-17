<?php

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;

switch(THIS_PAGE){
    
    case 'index.php':
        $title = "Crystal's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        $logo_color = ' style="color:#003366"';
    break;
    
    case 'contactme.php':
        $title = "Crystal's WEB120 Contact Page";
        $logo = 'fa-paper-plane-o';
        $PageID = 'Contact Crystal';
        $logo_color = ' style="color:#34DDDD"';
    break;
    
    case 'flowchart.php':
        $title = "Crystal's WEB120 Flowchart Page";
        $logo = 'fa-home';
        $PageID = 'Flowchart';
        $logo_color = ' style="color:##028482"';
    break;
    
    case 'aia.php':
        $title = "Crystal's WEB120 AIA Page";
        $logo = 'fa-universal-access';
        $PageID = 'AIA';
        $logo_color = ' style="color:#99CC99"';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = 'Welcome';
        $logo_color = '';
        
}

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['http://www.crystalcodes.io/web120/fp/template.php'] = "FP Template";
$nav1['contactme.php'] = "Contact Crystal";


/*function that generates links & keep highlight on active page.
<li><a href="index.php">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Crystal</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>*/

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

    
}

?>