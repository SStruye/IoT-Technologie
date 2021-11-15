
<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Date Measurement</title>
</head>

<body>

    <div class = "topnav">
        <li><a href="#home" class="active">home</a></li>
        <li><a href="#contact" class="active">contact</a></li>
        <li><a href="#about" class="active">about</a></li>
    </div>

    <div class="content-sidebar">

        <div class = "sidebar">
            <div class="sidelist"> 

            <table class ="sidetable">
                <tr>
                <td>sensor 1 </td><td><label class="switch"><input class="toggle" type="checkbox" id="chk1" onclick="LoadSens()"><span class="slider round"></span></label></td></tr>                        
                <tr>
                <td>sensor 2 </td><td><label class="switch"><input class="toggle" type="checkbox" id="chk2" onclick="LoadSens()"><span class="slider round"></span></label></td></tr>                          
            </table>

            <div class="inputs">
            <input type="text" placeholder="search value sensor 1..." onkeyup="showVAL1(this.value)"></input>
            <input type="text" placeholder="search value sensor 2..." onkeyup="showVAL2(this.value)"></input> 
            </div>

            </div>
        </div>
        <div class ="content" id = "Div_Table_ID">
        </div>          
    </div>
</body>

<script>
    
    function LoadSens(){
        var chk1 = document.getElementById("chk1");
        var chk2 = document.getElementById("chk2");
        if(chk1.checked == false && chk2.checked == false){
            document.getElementById("Div_Table_ID").innerHTML = ""; 
        }
        else{
            if (chk1.checked && chk2.checked) {
            str = "n";
            
        }
        else if(chk1.checked){
            str = "Sensor 2";
        }
        else{
            str = "Sensor 1";          
        }


        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
        document.getElementById("Div_Table_ID").innerHTML = this.responseText;
        }
        xmlhttp.open("GET", "Dynamic_Table.php?q=" +str, true);
        xmlhttp.send();
        }


        
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