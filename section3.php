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
//cookies ad example
$_background="#000";
if (count($_COOKIE)>0){ //is cookiew enable or not in my browser

    echo "cookie enable";

}
if($_SERVER["REQUEST_METHOD"]=="POST"){
   
    $_body=$_POST["color"];

    setcookie("background",$_body,time()+3600,"/");
}

if(isset($_COOKIE["background"])){
    
    $_body=$_COOKIE["background"];
    echo $_body."hi";
}
else{

    $_body=$_background;
    echo $_body."hi";
}
//$_SESSION
session_start();
$_SESSION["name"]="merna;";
$_SESSION["last"]="adel";
print_r ($_SESSION);

//filters
//filter_var(variable,filter type,option)
//is number or not
$input=$_POST["username"];
if(filter_var($input,FILTER_VALIDATE_INT)==true){
    echo "yes";
}else{
    echo "no";
}

$inputafter=filter_var($input,FILTER_SANITIZE_NUMBER_INT);
echo $inputafter;

//date

echo date("Y-m-d");

date_default_timezone_set("Asia/Riyadh");

$time= time();

echo date("Y-m-d h:i:s",$time)
?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?> "style="background:<?php echo $_body ?>" method="POST">
<input type="text" name="username">
<input type=color name="color">
<input type="submit">
</form>
<?php


?>