<!DOCTYPE html>
<html>
<body>

<div id="demo">


<button type="button"
onclick="loadDoc('data.php', myFunction)">Smeerbaar
</button>
</div>
<div id="strooi">


<button type="button"
onclick="loadDoc('data2.php', myFunction2)">Strooibaar
</button>
</div>


<script>
function loadDoc(url, cFunction) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
function myFunction(xhttp) {
  document.getElementById("demo").innerHTML =
  xhttp.responseText;;
}
function myFunction2(xhttp) {
  document.getElementById("strooi").innerHTML =
  xhttp.responseText;;
}
</script>
</body>