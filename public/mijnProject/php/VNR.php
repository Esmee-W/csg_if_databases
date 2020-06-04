<!DOCTYPE html>
<html>
    <body>

    <form onclick="updateResultaat()">
        <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="Strooibaar">strooi<br>
        <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="Smeerbaar">smeer<br>
        <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="Drinkbaar">drink<br>
    </form>
    <div id="uitvoer"> <!-- hier komt de uitvoer van de query -->
    </div>

    <script>
    function updateResultaat() {
        var q = '';
        var eigenschappen = document.getElementsByName("eigenschap");
        var eersteVoorwaardeGevonden = false;
        for (i = 0; i < eigenschappen.length; i++) {
            if (eigenschappen[i].checked) {
                if (!eersteVoorwaardeGevonden) {
                    q += " where type='";
                    eersteVoorwaardeGevonden = true;
                }
                else {
                    q += " and type='";
                }
                q += '' + encodeURIComponent(eigenschappen[i].value) + "'";
            }
        }
        document.getElementById("uitvoer").innerHTML = q;

        var xhttp;
        xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("uitvoer").innerHTML = xhttp.responseText;
            }
        }
        xhttp.open("GET", 'VNRdata.php?q='+q, true);
        xhttp.send();
    }
    </script>
    </body>
</html>