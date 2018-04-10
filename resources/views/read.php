<?php
$filename = "c:\info.txt";
$fd = fopen ($filename, "r");
$contents = fread ($fd,filesize ($filename));
 
fclose ($fd);
$newline = "\n";
$splitcontents = explode($newline, $contents);
$counter = "";
?>
<font color="blue" face="arial" size="4">Complete File Contents</font>
<hr>
<?php
echo $contents;
?>
 
 
 
 
<font color="blue" face="arial" size="4">Split File Contents</font>
<hr>
<table border="1">
<?php
foreach ( $splitcontents as $color )
{
 
$counter = $counter+1;
#echo " $color\n
echo "<tr>";
$delimiter = "\t";
$splitcontents1 = explode($delimiter, $color);
 
foreach ( $splitcontents1 as $value )
{
if($value == null)
{ echo " "; }
echo "<td> $value </td>";
}
echo "</tr>";
}
 
?>
</table>