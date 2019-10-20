<?php
//練習問題１
function print_pre($str){
    echo '<pre>';
    print_r($str);
    echo '<pre>';
}

if(!empty($_GET['get_send'])){
    echo $_GET['tel'];
}
if(!empty($_POST['post_send'])){
    echo $_POST['tel'];
}
print_pre($_REQUEST);

?>

<form class="" action="" method="get">
    <input type="text" name="tel" value="">
    <input type="submit" name="get_send" value="送信">
</form>
<form class="" action="" method="post">
    <input type="text" name="tel" value="">
    <input type="submit" name="post_send" value="送信">
</form>