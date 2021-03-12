let container = document.getElementById('caixa-principal');
let resultado = document.getElementById("resultado");
let div1 = document.getElementById('div1');
let div2 = document.getElementById('div2');
let div3 = document.getElementById('div3');
let div4 = document.getElementById('div4');
let div5 = document.getElementById('div5');
let div6 = document.getElementById('div6');
let div7 = document.getElementById('div7');
let div8 = document.getElementById('div8');
let div9 = document.getElementById('div9');

function reload(){
    window.location.reload();
}

let jogador2= {
    letra:'O',
    div1:false,
    div2:false, 
    div3:false,
    div4:false,
    div5:false,
    div6:false,
    div7:false,
    div8:false,
    div9:false,
}

let jogador1={
    letra:'X',
    div1:false,
    div2:false, 
    div3:false,
    div4:false,
    div5:false,
    div6:false,
    div7:false,
    div8:false,
    div9:false,
}


let ultimoAJogar=jogador1.letra;


/// checa se um dos jogadores venceu
function checaVitoria(){
    /// jogador 1 //////////////
    if(jogador1.div1 === jogador1.letra
        && jogador1.div2 === jogador1.letra
        && jogador1.div3 === jogador1.letra ){
        resultado.innerHTML= `Jogador ${jogador1.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador1.div4 === jogador1.letra
        && jogador1.div5 === jogador1.letra
        && jogador1.div6 === jogador1.letra ){
        resultado.innerHTML= `Jogador ${jogador1.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador1.div7 === jogador1.letra
        && jogador1.div8 === jogador1.letra
        && jogador1.div9 === jogador1.letra ){
        resultado.innerHTML= `Jogador ${jogador1.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador1.div1 === jogador1.letra
        && jogador1.div4 === jogador1.letra
        && jogador1.div7 === jogador1.letra ){
        resultado.innerHTML= `Jogador ${jogador1.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador1.div2 === jogador1.letra
        && jogador1.div5 === jogador1.letra
        && jogador1.div8 === jogador1.letra ){
        resultado.innerHTML= `Jogador ${jogador1.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador1.div3 === jogador1.letra
        && jogador1.div6 === jogador1.letra
        && jogador1.div9 === jogador1.letra ){
        resultado.innerHTML= `Jogador ${jogador1.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador1.div1 === jogador1.letra
        && jogador1.div5 === jogador1.letra
        && jogador1.div9 === jogador1.letra ){
        resultado.innerHTML= `Jogador ${jogador1.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador1.div3 === jogador1.letra
        && jogador1.div5 === jogador1.letra
        && jogador1.div7 === jogador1.letra ){
        resultado.innerHTML= `Jogador ${jogador1.letra} venceu!`;
        ultimoAJogar = '';
    }
//////////////////////////////////////////////////////
//// jogador 2/////////////////////////////////////
    if(jogador2.div1 === jogador2.letra
        && jogador2.div2 === jogador2.letra
        && jogador2.div3 === jogador2.letra ){
        resultado.innerHTML= `Jogador ${jogador2.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador2.div4 === jogador2.letra
        && jogador2.div5 === jogador2.letra
        && jogador2.div6 === jogador2.letra ){
        resultado.innerHTML= `Jogador ${jogador2.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador2.div7 === jogador2.letra
        && jogador2.div8 === jogador2.letra
        && jogador2.div9 === jogador2.letra ){
        resultado.innerHTML= `Jogador ${jogador2.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador2.div1 === jogador2.letra
        && jogador2.div4 === jogador2.letra
        && jogador2.div7 === jogador2.letra ){
        resultado.innerHTML= `Jogador ${jogador2.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador2.div2 === jogador2.letra
        && jogador2.div5 === jogador2.letra
        && jogador2.div8 === jogador2.letra ){
        resultado.innerHTML= `Jogador ${jogador2.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador2.div3 === jogador2.letra
        && jogador2.div6 === jogador2.letra
        && jogador2.div9 === jogador2.letra ){
        resultado.innerHTML= `Jogador ${jogador2.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador2.div1 === jogador2.letra
        && jogador2.div5 === jogador2.letra
        && jogador2.div9 === jogador2.letra ){
        resultado.innerHTML= `Jogador ${jogador2.letra} venceu!`;
        ultimoAJogar = '';
    }
    if(jogador2.div3 === jogador2.letra
        && jogador2.div5 === jogador2.letra
        && jogador2.div7 === jogador2.letra ){
        resultado.innerHTML= `Jogador ${jogador2.letra} venceu!`;
        ultimoAJogar = '';
    }
}
// troca o turno do jogador
function trocaTurno(){
    if(ultimoAJogar === jogador1.letra){
        ultimoAJogar = jogador2.letra;
        return
    }else if(ultimoAJogar === jogador2.letra){
        ultimoAJogar =jogador1.letra;
        return;
    }
}
/// Desenha e preenche as divs
container.addEventListener('click',function(e){
    let alvo = e.target;
    if(alvo === div1 && (!jogador1.div1 && !jogador2.div1) ){
        div1.innerHTML=ultimoAJogar;
        if(jogador1.letra === ultimoAJogar){
            jogador1.div1 =ultimoAJogar;
        }
        if(jogador2.letra === ultimoAJogar){
            jogador2.div1 =ultimoAJogar;
        }
        trocaTurno();
        checaVitoria();
    }
    if(alvo === div2 && (!jogador1.div2 && !jogador2.div2) ){
        div2.innerHTML=ultimoAJogar;
        if(jogador1.letra === ultimoAJogar){
            jogador1.div2 =ultimoAJogar;
        }
        if(jogador2.letra === ultimoAJogar){
            jogador2.div2 =ultimoAJogar;
        }
        trocaTurno();
        checaVitoria();
    }
    if(alvo === div3 && (!jogador1.div3 && !jogador2.div3) ){
        div3.innerHTML=ultimoAJogar;
        if(jogador1.letra === ultimoAJogar){
            jogador1.div3 =ultimoAJogar;
        }
        if(jogador2.letra === ultimoAJogar){
            jogador2.div3 =ultimoAJogar;
        }
        trocaTurno();
        checaVitoria();
    }
    if(alvo === div4 && (!jogador1.div4 && !jogador2.div4) ){
        div4.innerHTML=ultimoAJogar;
        if(jogador1.letra === ultimoAJogar){
            jogador1.div4 =ultimoAJogar;
        }
        if(jogador2.letra === ultimoAJogar){
            jogador2.div4 =ultimoAJogar;
        }
        trocaTurno();
        checaVitoria();
    }
    if(alvo === div5 && (!jogador1.div5 && !jogador2.div5) ){
        div5.innerHTML=ultimoAJogar;
        if(jogador1.letra === ultimoAJogar){
            jogador1.div5 =ultimoAJogar;
        }
        if(jogador2.letra === ultimoAJogar){
            jogador2.div5 =ultimoAJogar;
        }
        trocaTurno();
        checaVitoria();
    }
    if(alvo === div6 && (!jogador1.div6 && !jogador2.div6) ){
        div6.innerHTML=ultimoAJogar;
        if(jogador1.letra === ultimoAJogar){
            jogador1.div6 =ultimoAJogar;
        }
        if(jogador2.letra === ultimoAJogar){
            jogador2.div6 =ultimoAJogar;
        }
        trocaTurno();
        checaVitoria();
    }
    if(alvo === div7 && (!jogador1.div7 && !jogador2.div7) ){
        div7.innerHTML=ultimoAJogar;
        if(jogador1.letra === ultimoAJogar){
            jogador1.div7 =ultimoAJogar;
        }
        if(jogador2.letra === ultimoAJogar){
            jogador2.div7 =ultimoAJogar;
        }
        trocaTurno();
        checaVitoria();
    }
    if(alvo === div8 && (!jogador1.div8 && !jogador2.div8) ){
        div8.innerHTML=ultimoAJogar;
        if(jogador1.letra === ultimoAJogar){
            jogador1.div8 =ultimoAJogar;
        }
        if(jogador2.letra === ultimoAJogar){
            jogador2.div8 =ultimoAJogar;
        }
        trocaTurno();
        checaVitoria();
    }
    if(alvo === div9 && (!jogador1.div9 && !jogador2.div9) ){
        div9.innerHTML=ultimoAJogar;
        if(jogador1.letra === ultimoAJogar){
            jogador1.div9 =ultimoAJogar;
        }
        if(jogador2.letra === ultimoAJogar){
            jogador2.div9 =ultimoAJogar;
        }
        trocaTurno();
        checaVitoria();
    }
})