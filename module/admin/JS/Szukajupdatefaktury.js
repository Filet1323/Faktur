function getBillingForUpdate(str){
    var xhttp;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("updateBillingData").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "SzukajUpdatefaktury.php?key="+str, true);
    xhttp.send();
}
