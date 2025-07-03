// On every H1, if you click, you get an alert
const headline_h1 = document.getElementsByTagName("H1");

for (let i = 0; i < headline_h1.length; i++) {
    headline_h1[i].addEventListener("click", function() {
        alert("Das ist der Seitentitel.");
    });
}