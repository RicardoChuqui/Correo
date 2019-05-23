
function Buscar() {
    var xmlhttp = new XMLHttpRequest();
    var url = "buscarCorreo.php";
    xmlhttp.onreadystatechange=function() {
     if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
     var array = JSON.parse(xmlhttp.responseText);
     var i;
     var out = "<table border='1'>";
     for(i = 0; i < array.length; i++) {
     out+=" <tr><td>"+
     array[i].fecha +
     "</td><td>"+
     array[i].remitente +
     "</td><td>" +
     array[i].asunto+
     "</td><td>" +
     array[i].leer
     "</td></tr>";
     }
     out += "</table>";
     document.getElementById("resultado").innerHTML = out;
     }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send(); 
    }
