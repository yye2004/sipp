<html>
<script>
var fontSize = 1;
function zoomIn() {
	fontSize += 0.1;
	document.body.style.fontSize = fontSize + "em";
}
function zoomOut() {
	fontSize -= 0.1;
	document.body.style.fontSize = fontSize + "em";
}
</script>

<center>
<input type="button" value="++" onClick="zoomIn()"/>
<input type="button" value="--" onClick="zoomOut()"/>
<button id= "color">Warna</button>
</center>

<script>
document.getElementById('color').onclick = changeColor;
var currentColor = "lightslategrey";
function changeColor() {
		if(currentColor == "lightslategrey"){
			document.body.style.color = "royalblue";
			currentColor = "royalblue";
		} else { 
			document.body.style.color = "lightslategrey";
			currentColor = "lightslategrey";
		}
	}
</script>
</html>