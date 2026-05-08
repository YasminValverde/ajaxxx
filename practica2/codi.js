
window.onload = function () {
var peticio = new XMLHttpRequest();
peticio.onreadystatechange = function () {
if (this.readyState === 4 && this.status === 200) {
document.getElementById("resultat").innerHTML = this.responseText;
}
};
peticio.open("GET", "index.php?nom=miguel&edat=18", true);
peticio.send(); 

};
