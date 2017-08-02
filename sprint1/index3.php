<?php


$x=100;
$y=60;


echo add($x,$y);
echo"<br>";
echo sub($x,$y);
echo "<br>";
echo mul($x,$y);
echo "<br>";
echo divi($x,$y);
echo "<br>";
echo mod($x,$y);




function add($x,$y)
{
       $z=$x+$y;
	echo"Sum of 100 and 60 is $z";

		
}
        


function sub($x,$y)
{
	 $f=$x-$y;
	echo"Difference of 100 and 60 is $f";
	
}



function mul($x,$y)
{
	 $m=$x*$y;
	echo"Product of 100 and 60 is $m";
}


function divi($x,$y)
{
	 $d=$x/$y;
	echo"Division of 100 and 60 is $d";
}


function mod($x,$y)
{
       $mo=$x%$y;
	echo"Mod of 100 and 60 is $mo";	
}





?>