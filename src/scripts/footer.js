fetch("footer.html")
.then(resposne => resposne.text())
.then(footer => document.querySelector('#footer-container').innerHTML = footer);

