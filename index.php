
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Date Measurement</title>
</head>

<body>

    <div class = "topnav">
        <li><a href="#home" class="active">home</a></li>
        <li><a href="#contact" class="active">contact</a></li>
        <li><a href="#about" class="active">about</a></li>
    </div>

    <div class="container">
        <div class = "sidenav">
        <div class = "sidebuttons">
        <li><button class="button"type="button" value="Sensor 2" onclick="loadSENS1(this.value)">Sensor 1 Only</button></li>
        <li><button class="button"type="button" value="Sensor 1" onclick="loadSENS2(this.value)">Sensor 2 Only</button></li>
        <li><button class="button"type="button" value="n/a" onclick="loadBOTH(this.value)">Both Sensors</button></li>
        </div>
        <li class="in"><input  type="text" placeholder="Search value sensor 1..." onkeyup="showVAL1(this.value)"></li>
        <li class="in"><input  type="text" placeholder="Search value sensor 2..." onkeyup="showVAL2(this.value)"></li>   
        </div>

        <div class ="Div_Table" id = "Div_Table_ID">
        </div>    
        
    </div>



</body>

<script>
        function loadSENS1(str) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("Div_Table_ID").innerHTML = this.responseText;
            }
            xmlhttp.open("GET", "Dynamic_Table.php?q="+str, true);
            xmlhttp.send();
        }
        ////////////////////////////////////////////////////////////////////////////
        function loadSENS2(str) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("Div_Table_ID").innerHTML = this.responseText;
            }
            xmlhttp.open("GET", "Dynamic_Table.php?q="+str, true);
            xmlhttp.send();
        }
        ////////////////////////////////////////////////////////////////////////////
        function loadBOTH(str) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("Div_Table_ID").innerHTML = this.responseText;
            }
            xmlhttp.open("GET", "Dynamic_Table.php?q="+str, true);
            xmlhttp.send();
        }
        ////////////////////////////////////////////////////////////////////////////
        function showVAL1(str) {
            if (str.length == 0) {
                document.getElementById("Div_Table_ID").innerHTML = "";
                return;
            } else {
                const arr = ["1", str];
                const strarr = JSON.stringify(arr);

                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function() {
                document.getElementById("Div_Table_ID").innerHTML = this.responseText;
                }
            xmlhttp.open("GET", "Dynamic_Table_Single.php?q=" + strarr);
            xmlhttp.send();
            }
        }
        ////////////////////////////////////////////////////////////////////////////
        function showVAL2(str) {
            if (str.length == 0) {
                document.getElementById("Div_Table_ID").innerHTML = "";
                return;
            } else {
                const arr = ["2", str];
                const strarr = JSON.stringify(arr);

                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function() {
                document.getElementById("Div_Table_ID").innerHTML = this.responseText;
                }
            xmlhttp.open("GET", "Dynamic_Table_Single.php?q=" + strarr);
            xmlhttp.send();
            }
        }        
</script>
</html>