<!DOCTYPE HTML>
<meta charset="UTF-8">
<?php
  require("ataman.php");
  if (isset($_GET['baitag_bogd'])) {
    highlight_file(__FILE__);
    die();
  }
  if (isset($_GET['zura'])) {
    $var1 = $_GET['zura'];
    $var2 = 'fantastic';
    $var3 = preg_replace(
	    	"/$var2/", '', $var1);
    if ($var3 === $var2) {
      mash_nuuts_function();
    }
  }
?>

<html>
  <head>
    <title>Mash Nuuts</title>
  </head>
  <style>
  body {
  text-align:center;
  margin-top:300px;
  background-color: black;
  background-size: 200px;
  background-image: url("secret.gif");
  background-repeat: no-repeat;
  background-position: center;
  color: #00FF00;
  }
  </style>
  <body>
  <br><br>
    <h2> Үргэлжлэлийг Source кодноос ...</h2>
    <p><code>mash_nuuts_function()-руу орохыг зориорой</code></p>
    <a target="_blank" href="?baitag_bogd">?baitag_bogd гээд ордогдоо</a>

  </body>
</html>
