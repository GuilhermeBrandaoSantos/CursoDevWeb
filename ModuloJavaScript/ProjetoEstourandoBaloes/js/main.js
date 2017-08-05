function iniciaJogo() {
	var nivel_jogo = document.getElementById('nivel-jogo').value;

	window.location.href = 'jogo.html?' + nivel_jogo;
}	