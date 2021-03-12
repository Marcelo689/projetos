let lista = document.getElementById('lista');
let div =document.getElementById('container');
let texto =document.createTextNode('Marcelo');
let tarefas = document.getElementById('tarefas');



function criaLi(){
    if(tarefas.value !== ""){
    let tarefa =tarefas.value;
    let li = document.createElement('li');
    let texto = document.createTextNode(tarefa);

    li.appendChild(texto);
    lista.appendChild(li);

    tarefas.value='';
    tarefas.focus();

    //criando botao apagar
let apagar = document.createElement('button');
apagar.textContent ='Remover da lista';


//adicionando classes aos componentes
apagar.className='remover';
li.className='li';

//inserindo botao apagar
li.appendChild(apagar);
apagar.addEventListener('click',()=>{
    lista.removeChild(li);
    lista.removeChild(apagar);
});
    }
}
addEventListener('keydown',e=>{
    console.log(e.keyCode);
    if(e.keyCode == 13){
        criaLi();
    }
})
function limpar(){
    if(lista.parentNode){
    while(lista.firstChild){
    lista.removeChild(lista.lastChild);
        }
    }
}