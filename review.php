<?php

echo "hi";
//phpinfo();
$s1='Tomorrow I \'ll learn PHP global variables.';
$s2='This is a bad command : del c:\\*.*';

echo $s1."<br>".$s2;
echo "<br>";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	echo "hi";
	echo $_POST["username"];

}

//echo $_SERVER['HTTP_CLIENT_IP'];
echo basename(__FILE__);//ygblii asm l file w ya5od l path
//or
echo basename($_SERVER['PHP_SELF']);

echo "Your User Agent is :" . $_SERVER ['HTTP_USER_AGENT'];

$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."<br>";
echo 'Host : '.$url['host']."<br>";
echo 'Path : '.$url['path']."<br>";

//anhy elii sh8al

if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https is enabled';
}
else
{
echo 'http is enabled'."\n";
}

echo "hi";
//redirect me
//header('Location: https://www.w3resource.com/');

//validate email
echo "<br> ";
$input="merna@gmail.com";
echo $input;
if(filter_var($input,FILTER_VALIDATE_EMAIL)==true){
	echo "yes";
}
else
{
	echo "no";
}

//mmkn aktab l html gwa l php fe string

$a=1000;
$b=1200;
$c=1400;
echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Salary of Mr. A is</td> <td>$a$</font></td></tr> 
<tr> <td><font color=blue>Salary of Mr. B is</td> <td>$b$</font></td></tr>
<tr> <td><font color=blue>Salary of Mr. C is</td> <td>$c$</font></td></tr>
</table>";

echo  date("l, dS F, Y, h:ia", filemtime(__FILE__));//last modified in  file

//count the file lines
echo "<br>";
$file = basename($_SERVER['PHP_SELF']); 
//echo file($file);//The file() reads a file into an array.
//print_r(file($file));
$no_of_lines = count(file($file)); //3ml count ll array

echo "There are $no_of_lines lines in $file"."\n";

echo phpversion();
//delay

echo date('h:i:s') . "\n";
  // sleep for 5 seconds
  sleep(5);
  // wake up
  echo date('h:i:s')."\n";


  print_r(error_get_last()); //get last error
  echo "<br>";
  $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";//l url elii ana feh
  echo $full_url."\n";
  //------------------------------------basic problems------------------
  function prob1($num1,$num2){
  	if($num1==$num2){
  		return ($num1+$num2)*3;
  	}
  	else{
  		return $num1+$num2;
  	}

  }

  echo prob1(2,2);

  function test($x, $y) 
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(test(30, 0));//info 3n l variable da no3o eh
//--------------------------------------strings



?>
<!DOCTYPE html>
<html>
<head>
	<title>mera</title>
</head>
<body>
	<form action="<?php echo $_SERVER["PHP_SELF"]  ?>" method="post">
		<input type="text" name="username">
		<input type="submit" name="clic">
	</form>

</body>
</html>