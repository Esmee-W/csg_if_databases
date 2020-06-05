<!DOCTYPE html>
<html>
    <body>
    <div class='middle'>
        <h2>type</h2>
        <form onclick="updateResultaat()">
            <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="type='Strooibaar'">strooi<br>
            <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="type='Smeerbaar'">smeer<br>
            <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="type='Drinkbaar'">drink<br>
        </form>
        <h2>soort</h2>
        <form onclick="updateResultaat()">
            <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Hagelslag'">hagelslag<br>
            <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Vlokken'">vlokken<br>
            <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Chunks'">chunks<br>
            <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Muisjes'">muisjes<br>
            <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Staafjes'">staafjes<br>
            <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Kleintjes'">kleintjes<br>
            <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Bebogeen'">bebogeen<br>
        </form>

    </div>
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
                    q += " where ";
                    eersteVoorwaardeGevonden = true;
                }
                else {
                    q += " and ";
                }
                q += '' + encodeURIComponent(eigenschappen[i].value) ;
            }
        }
        

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