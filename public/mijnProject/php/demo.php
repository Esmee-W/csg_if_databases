<!DOCTYPE html>
<html>
<body>

<input type="checkbox" onclick="loadDoc(smeer)" id="smeerbaar">
<label for="smeerbaar">Smeerbaar</label>
<input type="checkbox" onclick="loadDoc(strooi)" id="strooibaar">
<label for="strooibaar">Strooibaar</label>



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
    var smeercheck = document.getElementById("smeerbaar")
    if(smeercheck.checked==true) {
        document.getElementById("producten").hidden=false;
        document.getElementById("producten").innerHTML =
        xhttp.responseText;
    } if(smeercheck.checked==false) {
        document.getElementById("producten").hidden=true;
    }    
    
    
}
function strooi(xhttp) {
  var strooicheck = document.getElementById("strooibaar")
    if(strooicheck.checked==true) {
        document.getElementById("producten").hidden=false;
        document.getElementById("producten").innerHTML =
        xhttp.responseText;
    } if(strooicheck.checked==false) {
        document.getElementById("producten").hidden=true;
    }   
}
</script>
</body>
</html>
