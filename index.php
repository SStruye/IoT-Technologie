
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Date Aquisition</title>
</head>

<body>

    <div class = "topnav">
        <li><a href="#home" class="active">home</a></li>
        <li><a href="#contact" class="active">contact</a></li>
        <li><a href="#about" class="active">about</a></li>
    </div>

    <div>
        <div class = "sidenav">
        <li><button class="button"type="button" value="Sensor 2" onclick="loadSENS1(this.value)">Sensor 1 Only</button></li>
        <li><button class="button"type="button" value="Sensor 1" onclick="loadSENS2(this.value)">Sensor 2 Only</button></li>
        <li><button class="button"type="button" value="n/a" onclick="loadBOTH(this.value)">Both Sensors</button></li>
        </div>

        <div id = "Div_Table">
        </div>    
        
    </div>

    <script>
        function loadSENS1(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            document.getElementById("Div_Table").innerHTML = this.responseText;
        }
        xmlhttp.open("GET", "Dynamic_Table.php?q="+str, true);
        xmlhttp.send();
        }
        function loadSENS2(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            document.getElementById("Div_Table").innerHTML = this.responseText;
        }
        xmlhttp.open("GET", "Dynamic_Table.php?q="+str, true);
        xmlhttp.send();
        }
        function loadBOTH(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            document.getElementById("Div_Table").innerHTML = this.responseText;
        }
        xmlhttp.open("GET", "Dynamic_Table.php?q="+str, true);
        xmlhttp.send();
        }
    </script>

</body>

</html>