<!DOCTYPE html>
<html>
    <head>
        <title>Producten</title>
        <link rel="stylesheet" href="css/design.css">
    </head>

    <body>
        <?php include 'php/header.php';?>
        <h1 class='titel'>
            Producten
        </h1>
        <div class='middlefilter'>
            <h2>Type</h2>
            <form onclick="updateResultaat()">
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="type='Strooibaar'">Strooibaar<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="type='Smeerbaar'">Smeer<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="type='Drinkbaar'">Drinken<br>
            </form>
            <h2>Soort</h2>
            <form onclick="updateResultaat()">
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Hagelslag'">Hagelslag<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Vlokken'">Vlokken<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Chunks'">Chunks<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Muisjes'">Muisjes<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Staafjes'">Staafjes<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Kleintjes'">Kleintjes<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="soort='Bebogeen'">Bebogeen<br>
            </form>
            <h2>Smaak</h2>
            <form onclick="updateResultaat()">
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="smaak='Pure chocolade'">Pure chocolade<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="smaak='Melk chocolade'">Melk chocolade<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="smaak='Witte chocolade'">Witte chocolade<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="smaak='Mix'">Mix van smaken<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="smaak='Extra pure chocolade'">Extra pure chcolade<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="smaak='Bosvruchten'">Bosvruchten<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="smaak='Vruchten'">Vruchten<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="smaak='Anijs'">Anijs<br>
                <INPUT TYPE="checkbox" NAME="eigenschap" VALUE="smaak='Caramel'">Caramel<br>
            </form>

        </div>
        <div id="uitvoer" class='middleresultaten'> <!-- hier komt de uitvoer van de query -->
            <form onload="updateResultaat()"></form>
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
            xhttp.open("GET", 'php/VNRdata.php?q='+q, true);
            xhttp.send();
        }
        </script>
        
    </body>
</html>