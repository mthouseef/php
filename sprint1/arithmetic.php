<?php


$a=array(50,15,12,4,2);


echo add($a);
echo"<br>";
echo sub($a);
echo "<br>";
echo mul($a);



function add($a)
{
	$sum=0;
	foreach($a as $key=>$value)
	{

		$sum+=$value;
}
         return $sum;
}


function sub($a)
{
	
	foreach($a as $key=>$value)
	{
        if ($key==0)
        	{$sum=$value;}
		else $sum-=$value;
}
         return $sum;
}



function mul($a)
{
	$sum=1;
	foreach($a as $key=>$value)
	{

		$sum*=$value;
}
         return $sum;
}





?>