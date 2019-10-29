<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Калькулятор на php</title>
<link rel="stylesheet" href="styles/colors.css"/>
<script>
	function send(event){
		event.preventDefault();
		fetch("math.php",{method:"post", body:new FormData(document.forms[0])}).then(response=>response.text()).then(text=>{document.getElementById("result").innerHTML=text;})
	}
</script>
</head>

<body bgcolor="#C0C0C0">
	<form>
	<input type="number" name="i1" class="size color_gray" value="0"/>
	<select name="select" style="width:100px; height:22px" class="color_gray">
    	<option  selected = "selected">Действие</option>
    	<option >+</option>
    	<option >-</option>
    	<option >*</option>
    	<option >/</option>
    </select>
	<input type="number" name="i2" class="size color_gray" value="0"/>
	<br/>
	<br/>
	<div id="result">Здесь будет результат</div>
	<br/>
	<input type="submit" value="Расчитать" class="color_gray" onclick="send(event)"/>
	</form>
	</body>
</html>