<?php
    if(isset($_POST['submit1'])){
        $value=$_POST['input1'];
        $from=$_POST['from1'];
            if($from==0){
                echo '<script language="JavaScript">'."\n".'alert("Please select a base unit");'."\n";
                echo '</script>';
            }
            else{
                    switch ($from){
                        case 1:
                            $fromu="NPR";$npr=1;$eur=0.0087;$gbp=0.0075;$jpy=1.04;$usd=0.0093;$nok=0.077;$sek=0.082;$krw=10.57;break;
                        case 2:
                            $fromu="EUR";$npr=115.36;$eur=1;$gbp=0.689106;$jpy=135.9915;$usd=1.270297;$nok=8.069166;$sek=9.124832;$krw=1200.91;break;
                        case 3:
                            $fromu="GBP";$npr=133.78;$eur=1.451156;$gbp=1;$jpy=197.344821;$usd=1.843399;$nok=11.709615;$sek=13.241551;$krw=1742.707752;break;
                        case 4:
                            $fromu="JPY";$npr=0.96;$eur=0.007353;$gbp=0.005067;$jpy=1;$usd=0.009341;$nok=0.059336;$sek=0.067099;$krw=8.830291;break;
                        case 5:
                            $fromu="USD";$npr=107.53;$eur=0.787217;$gbp=0.542476;$jpy=107.054886;$usd=1;$nok=6.352189;$sek=7.183227;$krw=945.376767;break;
                        case 6:
                            $fromu="NOK";$npr=13.01;$eur=0.123929;$gbp=0.0854;$jpy=16.853229;$usd=0.157426;$nok=1;$sek=1.130827;$krw=148.827575;break;
                        case 7:
                            $fromu="SEK";$npr=12.17;$eur=0.109591;$gbp=0.07552;$jpy=14.903452;$usd=0.139213;$nok=0.884308;$sek=1;$krw=131.608928;break;
                        case 8:
                            $fromu="KRW";$npr=0.095;$eur=0.000832;$gbp=0.000573;$jpy=0.114069;$usd=0.000959;$nok=0.006714;$sek=0.007592;$krw=1;break;
                    }
                    echo "<br><br><table align=center>"
                            ."<tr><td><h3> ",$value," ",$fromu," equivalent is </h3></td></tr>"
                            . "<tr align=right><td><u> ",(double)($value*$npr),"</u> Nepali Rupee</td></tr>"
                            . "<tr align=right><td><u> ",(double)($value*$eur),"</u> Euro</td></tr>"
                            . "<tr align=right><td><u> ",(double)($value*$gbp),"</u> Pond Sterling</td></tr>"
                            . "<tr align=right><td><u> ",(double)($value*$jpy),"</u> Japanese Yen</td></tr>"
                            . "<tr align=right><td><u> ",(double)($value*$usd),"</u> US Dollar</td></tr>"
                            . "<tr align=right><td><u> ",(double)($value*$nok),"</u> Norwegian Krone</td></tr>"
                            . "<tr align=right><td><u> ",(double)($value*$sek),"</u> Swedish Krona</td></tr>"
                            . "<tr align=right><td><u> ",(double)($value*$krw),"</u> South Korean Won</td></tr></table>";                    
            }           
}