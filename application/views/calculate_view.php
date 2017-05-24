<html>
<head>
<tittle> webpage calculator </tittle>
<style type="text/css">
#calculators {
	width:300px;height:250px;}
#btn{width:100%;height:40px;font-size:20px;}
	/*margin: 10% auto;
	width:430px;
	border:1px solid #000;*/
}
</style>
</head>

<body>
<div id ="calculators">
		<form  method="post" action="/calculate/count">
			
			
			<table id ="calculators" border=2>
			<tr>
			<td><input id="btn" type=button value="MC" OnClick="calc.M.value=''"></td>
<td><button name="num1" value="0">0</button></td>
<td><button name="num1" value="1">1</td>
<td><input id="btn" type=button value="2" OnClick="calc.display.value+='2'"></td>
<td><input id="btn" type=button value="+" OnClick="calc.display.value+='+'"></td>
</tr>
<tr>
<td><input id="btn" type=button value="MS" OnClick="calc.M.value=calc.display.value"></td>
<td><input id="btn" type=button value="3" OnClick="calc.display.value+='3'"></td>
<td><input id="btn" type=button value="4" OnClick="calc.display.value+='4'"></td>
<td><input id="btn" type=button value="5" OnClick="calc.display.value+='5'"></td>
<td><input id="btn" type=button value="-" OnClick="calc.display.value+='-'"></td>
</tr>
<tr>
<td><input id="btn" type=button value="MR" OnClick="calc.display.value=calc.M.value"></td>
<td><input id="btn" type=button value="6" OnClick="calc.display.value+='6'"></td>
<td><input id="btn" type=button value="7" OnClick="calc.display.value+='7'"></td>
<td><input id="btn" type=button value="8" OnClick="calc.display.value+='8'"></td>
<td><input id="btn" type=button value="x" OnClick="calc.display.value+='*'"></td>
</tr>
<tr>
<td><input id="btn" type=button value="M+" OnClick="calc.M.value=(Number(calc.M.value))+(Number(calc.display.value))"></td>
<td><input id="btn" type=button value="9" OnClick="calc.display.value+='9'"></td>
<td><input id="btn" type=button value="±" OnClick="calc.display.value=(calc.display.value==Math.abs(calc.display.value)?-(calc.display.value):Math.abs(calc.display.value))">

</td>
<td><input id="btn" type=button value="=" OnClick="calc.display.value=eval(calc.display.value)"></td>
<td><input id="btn" type=button value="/" OnClick="calc.display.value+='/'"></td>
</tr>
<tr>
<td><input id="btn" type=button value="1/x" OnClick="calc.display.value=1/calc.display.value"></td>
<td><input id="btn" type=button value="." OnClick="calc.display.value+='.'"></td>
<td><input id="btn" type=button value="x2" OnClick="calc.display.value=Math.pow(calc.display.value,2)"></td>
<td><input id="btn" type=button value="√" OnClick="calc.display.value=Math.sqrt(calc.display.value)"></td>
<td><input id="btn" type=button value="C" OnClick="calc.display.value=''"></td>
</tr>
</table>
</form>
</div>
</body>
</html>

