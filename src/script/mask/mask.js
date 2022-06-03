
// Mascaras de formulario.

document.querySelector('[name=name]').addEventListener('input', (e)=>{
    
    document.querySelector('[name=name]').value = e.target.value
        .replace(/([^A-Za-z\s])+/g, '')
        .toLowerCase()
        .replace(/(?:^|\s)\S/g, (a)=>{ 
            return a.toUpperCase(); 
    });   
});

document.querySelector('[name=birthday]').addEventListener('input', (e)=>{
    
    document.querySelector('[name=birthday]').value = e.target.value
        .replace(/\D+/g, '')
        .replace(/(\d{2})(\d)/, '$1/$2')
        .replace(/(\/\d{2})(\d)/, '$1/$2')
        .replace(/(\/\d{4})\d+?$/, '$1')
});

document.querySelector('[name=tel]').addEventListener('input', (e)=>{
    
    document.querySelector('[name=tel]').value = e.target.value
        .replace(/\D+/g, '')
        .replace(/(\d{2})(\d)/, '($1) $2')
        .replace(/(\d{4})(\d)/, '$1-$2')
        .replace(/(\d{4})-(\d)(\d{4})/, '$1$2-$3')
        .replace(/(-\d{4})\d+?$/, '$1')   
});

document.querySelector('[name=cel]').addEventListener('input', (e)=>{
    
    document.querySelector('[name=cel]').value = e.target.value
        .replace(/\D+/g, '')
        .replace(/(\d{2})(\d)/, '($1) $2')
        .replace(/(\d{4})(\d)/, '$1-$2')
        .replace(/(\d{4})-(\d)(\d{4})/, '$1$2-$3')
        .replace(/(-\d{4})\d+?$/, '$1')   
});

document.querySelector('[name=cep]').addEventListener('input', (e)=>{
    
    document.querySelector('[name=cep]').value = e.target.value
        .replace(/\D+/g, '')
        .replace(/(\d{5})(\d)/, '$1-$2')
        .replace(/(-\d{3})\d+?$/, '$1')    
});

document.querySelector('[name=num]').addEventListener('input', (e)=>{
    
    document.querySelector('[name=num]').value = e.target.value
        .replace(/\D+/g, '')  
});