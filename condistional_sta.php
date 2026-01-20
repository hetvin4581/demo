<?php
$a=20;
$b=10;
$c=50;

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