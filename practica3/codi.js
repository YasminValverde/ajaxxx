
window.onload = function () {
var link = document.querySelectorAll('a');
for (let i = 0; i < link.length; i++) {
    link[i].addEventListener('click', enviar);
}
function enviar(e) {
    e.preventDefault();
    var url = this.href;
    var peticio = new XMLHttpRequest();
    peticio.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("detalls").innerHTML = this.responseText;
        }
    };
    peticio.open("GET", url, true);
    peticio.send();
}
};
