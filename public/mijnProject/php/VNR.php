<!DOCTYPE html>
<html>
    <body>

    <form onclick="updateResultaat()">
        <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="type='Strooibaar'">strooi<br>
        <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="type='Smeerbaar'">smeer<br>
        <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="type='Drinkbaar'">drink<br>
        <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Hagelslag'">hagel<br>
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