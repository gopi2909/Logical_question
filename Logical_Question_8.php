<?php
	function connect($k,$s)
	{
$n=8;
$arr_str= str_split($s);
$crypt_str=array();
$contain_int=count($arr_str);
if($n==$contain_int or $contain_int==14)
{
for($i=0;$i<$contain_int;$i++)	
$crypt_str[$i]=chr(ord($arr_str[$i])+$k);
$inc_str=implode($crypt_str);
echo "The num of letter rotate=".$k." <br/> ".$s."<br>".$inc_str."<br/><br/>";
}
}
connect(3,"infiniti");
connect(4,"airline-domain");
?>
