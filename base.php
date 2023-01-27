<!DOCTYPE html>
<html>
    <head>
        <title>Autoplanta</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <meta name = "description" content = "The Autoplanta website">
        <link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
    </head>
    <body>
        <nav>
            <div class = "topNav" id = "myTopNav">
                <h3 class = "topNavItem"><strong><a href = "index.php">Home</a></strong></h3>
                <h3 class = "topNavItem"><strong><a href = "statuslog.php">Status Log</a></strong></h3>
                <h3 class = "topNavItem"><strong><a href = "community-calendar.php">Schedule/Calendar</a></strong></h3> 
                <h3 class = "topNavItem"><strong><a href = "stream.php">Livestream</a></strong></h3>
				<h3 class = "topNavItem"><strong><a href = "/log">Photo Log</a></strong></h3>
                <h3 class = "topNavItem"><strong><a href = "#" class = "menuButton" onclick = "toggleNav()">&#x2630;</a></strong></h3>
				
            </div>
        </nav>

        <div class = "topNavBuffer"></div>
        
        <div class = "wrapper">
            
            <img src = "Images/Header/goodworksep.png" class = "logo">
            <h2 class = "district">Automation and growth<br> </h2>

            <h3 class = "date">
                <?php
                    echo date("l\, F jS\, Y") . "   </br>";
                ?>
            </h3>

        </div>
        

        <script>
            function toggleNav() {
                console.log("Hit");
                var x = document.getElementById("myTopNav");
                console.log(x);
                if (x.className === "topNav") {
                    x.className = "topNavResponsive";
                } else {
                    x.className = "topNav";
                }
            }
        </script>
    </body>
</html> 
