
// Ajax para buscar CEP em uma API externa e preencher automaticamente os campos de endereço.

const setInput = (data) =>{
    document.querySelector('[name=street]').value = data.logradouro;
    document.querySelector('[name=district]').value = data.bairro;
    document.querySelector('[name=city]').value = data.localidade;
    document.querySelector('[name=uf]').value = data.uf;
}

document.querySelector('[name=cep]').addEventListener('blur', (e)=>{

    let cep = document.querySelector('[name=cep]').value;
    
    let url = `https://viacep.com.br/ws/${cep}/json/`;
    let options = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    }

    fetch(url, options)
        .then(response =>{ response.json() 
            .then(data => setInput(data))
        })

})