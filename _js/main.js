// Declaração de variavel

//fazer o usuario declarar o valor;
var y;



/* falta declarar o tipo da variável */
/* nao ficar reutilizando variavel */


//Saída de dados
 /*console.log(x+1);concatenação de número e texto*/

     /*Confirm Dialog
     y= confirm("Você confirma a ação?") /*vai retornar uma string 
     console.log (y);*/
    
    //solicitação de entrada
/*
    y = prompt("Digite um valor")


    //Converter o valor de entrada (parseInt(numero inteiro))
    y = parseInt(y);   /* da direita pra esquerda */


/*
    console.log (1+y)
    if(y <10) {
        console.log("Número menor que 10");
    } else {
        console.log ("Número maior ou igual que 10");
    }


        //mensagem de alerta pro usuário
        alert ("Atençãooo!!!!");
    /* Principal ideia do js é usar a dinamidade do html e css */

    var y = 3;

function minhaFuncao(){
    console.log("1º função")

}
//minhaFuncao ();

function parametros (y) {
    console.log(y);
}
//parametros(y);

function retorno (y) {
    return y;
}
y=retorno(4);
console.log(y);

function exibirMensagem(){
    var texto = document.getElementById("1").innerHTML; /*.innerHTML pega as coisas do html */
    alert("O botão"+ texto +"foi selecionado!")
}
/* elemento por id */
// pegar palavra que ta dentro do html
    //window.document acessar os elementos do site

function alterarEstilo(id) {
    elemento = document.getElementById(id); //recupera o elemento da página
   /*     document.getElementById(id);ele vai pegar o id da função */

    elemento.style.color = "Red";

}

function alterarEstilo2(id) {
    elemento = document.getElementById(id); //recupera o elemento da página
   /* document.getElementById(id);ele vai pegar o id da função */

    elemento.style.color = "Black";

}