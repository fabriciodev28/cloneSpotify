// Músicas
let musicas = [];
musicas['top50globais'] = [
    {
        artista: 'The Weeknd',
        imagem: 'img/theWeeknd.jpg',
        nomeMusica: 'Blinding Lights',
        musica: 'top50global/Blinding Lights.mp3'
    },
    {
        artista: 'SZA',
        imagem: 'img/sza.jpg',
        nomeMusica: 'Kill Bill',
        musica: 'top50global/Kill Bill.mp3'
    }
]
// Tag audio
let audio = document.getElementById('audio');

// Chamada da função atualizarBarra() conforme a música for tocando
audio.addEventListener('timeupdate', atualizarBarra);

//Funções

function exibirMusica(indice1,indice2){
    //exibir rodape
    let rodape = document.getElementById('rodape');
    rodape.style.display = 'block';

    audio.src = musicas[indice1][indice2].musica
    audio.className = indice2
    document.getElementById('nomeMusica').innerHTML = musicas[indice1][indice2].nomeMusica
    document.getElementById('artista').innerHTML = musicas[indice1][indice2].artista
    document.getElementById('faixa').src = musicas[indice1][indice2].imagem

    document.getElementById('play').style.display = 'none'
    document.getElementById('pause').style.display = 'inline'
    audio.play()
}

function tocarMusica(){
    document.getElementById('play').style.display = 'none'
    document.getElementById('pause').style.display = 'inline'
    audio.play()
}

function pausarMusica(){
    document.getElementById('play').style.display = 'inline'
    document.getElementById('pause').style.display = 'none'
    audio.pause()
}

function proximaMusica(){
    let faixa = document.getElementById('faixa').alt
    let musica = Number(audio.className)
    musica += 1
    if(musica >= musicas.length){
        musica = musicas[faixa].length - 1
    }
    exibirMusica(faixa,musica)

}

function musicaAnterior(){
    let faixa = document.getElementById('faixa').alt
    let musica = Number(audio.className)
    musica -= 1
    if(musica < 0){
        musica = 0
    }
    exibirMusica(faixa,musica)
}

function atualizarBarra(){
    let barra = document.getElementById('barraProgress')
    barra.style.width = Math.floor((audio.currentTime / audio.duration) * 100) + '%'
    let tempoDecorrido = document.getElementById('inicio')
    tempoDecorrido.innerHTML = converterTempo(Math.floor(audio.currentTime))
    // Script para exibir no html os minutos de duração da música
    let duracaoDaMusica = document.getElementById('fim')
    duracaoDaMusica.innerHTML = converterTempo(Math.floor(audio.duration))
}

function converterTempo(segundos){
    let minutos = Math.floor(segundos/60)
    let campoSegundos = segundos % 60
    if(campoSegundos < 10){
        campoSegundos = '0' + campoSegundos
    }

    return minutos + ':' + campoSegundos
}