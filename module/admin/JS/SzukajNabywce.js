function getNabywca(str){
    var xhttp;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("NabywcaList").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "SzukajNabywce.php?key="+str, true);
    xhttp.send();
}
