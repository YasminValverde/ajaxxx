
window.onload = function () {
var link = document.querySelector('a');
for (let i = 0; i < link.length; i++) {
   link[i].;
    
}
function enviar(e) {
    e.preventDefault();
    var peticio = new XMLHttpRequest();
    peticio.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
        document.getElementById("resultat").innerHTML = this.responseText;
    }
    };
    peticio.open("GET", this.href, true);
    peticio.send(); 
    
}
};
