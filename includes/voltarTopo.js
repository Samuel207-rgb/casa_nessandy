// Pegando o botão
var mybutton = document.getElementById("topButton");
// Mostra o botão quando o usuário rolar 20px para baixo a partir do topo da página
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// Quando o usuário clicar no botão, rola a página para o topo suavemente
function topFunction() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}