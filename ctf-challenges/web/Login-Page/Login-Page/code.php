if (isset($_GET['passwd'])) {
        if (hash("md5", $_GET['passwd']) == '0e514198428367523082236389979035'){
            echo "<script>alert('$flag')</script>";
        } else {
            echo "<script>alert('Буруу байна!');</script>";
    }
}