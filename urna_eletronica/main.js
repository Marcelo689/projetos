let candidatos=[
{
    nome:'politico1',
    img:'img/car1.jpg',
    numero:1564
},
{
    nome:'politico2',
    img:'img/car2.jpg',
    numero:1565
},
{
    nome:'politico3',
    img:'img/car3.jpg',
    numero:1566
},
{
    nome:'politico4',
    img:'img/car4.jpg',
    numero:1567
},
{
    nome:'erik',
    img:'img/erik.png',
    numero:6412
},
]

let confirmacao =false;

//Declarando botoes e adicionando os eventos

let botao1 = document.getElementById('1');
let botao2 = document.getElementById('2');
let botao3 = document.getElementById('3');
let botao4 = document.getElementById('4');
let botao5 = document.getElementById('5');
let botao6 = document.getElementById('6');
let botao7 = document.getElementById('7');
let botao8 = document.getElementById('8');
let botao9 = document.getElementById('9');
let botao0 = document.getElementById('0');


let branco= document.getElementById('branco');
let corrige= document.getElementById('corrige');
let confirma= document.getElementById('confirma');

botao1.addEventListener('click',botao1f);
botao2.addEventListener('click',botao2f);
botao3.addEventListener('click',botao3f);
botao4.addEventListener('click',botao4f);
botao5.addEventListener('click',botao5f);
botao6.addEventListener('click',botao6f);
botao7.addEventListener('click',botao7f);
botao8.addEventListener('click',botao8f);
botao9.addEventListener('click',botao9f);
botao0.addEventListener('click',botao0f);

branco.addEventListener('click',brancoF);
corrige.addEventListener('click',corrigeF);
confirma.addEventListener('click',confirmaF);

//funcoes dos botoes

function botao1f(){
    if(allow){
    monitor.innerHTML += botao1.innerText;
    digitar();
    }
}
function botao2f(){
    if(allow){
    monitor.innerHTML += botao2.innerText;
    digitar();
    }
}
function botao3f(){
    if(allow){
    monitor.innerHTML += botao3.innerText;
    digitar();
    }
}
function botao4f(){
    if(allow){
    monitor.innerHTML += botao4.innerText;
    digitar();
    }
}
function botao5f(){
    if(allow){
    monitor.innerHTML += botao5.innerText;
    digitar();
    }
}
function botao6f(){
    if(allow){
    monitor.innerHTML += botao6.innerText;
    digitar();
    }
}
function botao7f(){
    if(allow){
    monitor.innerHTML += botao7.innerText;
    digitar();
    }
}
function botao8f(){
    if(allow){
    monitor.innerHTML += botao8.innerText;
    digitar();
    }
}
function botao9f(){
    if(allow){
    monitor.innerHTML += botao9.innerText;
    digitar();
    }
}
function botao0f(){
    if(allow){
    monitor.innerHTML += botao0.innerText;
    digitar();
    }
}

function brancoF(){
monitor.innerHTML = "Deseja realmente votar em branco?se sim Digite Confirma";
allow = false;
}
function corrigeF(){
monitor.innerHTML ='_ _ _ _';
allow=true;
}

function confirmaF(){
    //verifica se esta confirmando o voto
if(monitor.innerHTML === "FIM"){
    allow =false;
    setTimeout(iniciaUrna,5000);
    monitor.innerHTML="Uma nova votação será iniciada em 5 segundos";
    return;
}
if(monitor.innerHTML === "Candidato inexistente,pressione corrige e digite o número novamente"){
    allow=false;
    return;
}
if(monitor.innerHTML.length == 67 || monitor.innerHTML.length == 62){
monitor.innerHTML = "FIM";
allow=false;
return;
}else
    //verifica se votou branco
if(monitor.innerHTML=== "Deseja realmente votar em branco?se sim Digite Confirma"){
    monitor.innerHTML= 'FIM';
    allow=false;
    return;
}else
//mostra o candidato
if(
monitor.textContent == candidatos[0].numero ||
monitor.textContent == candidatos[1].numero ||
monitor.textContent == candidatos[2].numero ||
monitor.textContent == candidatos[3].numero ||
monitor.textContent == candidatos[4].numero
){
    if(monitor.textContent == candidatos[0].numero){
        let candidato =document.createElement('img');
        candidato.src=candidatos[0].img;

        monitor.innerHTML =""
        monitor.appendChild(candidato);
        monitor.innerHTML+=candidatos[0].nome;
        monitor.innerHTML+= " Pressione confirma para continuar";
        allow=false;
        confirmacao=true;
    }else
    if(monitor.textContent == candidatos[1].numero){
        let candidato =document.createElement('img');
        candidato.src=candidatos[1].img;

        monitor.innerHTML =""
        monitor.appendChild(candidato);
        monitor.innerHTML+=candidatos[1].nome;
        monitor.innerHTML+= " Pressione confirma para continuar";
        allow=false;
        confirmacao=true;
    }else
    if(monitor.textContent == candidatos[2].numero){
        let candidato =document.createElement('img');
        candidato.src=candidatos[2].img;

        monitor.innerHTML =""
        monitor.appendChild(candidato);
        monitor.innerHTML+=candidatos[2].nome;
        monitor.innerHTML+= " Pressione confirma para continuar";
        allow=false;
        confirmacao=true;
    }else
    if(monitor.textContent == candidatos[3].numero){
        let candidato =document.createElement('img');
        candidato.src=candidatos[3].img;

        monitor.innerHTML =""
        monitor.appendChild(candidato);
        monitor.innerHTML+=candidatos[3].nome;
        monitor.innerHTML+= " Pressione confirma para continuar";
        allow=false;
        confirmacao=true;
    }else
    if(monitor.textContent == candidatos[4].numero){
        let candidato =document.createElement('img');
        candidato.src=candidatos[4].img;

        monitor.innerHTML =""
        monitor.appendChild(candidato);
        monitor.innerHTML+=candidatos[4].nome;
        monitor.innerHTML+= " Pressione confirma para continuar";
        allow=false;
        confirmacao=true;
        console.log(monitor.innerHTML.length);
    }



   
}else
    //verifica se o candidato existe
if(
monitor.textContent != candidatos[0].numero &&
monitor.textContent != candidatos[1].numero &&
monitor.textContent != candidatos[2].numero &&
monitor.textContent != candidatos[3].numero &&
monitor.textContent != candidatos[4].numero 
){
    monitor.innerHTML = "Candidato inexistente,pressione corrige e digite o número novamente";
    allow=false;
    return;
}



}

//criando controle do monitor

let monitor = document.getElementById('monitor');
let allow =false;


//criando funcoes
function digitar(){
    if(8 === monitor.innerHTML.length ){
        let conteudo = monitor.innerHTML.slice(7,8);
        monitor.innerHTML="";
        monitor.innerHTML +=conteudo;
    }
        if(monitor.textContent.length == 4){
            allow=false;
        }
        
}

function iniciaUrna(){
    digitaCandidato();
}
function digitaCandidato(){
    allow=true;
    monitor.innerHTML = "_ _ _ _";
    if(9 === monitor.innerHTML.length ){
    let conteudo = monitor.innerHTML.slice(7,8);
    alert(conteudo);
    }
    
}



//iniciando

iniciaUrna();