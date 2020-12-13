<?php
session_start();
?>
<?php 
//$shadow_news = file_get_contents("https://shadowdev.cf/global_news.php");
//echo $shadow_news;
?>
<head>
    <link rel="icon" type="image/png" href="https://i.imgur.com/gQHRhdA.png" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#343A40">
    <?php 
    //https://shadow.conectapp.mx/public/ask?redurl=https://shadow.conectapp.mx/demo/ok&appID=vip-436886882810614764773305990&force=discord
    if ($_SESSION["appID"] == "vip-436886882810614764773305990") {
    ?>
    <style>
        #heade {
            min-height:50px;
            background-color: #FFC107;
        }
    </style>
    <?php
    } else {
    ?>
    <style>
        #heade {
            min-height:50px;
	        background-color: #343A40;
        }
    </style>
    <?php 
    }
    ?>
</head>
<body>
    <div id="heade">
        <center>
            <br />
            <table>
              <tr>
                <?php
                if ($_SESSION["appID"] == "vip-436886882810614764773305990") {
                ?>
                <th><img src="https://i.imgur.com/gQHRhdA.png" alt="" width="64" /> </th>
                <th><h2>&nbsp;&nbsp;<font color="white"> QuackHost auth</font></h2></th><small><i><font color="gray">Powered by Shadow's auth</font></i></small>
                
                <?php
                } else {
                ?>
                <th><img src="https://i.imgur.com/gQHRhdA.png" alt="" width="64" /> </th>
                <th><h2>&nbsp;&nbsp;<font color="white"> Shadow's Auth</font></h2></th>
                <?php
                }
                ?>
              </tr>
            </table>
            <p>&nbsp</p>
        </center>
    </div>

<div class="container">
    <p>&nbsp;</p>
    <p>&nbsp;</p>