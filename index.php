<!doctype html>

<html lang="en">

<head>

    <title>Joopson AS Catalogue No. J327</title>
    
        <!-- Favico -->
    <link rel="icon" href="fav.ico" type="image/ico"/>

        <!-- Meta tags -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/> 
    <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- PT Mono -->
    <link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>

        <!-- Include CSS -->
    <link rel="stylesheet" type="text/css" href="style.css"/>
    
    <!-- Include jQuery latest -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
    
    <!-- Scripts -->

    <script type="text/javascript">

    $(document).ready(function(){
        
        $('.wrap').click(function() {
            $(this).toggleClass("big");    
        });

   });

    </script>
    
</head>

<body>
    
    <!-- img class="mark" src="mark.png" -->
    
    <div class="break"><p class="title">Joopson AS <br>Catalogue No. J327 <br>
        
        <a target="_blank" href="https://drive.google.com/file/d/1sXH_-0Gi54nBoHkwy8XxKX_IljGu0nkr/view?usp=sharing">parabellum.zip (90.8 mb)</a>
        
    </p></div>
    
    <?php

        $dirname = "images/0/";
        $images = glob($dirname."*.jpg");
        shuffle($images);
        foreach($images as $image) {
        echo '<div class="wrap"><img src="'.$image.'" /></div><br/>';
        }
    
    ?>
    
        <div class="margin"></div>

</body>  

</html> 