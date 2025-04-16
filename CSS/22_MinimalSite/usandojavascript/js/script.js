// script.js

// Cargar el archivo header.html en el contenedor con id 'header'
fetch('header.html')
    .then(response => response.text())
    .then(data => document.getElementById('header').innerHTML = data);

// Cargar el archivo footer.html en el contenedor con id 'footer'
fetch('footer.html')
    .then(response => response.text())
    .then(data => document.getElementById('footer').innerHTML = data);
