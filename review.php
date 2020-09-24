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
echo "<br>";
echo "<br>";
$str=addcslashes("merna adel", "a");
echo $str;
echo "<br>";
$str= addslashes("merna'mera'");//tt7at 2abl ay qoutes tt7at 2abl ay 7aga m7taga esape
echo $str;
echo "<br>";
$str=bin2hex("merna");
echo $str;
echo "<br>";
$str=chop("merna adel","adel");
echo $str;
echo "<br>";
echo chr(109);
echo "<br>";
echo chunk_split("merna",1,".");//split each har i string 3la hasab l rakam elii ha7to
echo "<br>";
$str = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($str);
echo "<br>";
$str = "Hello world!";
echo convert_uuencode($str);
echo "<br>";
//print_r( count_chars("merna"));array b kol l 7rof w yktablii count 7arf7arf

$str="iam so sad";
print_r(explode(" ", $str));
//fprintf bktab gwa l file b3d ma afta7o
print_r (get_html_translation_table());
echo "<br>";
echo hex2bin("4865");
echo "<br>";
$arr=array("merna","ael","ragab");
echo join(" ",$arr);//aw implode
echo "<br>";
echo lcfirst("Hello");
echo "<br>";
echo ltrim(" merna"," ");
echo md5("hello");
echo ord("h");//asi value
echo "<br>";
$str = "Hello World";
echo str_pad($str,20,".");//pad with20 char
echo "<br";
echo str_repeat("Wow",13);
echo str_replace("world","Peter","Hello world!");
echo "<br";
echo str_shuffle("Hello World");//random shuffle all char in string
echo "<br>";
print_r(str_split("Hello"));
echo "<br>";
echo str_word_count("merana aa dd");
echo "<br>";
echo strcasecmp("merna", "Merna");//0 equal zy b3d
echo strcmp("merna", "Merna");//mesh zy b3d
echo "<br";
echo stripos("I love php, I love php too!","PHP");//position ofphp
echo "<br>";
echo strtolower("Hello");
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