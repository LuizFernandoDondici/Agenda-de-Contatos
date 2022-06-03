
// Ajax para salvar contato.
// Se codigo de sucesso for 1, salva e renderiza para pagina de lista de contatos.
// Se codigo de sucesso for 0, exibe mensagem de erro.

document.querySelector('#btn-save-contato').addEventListener('click', (e)=>{
    e.preventDefault();

    const url = '/salvar-contato';
    const options = {
        headers: {'Content-Type' : 'application/x-www-form-urlencoded'},
        method: 'POST',
        body:
            'name='+document.querySelector('[name=name]').value+'&'+
            'tel='+document.querySelector('[name=tel]').value+'&'+
            'cel='+document.querySelector('[name=cel]').value+'&'+
            'email='+document.querySelector('[name=email]').value+'&'+
            'birthday='+document.querySelector('[name=birthday]').value+'&'+
            'cep='+document.querySelector('[name=cep]').value+'&'+
            'street='+document.querySelector('[name=street]').value+'&'+
            'num='+document.querySelector('[name=num]').value+'&'+
            'comp='+document.querySelector('[name=comp]').value+'&'+
            'district='+document.querySelector('[name=district]').value+'&'+
            'city='+document.querySelector('[name=city]').value+'&'+
            'uf='+document.querySelector('[name=uf]').value
    }; 

    fetch(url, options)
        .then(response=>{response.json()
            .then((res=>{
                if (res.success == 1) {
                    window.location.href = '/lista-contato';
                } else if (res.success == 0){

                    document.querySelector('.alert-register').style.display = 'block';
                    document.querySelector('.msg-alert-register').innerHTML = res.msg;
                
                    setTimeout((e) => {
                        document.querySelector('.alert-register').style.display = 'none';
                    }, 4000); 

                } else {
                    window.location.href = '/erro';
                }
            }))
        })
})