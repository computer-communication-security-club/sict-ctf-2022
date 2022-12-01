<html>
<title>I'm Secret Shop Owner, Hello My Favourite Customer</title>
<style>
body{
	background-color:black;
	color: #fff;
	font-family: 'Trade Winds', cursive;
}
input{
	font-family: 'Trade Winds', cursive;
}
input.submit{
	background: #000;
	color: #fff;
}

</style>
<link href='http://fonts.googleapis.com/css?family=Trade+Winds' rel='stylesheet' type='text/css'>
<body style="text-align: center; margin-top:130px; font-size:40px;">
<?php

session_start();
include('secret-shop.php');

function random_items(){
	GLOBAL $all_items;
	$_SESSION['sand_king'] = time();
	return $all_items[mt_rand(0,count($all_items))];
}

$MAX = 100;
$SECONDS = 5;

if(@$_SESSION['nevermore'] === 0)
	die("Мундаг байлаа... Таны флаг бол энэ --> sictCTF{Wow_great!_y0u_are_n0t_account_buyer_LoL!!!}");

if(empty($_SESSION['nevermore']))
	$_SESSION['nevermore'] = $MAX;

if(empty($_SESSION['mirana']))
	$_SESSION['mirana'] = random_items();

if(@$_POST['dollar']){
	if((time() - $_SESSION['sand_king']) > $SECONDS){
		$_SESSION['nevermore'] = $MAX;
		$_SESSION['mirana'] = null;
		$_SESSION['sand_king'] = time();
		die("<h1 style='text-align:center;color:#00FF00;'>Хэтэрхий удаан байна ӨӨ 😅<br><br>Өөрөө <img src='herald.png' font-size:20px;> цолтой юу?</h1>");
	}

	$right = ((int)$_POST['dollar'] === (int)$_SESSION['mirana']['price']) ? true : false;

	if($right)
		$_SESSION['nevermore'] -= 1;
	else{
		$_SESSION['nevermore'] = $MAX;
		$_SESSION['mirana'] = random_items();
		die("<h1 style='text-align:center;margin-top:200px;font-size:100px;color:#00FF00'>Буруу байлаа гэж !!!</h1>");
	}

	$_SESSION['mirana'] = random_items(); // next mirana
}

$mirana = $_SESSION['mirana'];

echo "Дахиад {$_SESSION['nevermore']}-г таачихвал хожлоо шүү<br />";

$color = array('Orange','Yellow','Red','Green');
$color = $color[rand(0,count($color)-1)];

echo "<h1 style='color: {$color};'>{$mirana['name']}</h1><img src='{$mirana['img']}' /><br />";

echo "<form style='font-style:bold;'method=POST action='./'><h3>Хэдэн <input type=text name=dollar id=dollar size=10 /> $-н үнэтэй вэ?</h3><br /><input type=submit value='Hudaldaj Awah' class=submit /></form>";

?>
</body>
</html>

<script>
  
  document.onkeydown = function(e) {
    if(e.keyCode == 123) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
     return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
     return false;
    }      
 }
 
</script>