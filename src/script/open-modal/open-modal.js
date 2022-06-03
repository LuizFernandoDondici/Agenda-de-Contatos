
// Eventos para abrir e fechar modal de confirmação que deleta contato.

document.querySelector('#link-delete-contato').addEventListener("click", ()=>{
    document.querySelector(".modal").style.display = "block"
});

document.querySelector('#btn-close-modal').addEventListener("click", ()=>{
    document.querySelector(".modal").style.display = "none"
});