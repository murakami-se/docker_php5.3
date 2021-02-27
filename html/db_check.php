<?php 
$link = mysqli_connect('mysql', 'user', 'user', 'app');

if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
    echo "データベースの接続に成功しました。\n";
}
?>
