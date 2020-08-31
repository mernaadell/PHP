
<?php
//include vs require
//require "section1.php";// l page elii 3mltlha require ttnfz
// <!-- require_once "section1.php"  law alraedy m3mlo requrie mt3mlosh tay -->
//include "section1.php";
//include_once "section1.php";
//file system

$file="/opt/lampp/htdocs/php_course/merna.txt";
//echo dirname(__FILE__); //ytba3 l dir elii ana feh now

$is= is_writable($file);
echo "// <br>".$is;

$put=file_put_contents($file,"hello from my txt file");
echo "..".$put;

if(file_exists($file) ){
    echo "<br> ".$file." exist";
    file_put_contents($file,"i love you merna");
}
else{
    echo "<br> sorry";
}
$dir="mayar";
if(is_dir($dir)){ //fe dir asmo mayar wala la
    echo "\n".$dir." exist";
    file_put_contents($file,"i love you merna");
    rmdir($dir);//remove
    echo "\n removed";
}
else{
    mkdir($dir);
}
echo "\n";
echo dirname(__FILE__);//l dir bta3 l file elii ana sh8ala 3leh
echo "\n";
echo __DIR__;//hwa hwa
echo "\n";
echo dirname(__FILE__,2);//yrg3nii 5atwte l wara
echo "\n";
echo basename(__FILE__);//asm l file elii ana feh bya5od path
echo "\n";
echo basename(__FILE__,".php");//mn 8er .php
chmod($file,0444);//read only al8eh b 0777
echo "\n";
$i= is_writable("merna.txt");
echo "hh".$i;
chmod("merna.txt",0777);
file_put_contents("mena.txt","hi",FILE_APPEND)
?>