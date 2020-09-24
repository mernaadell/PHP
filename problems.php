<?php


function prob1($s1){
	if(substr($s1, 0,2)=="if" &&strlen($s1)>2){
		echo "yes";
	}
	else
		echo "no";
}

echo prob1("if hy");

function prob2($s1,$position){
	return substr($s1,0,$position).substr($s1, $position+1,strlen($s1));
}

echo prob2("hellomerna",6);
echo "<br>";
function prob3($s1){
	$s2=substr($s1, 0,1);
	echo $s2;
	echo "<br>";
	$s3=substr($s1, strlen($s1)-1,strlen($s1));
	echo $s3;
	echo "<br>";
	$s1=$s3.substr($s1, 1,strlen($s1)-2).$s2;
	return $s1;
}

echo prob3("abcd");

function prob4($num){
	return $num%3==0||$num%7==0 ? 1 : 0;
}

echo var_dump(prob4(3));