<!DOCTYPE html>
<html>
<body>

<input type="checkbox" onclick="loadDoc(smeer)" id="smeerbaar">
<label for="smeerbaar">Smeerbaar</label>




<p id="producten"></p>

<script>
function loadDoc(cFunction) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
  };
  xhttp.open("GET", "data.php", true);
  xhttp.send();
}
function smeer(xhttp) {
  document.getElementById("producten").innerHTML =
  xhttp.responseText;
}
</script>
</body>
</html>
