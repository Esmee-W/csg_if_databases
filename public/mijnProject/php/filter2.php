<!DOCTYPE html>
<html>
<body>
<input type="checkbox" id="smeerbaar" onclick="loadDoc('data.php', smeer)" >
<label for="smeerbaar">Smeerbaar</label>
<p id="producten"></p>
</body>
<script>
function loadDoc(url, cFunction) {
  var xhttp;
  xhttp = new XMLHttpRequest ();
  xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
          cFunction(this);
      }
  };
  xhttp.open("GET", url , true);
  xhttp.send(); 
}
function myFunction1(xhttp) {
    document.getElementById("producten").innerHTML = xhttp.responseText;;
}
</script>
</body>
