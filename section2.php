
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
file_put_contents("mena.txt","hi",FILE_APPEND);
//copy &rename

copy("mena.txt","yehia.txt");//y3ml file gded fe nfs l 7agat files oly
rename("mena.txt","mera.txt");//file and dirs (tany parameter da l path bta3 l file w asmo)

//path info
//ttl3 array fe l info
print_r (pathinfo(__FILE__));//print r de bttb3 array mynf3sh b echo //lw 3wza atba3 7aga mo3yna a7otha fe l paramter l tai

//unlink
//delete files
unlink("mera.txt");

//scandir
//scan kol l files elii gwa l dir ashofhom 3obara 3an eh
$files=scandir("mero");

print_r($files);

//fopen()

// "r" (Read only. Starts at the beginning of the file)
// "r+" (Read/Write. Starts at the beginning of the file)
// "w" (Write only. Opens and clears the contents of file; or creates a new file if it doesn't exist)
// "w+" (Read/Write. Opens and clears the contents of file; or creates a new file if it doesn't exist)
// "a" (Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist)
// "a+" (Read/Write. Preserves file content by writing to the end of the file)
// "x" (Write only. Creates a new file. Returns FALSE and an error if file already exists)
// "x+" (Read/Write. Creates a new file. Returns FALSE and an error if file already exists)

$handle=fopen("merna.txt","r+");

//fread()

$content=fread($handle,filesize("merna.txt"));

echo $content;

//fwrite()

fwrite($handle,"hello");

//fseek()//y7rkly l pointer 2abl ma aktab

// SEEK_SET - Set position equal to offset bytes.
// SEEK_CUR - Set position to current location plus offset.
// SEEK_END - Set position to end-of-file plus offset.

fseek($handle,2,SEEK_SET);
fwrite($handle,"he");

fclose($handle);
?>