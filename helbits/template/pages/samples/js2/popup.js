// Obter o botão "Visualizar"
var visualizarBtn = document.querySelector(".visualizarBtn");

// Obter o pop-up
var popup = document.getElementById("popup");

// Obter o elemento <span> que fecha o pop-up
var closeBtn = document.querySelector(".popup .close");

// Quando o usuário clica no botão "Visualizar", abrir o pop-up
visualizarBtn.onclick = function() {
  popup.style.display = "block";
}

// Quando o usuário clica no <span> (x) ou no botão "Comprar", fechar o pop-up
closeBtn.onclick = function() {
  popup.style.display = "none";
}

// Quando o usuário clica fora do pop-up, fechar o pop-up
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
}
