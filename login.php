<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$c_i = $_POST['q'];

if($c_i != null && $c_i == 123)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['c_id'] = $c_i;
        echo "<script>alert('登入成功!');location='indexview.php';</script>";
}
else
{
        echo "<script>alert('登入失敗!');location='index.html';</script>";
}

?>