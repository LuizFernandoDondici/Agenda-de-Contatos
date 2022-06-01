
document.querySelector('#btn-update-contato').addEventListener('click', (e)=>{
    e.preventDefault();

    var url_string = new URL( window.location.href);
    var id = url_string.searchParams.get("id");

    const url = '/atualizar-contato';
    const options = {
        headers: {'Content-Type' : 'application/x-www-form-urlencoded'},
        method: 'POST',
        body:
            'id='+id+'&'+
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
                    window.location.href = '/visualizar-contato?id='+id
                } else if (res.success == 0){
                    window.alert(res.msg);
                } else {
                    window.alert('erro');
                }
            }))
        })
})