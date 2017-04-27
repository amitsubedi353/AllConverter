<?php
if(isset($_POST['submit5']))
{
$val=$_POST['input5'];
if(!preg_match('/^[0-9.-]/',$val))
{
 echo '<script language="JavaScript">'."\n".'alert("Invalid input");'."\n";
 echo "window.location=('temp.php');\n";
 echo '</script>';
}
$from=$_POST['from5'];
if($from==0)
{
echo '<script language="JavaScript">'."\n".'alert("Please select a base unit");'."\n";
echo '</script>';
}
else
{
switch ($from)
{
case 1:
$fromu="Celcius";$c=$val;$f=(double)(($val*9/5)+32);$k=(double)($val+273);break;
case 2:
$fromu="Fahrenheit";$c=(($val-32)*5/9);$f=$val;$k=(double)((($val-32)*5/9)+273);break;
case 3:
$fromu="Kelvin";$c=(double)($val-273);$f=(double)((($val-273)*9/5)+32);$k=$val;break;
}
 echo "<br><br><table align=center>
 <tr><td><h3> ",$val," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",$c,"</u> Celcius</td></tr>
 <tr align=right><td><u> ",$f,"</u> Fahrenheit</td></tr>
 <tr align=right><td><u> ",$k,"</u> Kelvin</td></tr></table>";
}
}
?>
