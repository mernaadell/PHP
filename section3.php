<?php

?>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
<input type="text" name="username">
<input type="submit">
</form>
<?php
//global scope

$name="merna adel ragab";
function test(){
    echo $GLOBALS["name"];
}
test();

//predefied variables

//$_SERVER //tdy m3lmat 3n l env elii ana sh8al 3leha
echo $_SERVER['SERVER_NAME'];
echo $_SERVER["SERVER_ADDR"];

//get vs post
echo $_POST["username"];
if($_SERVER["REQUEST_METHOD"]=="POST") //check
{   echo $_POST["username"];
   echo $_REQUEST["username"]; //l attnen wa7ed
    echo "hello iam post";
}
?>