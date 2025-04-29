/* Arquivo: 
   => utilidades (arquivo js com funções)  
*/
// Função para juntar nome e sobrenome.

function juntarNome() {
    let nome      = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;

    // 1. Concatenação de strings normal.
    let nomecompleto = `${nome} ${sobrenome}`

    // 2.Concatenação de strings com uso 
    // de interpolação (template strings).
    let nomecompleto1 = `<i>${nome} <br>${sobrenome}</i>`;
    // console.log('Nome: ' + nome);
    // console.log('Sobrenome: ' + sobrenome);
    // console.log('Nome Completo: ' + nomecompleto);
mostrarLog(nome, sobrenome);

    if (nome == "" || sobrenome == ""){
        window.alert('Preencha os dados do formulário!');
        return;
    }
    

    // 3. Executar a injeção de texto com \n (JavaScript).
    document.getElementById('nomecompleto').innerText = nomecompleto;
    
    // 4. Executar a injeção de tags (elementos HTML) + textos:
    document.getElementById('nomecompleto1').innerHTML = nomecompleto1;

    
}

// Função para limpar o formulário de dados.
function limparDados() {
    // Exclui os valores contidos em nome e sobrenome (inputs).
    document.getElementById("nome").value = "";
    document.getElementById('sobrenome').value = "";
    
    // Exclui os valores contidos no formulário nomes (nome e sobrenome).
    document.getElementById("nomes").reset();

    // Limpar o parágrafo do nomecompleto e nomecompleto1.
    document.getElementById("nomecompleto").innerText = "";
    document.getElementById("nomecompleto1").innerHTML = "";

    // Após limpar o formulário e limpar os parágrafos nomecompleto
    // e nomecompleto1, posicionar o cursor no foco do campo nome.
    ajustarFoco();
    window.alert('Os dados foram resetados!');
}

// Função para mostrar o log de saída de dados
function mostrarLog(n, s){
    console.log( `Nome: ${n}`);
    console.log(`Sobrenome: ${s}`);
    console.log(`Nome Completo: ${n} ${s}`);
}

// Função para ajustar o foco no campo nome.
function ajustarFoco() {
    document.getElementById("nome").focus();
}

escreverNome()
{
    nome = document.getElementById("nome").value;
    sobrenome = document.getElementById('sobrenome').value;
    let resultado = "<strong>" + nome + " " + sobrenome + "</strong>";
}