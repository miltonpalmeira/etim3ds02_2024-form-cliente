cad_cliente = document.querySelector('#form-cad-cliente');
cad_cliente.addEventListener("submit", (event) => {
    // Evita que a página seja recarregada
    event.preventDefault(cad_cliente);

    // Cria um objeto do tipo FormData para coletar os dados do formulário
    const formData = new FormData(cad_cliente);

    fetch("php/insert_cliente.php", {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data => {
        const sucessoElement = document.querySelector('#cadastradosucesso');
        sucessoElement.innerHTML = data.message;
        sucessoElement.style.display = 'block';
    }).catch(error => {
        console.log("Erro: " + error);
    })
});