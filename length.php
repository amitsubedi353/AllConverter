<?php
if(isset($_POST['submit3']))
{
$val=$_POST['input3'];
if(!preg_match('/^[0-9.]/',$val))
{
 echo '<script language="JavaScript">'."\n".'alert("Invalid input");'."\n";
 echo "window.location=('length.php');\n";
 echo '</script>';
}
$from=$_POST['from3'];
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
$fromu="Centimeter";$cm=1;$me=0.01;$km=0.00001;$ft=0.3280839;$in=0.39370078;$mi=0.000006213;$ya=0.010936132;break;
case 2:
$fromu="Meter";$cm=100;$me=1;$km=0.001;$ft=3.280839;$in=39.370078;$mi=0.00062137;$ya=1.0936132;break;
case 3:
$fromu="Kilometer";$cm=100000;$me=1000;$km=1;$ft=3280.839;$in=39370.078;$mi=0.6213;$ya=1093.6132;break;
case 4:
$fromu="Feet";$cm=30.48;$me=0.3048;$km=0.0003048;$ft=1;$in=12;$mi=0.00018939;$ya=0.33333;break;
case 5:
$fromu="Inches";$cm=2.54;$me=0.0254;$km=0.0000254;$ft=0.083333;$in=1;$mi=0.0000157828;$ya=0.027778;break;
case 6:
$fromu="Miles";$cm=160934.4;$me=1609.344;$km=1.609344;$ft=5280;$in=63360;$mi=1;$ya=1760;break;
case 7:
$fromu="Yards";$cm=91.44;$me=0.9144;$km=0.0009144;$ft=3;$in=36;$mi=0.000568181;$ya=1;break;
}
 echo "<br><br><table align=center>
 <tr><td><h3> ",$val," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",(double)($val*$cm),"</u> Centimeter</td></tr>
 <tr align=right><td><u> ",(double)($val*$me),"</u> Meters</td></tr>
 <tr align=right><td><u> ",(double)($val*$km),"</u> Kilometers</td></tr>
 <tr align=right><td><u> ",(double)($val*$in),"</u> Inches</td></tr>
 <tr align=right><td><u> ",(double)($val*$ft),"</u> Feet</td></tr>
 <tr align=right><td><u> ",(double)($val*$mi),"</u> Miles</td></tr>
 <tr align=right><td><u> ",(double)($val*$ya),"</u> Yards</td></tr></table>";
}
}
?>
