<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<!--<meta http-equiv="refresh" content="2; url=webcam.html" />-->
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/fp.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="https://use.fontawesome.com/5a951e92da.js"></script>
<link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet">
<script src="js/script.js"></script>
</head>

 <body>

    <div class="header">
    <nav id="cssmenu" class="topnav">
       <a href="http://www.crystalcodes.io/web120/fp/index.php"><img src="https://fakeimg.pl/250x100/" class="logo" alt="logoplaceholder"></a><h1>Site Name</h1>
        <ul>
             <li><a href="#" target="_blank">Home</a></li>
             <li><a href="#">Menus</a></li>
             <li><a href="#">Settings</a></li>
             <li><a href="#">Contact</a></li>
        </ul> 
        </nav>
    </div>
     <div class="headerbg-image">
     
     
     </div>

   
<!-- END WRAPPER -->


<footer>
  <p><small>&copy; 2019 - <?=date('Y')?> by <a href="contactme.php">Crystal</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
<script>
    function myFunction() {
        var x = document.getElementById("cssmenu");
        if (x.className === "cssmenu") {
            x.className += " responsive";
        } else {
            x.className = "cssmenu";
        }
    }   
 </script>

</html>