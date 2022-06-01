<?php

namespace AgendaDeContatos\Src\Model;

class ContatoService
{

    public function __construct()
    {
    }


    public function validadeContato(Contato $contato):string
    {
        
        $msgError = '';

        if (!empty($contato->getName())) {
            if (strlen($contato->getName()) > 50 || strlen($contato->getName()) < 3) {
                $msgError = 'Erro ao salvar o nome';
            }
        }
        
        if (!empty($contato->getTel())) {
            if (strlen($contato->getTel()) != 11) {
                $msgError = 'Erro ao salvar o telefone';
            }
        }
        
        if (!empty($contato->getCel())) {
            if (strlen($contato->getCel()) != 11) {
                $msgError = 'Erro ao salvar o celular';
            }
        }

        if (!empty($contato->getEmail())) {
            if (strlen($contato->getEmail()) > 50 || !preg_match('/^[a-z0-9._-]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i', $contato->getEmail())) {
                $msgError = 'Erro ao cadastrar o e-mail';
            }
        }
       
        if (!empty($contato->getBirthday())) {
            if (strlen($contato->getBirthday()) != 10) {
                $msgError = 'Erro ao cadastrar a data de nascimento';
            }
        }
        
        if (!empty($contato->getCep())) {
            if (strlen($contato->getCep()) != 8) {
                $msgError = 'Erro ao cadastrar o cep';
            }
        }

        if (!empty($contato->getStreet())) {
            if (strlen($contato->getStreet()) > 25) {
                $msgError = 'Erro ao cadastrar a rua';
            }
        }

        if (!empty($contato->getNum())) {
            if (strlen($contato->getNum()) > 10) {
                $msgError = 'Erro ao cadastrar o numero';
            }
        }

        if (!empty($contato->getComp())) {
            if (strlen($contato->getComp()) > 10) {
                $msgError = 'Erro ao cadastrar o complemento';
            }
        }

        if (!empty($contato->getDistrict())) {
            if (strlen($contato->getDistrict()) > 25) {
                $msgError = 'Erro ao cadastrar o bairro';
            }
        }
        
        if (!empty($contato->getCity())) {
            if (strlen($contato->getCity()) > 25) {
                $msgError = 'Erro ao cadastrar a cidade';
            }
        }

        if (!empty($contato->getUf())) {
            if (strlen($contato->getUf()) != 2) {
                $msgError = 'Erro ao cadastrar o uf';
            }
        }
        

        return $msgError;

    }

}