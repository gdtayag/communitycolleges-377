function search() {
    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status = 200) {
                document.getElementById("text").innerHTML = this.responseText;
            }
        };
    xhttp.open("", "php/index.php?q=", true);
    xhttp.send();
}
