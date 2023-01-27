async function carregar(id){
    
    let dados = id.split('%0A');
    
    id = 'Loteria: ' + dados[0] + '%0ABolão: ' + dados[1] + '%0ANº Concurso: ' + dados[2] + '%0AValor da Cota: ' + dados[3];

    let nomeDescricao   = dados[0];
    let bolao           = dados[1];
    let concurso        = dados[2];
    let valorCota       = dados[3];

    document.getElementById('bolao').innerHTML = 'Bolão: <strong>' + bolao + '</strong>';
    document.getElementById('valorCota').innerHTML = 'Valor da Cota: <strong>' + valorCota + '</strong>';
    document.getElementById('text').value = id;
 
}