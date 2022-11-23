const addProdutos = () => {

    let dados = new FormData($('#form-produtos')[0])

    const result = fetch('../backend/addProdutos.php', {
        method: 'POST',
        body: dados
    })
        .then((response) => response.json())
        .then((result) => {
        })

};