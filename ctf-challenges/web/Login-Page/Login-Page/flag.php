<?php
$flag = "sictCTF{php_h@sH_c0ll1s1on_@tt@cK!!!}";
if (isset($_GET['passwd'])) {

        if (hash("md5", $_GET['passwd']) == '00e45653718969294213009554265803'){
            echo "<style>body{text-align:center;margin-top:200px;font-size:50px;font-weight:bold;background-color:black;color:#00FF00;}</style><h1>Амжилттай. Та үнэхээр мундаг юм аа ^^ <br>Энэ бол таны туг :</h1>".$flag;
        } else {
            echo "<style>body{text-align:center;margin-top:300px;font-size:100px;font-weight:bold;background-color:black;color:#00FF00;}</style>Ийм амархан орохгүй шүү ^.^";
    }
}
?>
