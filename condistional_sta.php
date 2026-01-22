<?php
$a=10;
$b=200;
$c=150;

if($a>$b && $a>$c)
{	
	echo($a." is maximum number");
}
elseif($b>$a && $b>$c)
{
	echo($b." is maximum number");	
}
else
{
	echo($c." is maximum number");
}
?>