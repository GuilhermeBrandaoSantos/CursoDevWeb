/**
 *
 */

var timerId = null; //armazena a chamada da funcao timeout

function iniciaJogo() {

	var url = window.location.search; // Retorna a parte querystring de uma URL

	var	nivel_jogo = url.replace("?", "");	//Pega um elemento da URL e o substitui de acordo com a sua preferencia 

	var tempo_segundos = 0;

	if (nivel_jogo == 1) {	// 1 Facil --> 120 segundos 	//
		tempo_segundos = 180;								//
	}														//	
															//	
	if (nivel_jogo == 2) {	// 2 Normal --> 60 segundos 	// Essa condição pega o nivel que foi passado e armazenado
		tempo_segundos = 90;								// via url compara esse valor para determinar a quantidade
	}														// de tempo que o usuario tera em cada nivel
															//
	if (nivel_jogo == 3) {	// 3 Dificil --> 30 segundos 	//
		tempo_segundos = 45;								//
	}														//

	// O innerHTML recupera a tag e insere uma tag ou valor dentro da mesma
	document.getElementById('cronometro').innerHTML = tempo_segundos;

	// quantidade baloes para preencher o cenario
	var	qntd_baloes = 220;
	cria_baloes(qntd_baloes);

	// Inserindo dentro ta tag a quantidade de baloes inteiros ou estourados
	document.getElementById('baloes_inteiros').innerHTML = qntd_baloes;
	document.getElementById('baloes_estourados').innerHTML = 0;

	contagem_tempo(tempo_segundos + 1); // Chamada da função que realiza a contagem do cronometro
}

function contagem_tempo(segundos) {

	segundos = segundos - 1;	// Decrementando o valor dos segundos

	if (segundos == -1) {		//
		clearTimeout(timerId);	// Essa condição foi usada para que a contagem nao fique negativa
		game_over();			// e quando chegar no 0 chama a funcção game_over que avida o jogador
		return false;			// que o jogo foi finalizado
	}							//

	//Inserindo os valores enquanto sao decrementados
	document.getElementById('cronometro').innerHTML = segundos;
	timerId = setTimeout("contagem_tempo("+segundos+")", 1000); // Contagem regressiva feita segundo por segundo
}

function game_over() {
	remove_eventos_baloes();
	// alert("Você perdeu !!! Não estourou todos os balões.") // Aviso que o jogo terminou
}

function cria_baloes(qntd_baloes) {

	// Laço usado para preencher o cenario com os baloes
	for (var i = 1; i <= qntd_baloes; i++) {
		
		var	balao = document.createElement("img");	// Cria um elemento, neste caso a Tag IMG do HTML
		balao.src = 'imagens/balao_azul_pequeno.png';	// Insrindo uma imagem 
		balao.style.margin = '3px';    // Aplicando estilos
		balao.id = 'balao' + i;    // Adiciona um ID diferente a cada execução do loop
		balao.onclick = function () {estourar(this)}	// This referencia o proprio elemento
		document.getElementById('cenario').appendChild(balao);
	}
}

function estourar(pega_id) {

	var id_balao = pega_id.id;	// Recupero a propriedade ID do elemento pega_id que se auto referencia na função 
								// cria_baloes linha 69
	document.getElementById(id_balao).setAttribute("onclick","");	// Limpando o evento onlclick para que quando
																	// clicado no balao novamente, a contagem nao continue
	document.getElementById(id_balao).src = 'imagens/balao_azul_pequeno_estourado.png';	// Subistituindo o atributo
																						// src do elemento
	pontuacao(-1);
}																						


function pontuacao(acao) {
	
	var baloes_inteiros = document.getElementById('baloes_inteiros').innerHTML;
	var baloes_estourados = document.getElementById('baloes_estourados').innerHTML;

	baloes_inteiros = parseInt(baloes_inteiros);	//Recupera a string e tranforma ela em inteiro
	baloes_estourados = parseInt(baloes_estourados);

	baloes_inteiros = baloes_inteiros + acao;
	baloes_estourados = baloes_estourados - acao;

	document.getElementById('baloes_inteiros').innerHTML = baloes_inteiros;
	document.getElementById('baloes_estourados').innerHTML = baloes_estourados;

	situacao_jogo(baloes_inteiros);
}

function situacao_jogo(baloes_inteiros) {
	if (baloes_inteiros == 0) {
		alert('Parabens !!! Você estourou todos os balões.');
		parar_jogo();
	}
}

function parar_jogo(){
	clearTimeout(timerId);
}

function remove_eventos_baloes() {
    var i = 1; //contado para recuperar balões por id
    
    //percorre o elementos de acordo com o id e só irá sair do laço quando não houver correspondência com elemento
    while(document.getElementById('balao'+i)) {
        //retira o evento onclick do elemnto
        document.getElementById('balao'+i).onclick = '';
        i++; //faz a iteração da variávei i
    }
}