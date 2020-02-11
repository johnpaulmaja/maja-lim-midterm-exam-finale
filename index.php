<?php
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
?>
<html>
    <head>
        <title>  M&L </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    </head>
    <body>
                <div class="wrapper">
                        <div class="index"> <img src="img/logo.png" alt="" style="width:600px;height:300px;"> </div>
                        <div class="nav">
                          <ul class="nav-menu">
                            <li> <a href="index.php?navigation=home"> HOME </a> </li>
                            <li> <a href="index.php?navigation=technology"> TECHNOLOGY  </a> </li>
                            <li> <a href="index.php?navigation=movies"> MOVIES  </a> </li>
                            <li> <a href="index.php?navigation=sports"> SPORTS  </a> </li>
                            <li> <a href="index.php?navigation=entertainment"> ENTERTAINMENT  </a> </li>
                            <li> <a href="index.php?navigation=contact"> CONTACT US </a> </li>
                          </ul>
                        </div>

                        <div class="content">
                        <?php
                        switch($navigation){
                            case 'technology':
                            require_once 'technology.php';
                            break;
                            case 'movies':
                            require_once 'movies.php';
                            break;
                            case 'sports':
                            require_once 'sports.php';
                            break;
                            case 'entertainment':
                            require_once 'entertainment.php';
                            break;
                            case 'contact':
                            require_once 'contact.php';
                            break;
                            default:
                            require_once 'home.php';
                            break;
                        }
                        ?>
                        </div>

                        <div id="footer">
                        <div class="index"> <div class="font-title"> M&L </div> | College News </div>
                        </div>
    </div>
    </body>
</html>
