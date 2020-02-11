
<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.npr.org/rss/rss.php?id=1008");//XML page URL

 $content = $domOBJ->getElementsByTagName("item");
?>
    <br/> <br/>
   <div class="font-title"> <div class="index">COLLEGE ENTERTAINMENT NEWS </div></div>


<?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $encoded = $data->getElementsByTagName("encoded")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
   $creator = $data->getElementsByTagName("creator")->item(0)->nodeValue;

   ?>

    <html>
    <head> <title> Entertainment | M&L </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:800i|Oswald|Teko:600&display=swap" rel="stylesheet">
    </head>
    <body>
                  <div class="whole-article">
                    <div class="article-title"> <u><?php echo $title;?></u> </div>
                                <ul class="article-content">
                                    <li> <b> Link: </b><br> <a href="<?php echo $link;?>" target="blank"> <?php echo $link;?>  </a> </li>
                                    <li> <b> Published Date:</b><br> <?php echo $pubDate ?></li>
                                    <li> <b> Author:</b><br> <?php echo $creator ?></li>

                                </li>
                                </ul>
                                <HR>
                                <div class="article-description"> <?php echo $encoded; ?> </div> <br/>
                            </li>
                  </div>
 <?php
 }
?>

</body>
</html>
