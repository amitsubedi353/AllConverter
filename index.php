<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="header">
	<p><h3 align="center">My Converter App </h3></p>
</div>
<div id="wrapper">
	
    <div id="area1">
    <h2>Currency</h2><br/>
    <form method="POST" action="currency.php" >
        <input type="text" name="input1" placeholder="Enter Currency"/><br/><br/>
	<strong>From</strong><br/><br/>
	<select name="from1">
            <option value=0>--select--</option>
            <option value=1>Nepali Rupee(NPR)</option>
            <option value=2>Euro(EUR)</option>
            <option value=3>Pound Sterling(GBP)</option>
            <option value=4>Japanese Yen(JPY)</option>
            <option value=5>US Dollar(USD)</option>
            <option value=6>Norwegian Krone(NOK)</option>
            <option value=7>Swedish Krona(SEK)</option>
            <option value=8>South Korean Won(KRW)</option>
	</select><br/><br/>
        <input type = "Submit" name = "submit1" value = "Convert"/>
    </form>
    </div>
	
    <div id="area2">
     <h2>Area</h2><br/>
     <form method="POST" action="area.php" >
    <input type="text" name="input2" placeholder="Enter Area"><br/><br/>
	<strong>From</strong><br/><br/>
	<select name="from2">
            <option value=0>--select--</option>
            <option value=1>cm2</option>
            <option value=2>m2</option>
            <option value=3>Acre</option>
            <option value=4>Feet2</option>
            <option value=5>Hectares</option>
            <option value=6>Miles2</option>
            <option value=7>Yards2</option>
            <option value=8>Ares</option>
	</select><br/><br/>
       <input type = "Submit" name = "submit2" value = "Convert"/></form>
    </div>
	<div id="area3">
    <h2>Length</h2><br/>
    <form method="POST" action="length.php" >
    <input type="text" name="input3" placeholder="Enter Length"><br/><br/>
    <strong>From</strong><br/><br/>
    <form>
        <select name="from3">
            <option value=0>--select--</option>
            <option value=1>Centimeter</option>
            <option value=2>Meter</option>
            <option value=3>Kilometer</option>
            <option value=4>Feet</option>
            <option value=5>Inch</option>
            <option value=6>Miles</option>
            <option value=7>Yards</option>
	</select><br/><br/>
        <input type = "Submit" name = "submit3" value = "Convert"/></form>
        </div>
	<div id="area4">
    <h2>Volume</h2><br/>
    <form method="POST" action="volume.php" >
    <input type="text" name="input4" placeholder="Enter Volume"><br/><br/>
	<strong>From</strong><br/><br/>
	<select name="from4">
            <option value=0>--select--</option>
            <option value=1>cm3</option>
            <option value=2>m3</option>
            <option value=3>Feet3</option>
            <option value=4>Gallons(UK)</option>
            <option value=5>Gallons(US)</option>
            <option value=6>Inches3</option>
            <option value=7>Litres</option>
            <option value=8>Yards3</option>
	</select><br/><br/>
        <input type = "Submit" name = "submit4" value = "Convert"/>
        </form>
    </div>
	
    <div id="area5">
    <h2>Temperature</h2><br />
    <form method="POST" action="temperature.php" >
    <input type="text" name="input5" placeholder="Enter Temperature"><br/><br/>
	<strong>From</strong><br/><br/>
	<select name="from5">
            <option value=0>--select--</option>
            <option value=1>Celcius</option>
            <option value=2>Fahrenheit</option>
            <option value=3>Kelvin</option>
	</select><br/><br/>
       <input type = "Submit" name = "submit5" value = "Convert"/>
    </form>
    </div>
	
    <div id="area6">
    <h2>Weight</h2><br/>
    <form method="POST" action="weight.php" >
    <input type="text" name="input6" placeholder="Enter Weight"><br/><br/>
	<strong>From</strong><br/>
	<br/>
    <select name="from6">
            <option value=0>--select--</option>
            <option value=1>mg</option>
            <option value=2>g</option>
            <option value=3>kg</option>
            <option value=4>Tonne</option>
            <option value=5>Grains</option>
            <option value=6>Ounces</option>
            <option value=7>Ponds</option>
            <option value=8>Stones</option>
	</select><br/><br/>
    <input type = "Submit" name = "submit6" value = "Convert"/>
    </form>
    </div>
</div>
</body>
</html>

