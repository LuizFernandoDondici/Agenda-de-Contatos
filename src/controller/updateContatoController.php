<?php

namespace AgendaDeContatos\Src\Controller;

use AgendaDeContatos\Src\Controller\Interface\RequestController;
use AgendaDeContatos\Src\Model\Contato;
use AgendaDeContatos\Src\Model\ContatoDAO;
use AgendaDeContatos\Src\Model\ContatoService;

class UpdateContatoController implements RequestController
{

    public function __construct()
    {
    }

    // Controlador que chama função apra validar dados do input. 
    // Se for validado, chama a função para atualizar contatos e retorna JSON com codigo de sucesso.
    // Se não for validado, retorna um JSON com codigo de sucesso e mensagem de erro.

    public function processRequest(): void
    {
        
        $contato = new Contato(
            $_POST['id'], 
            $_POST['name'], 
            $_POST['tel'], 
            $_POST['cel'], 
            $_POST['email'], 
            $_POST['birthday'], 
            $_POST['cep'], 
            $_POST['street'], 
            $_POST['num'], 
            $_POST['comp'], 
            $_POST['district'], 
            $_POST['city'],
            $_POST['uf']
        );

        $contatoSevice = new ContatoService();
        $contatoDAO = new ContatoDAO();

        $validate = $contatoSevice->validadeContato($contato);

        if ($validate != '') {
            
            ob_clean();
            echo json_encode(
                array(
                    'success' => 0,
                    'msg' => $validate,
                )
            );

            exit;

        } else {

            $contatoDAO->updateContato($contato);

            ob_clean();
            echo json_encode(
                array(
                    'success' => 1,
                )
            );
        } 

    }

}