<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
	<title></title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Нэвтрэх хэсэг</title>
<form class="box" action="flag.php" method="get">
  <h1><b>Тавтай морил</b></h1>
  <input type="password" name="passwd" placeholder="Нууц үгээ оруулна уу">
  <input type="submit" value="Нэвтрэх"/>
  <a target="_blank" href="code.html"></a>
</form>
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


