let div = document.getElementById('images');
let result = document.getElementById("result");

let cards =[
    {
        img:'./img/car1.jpg',
        name:'car1'
    },
    {
        img:'./img/car2.jpg',
        name:'car2'
    },
    {
        img:'./img/car3.jpg',
        name:'car3'
    },
    {
        img:'./img/car4.jpg',
        name:'car4'
    },
    {
        img:'./img/car1.jpg',
        name:'car1'
    },
    {
        img:'./img/car2.jpg',
        name:'car2'
    },
    {
        img:'./img/car3.jpg',
        name:'car3'
    },
    {
        img:'./img/car4.jpg',
        name:'car4'
    },
    
];
function random(){
    return 0.5 -Math.random();
}

let cardChosen=[];
let cardChosenId=[];
let win =[];
cards.sort(random);

function insertBackgroundCards(){
for(let i in cards){
    let backImg = document.createElement('img');
    backImg.setAttribute('src','img/fundo.png');
    backImg.setAttribute('data-id',i);

    backImg.addEventListener('click',flipcard);

    div.appendChild(backImg);
}
}

function flipcard(){
    if(cardChosen.length <2){
    let cardId = this.getAttribute('data-id');
    cardChosen.push(cards[cardId].name);

    cardChosenId.push(cardId);
   this.setAttribute('src',cards[cardId].img);
   if(cardChosen.length == 2 && cardChosenId.length == 2 ){
       setTimeout(compareCards,500)
   }
}



}

function compareCards(){
    let pick= document.querySelectorAll('img');
    let card1 = cardChosenId[0];
    let card2 = cardChosenId[1];
    if(cardChosen[0] === cardChosen[1] && cardChosenId[0] !== cardChosenId[1] ){
        pick[card1].setAttribute('src','img/white.png');
        pick[card2].setAttribute('src','img/white.png');

        win.push(card1);
        win.push(card2);

        pick[card1].removeEventListener('click',flipcard);
        pick[card2].removeEventListener('click',flipcard);
    }else{
        pick[card1].setAttribute('src','img/fundo.png');
        pick[card2].setAttribute('src','img/fundo.png');
    }

    cardChosen=[];
    cardChosenId=[];
    if(win.length === cards.length){
        result.innerHTML = "Congratulations you have won";
    }
}

function start(){
    insertBackgroundCards();
}

function restart(){
    //limpando as imagens da div
    while(div.firstChild){
        div.removeChild(div.lastChild);
    }

    start();
}

start();