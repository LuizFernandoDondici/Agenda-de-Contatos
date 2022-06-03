<?php

namespace AgendaDeContatos\Src\Model;

class ContatoService
{

    public function __construct()
    {
    }

    // Função que valida dados do input e retorna msg de erro.

    public function validadeContato(Contato $contato):string
    {
        
        $msgError = '';

        if (!empty($contato->getName())) {
            if (strlen($contato->getName()) > 50) {
                $msgError = 'Erro ao salvar o Nome.';
            }
        }
        
        if (!empty($contato->getTel())) {
            if (strlen($contato->getTel()) != 11) {
                $msgError = 'Telefone invalido.';
            }
        }
        
        if (!empty($contato->getCel())) {
            if (strlen($contato->getCel()) != 11) {
                $msgError = 'Celular invalido.';
            }
        }

        if (!empty($contato->getEmail())) {
            if (strlen($contato->getEmail()) > 50 || !preg_match('/^[a-z0-9._-]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i', $contato->getEmail())) {
                $msgError = 'E-mail invalido.';
            }
        }
       
        if (!empty($contato->getBirthday())) {
            if (strlen($contato->getBirthday()) != 10) {
                $msgError = 'Data invalida.';
            }
        }
        
        if (!empty($contato->getCep())) {
            if (strlen($contato->getCep()) != 8) {
                $msgError = 'Cep invalido.';
            }
        }

        if (!empty($contato->getStreet())) {
            if (strlen($contato->getStreet()) > 25) {
                $msgError = 'Erro ao cadastrar a Rua.';
            }
        }

        if (!empty($contato->getNum())) {
            if (strlen($contato->getNum()) > 10) {
                $msgError = 'Erro ao cadastrar o Numero.';
            }
        }

        if (!empty($contato->getComp())) {
            if (strlen($contato->getComp()) > 10) {
                $msgError = 'Erro ao cadastrar o Complemento.';
            }
        }

        if (!empty($contato->getDistrict())) {
            if (strlen($contato->getDistrict()) > 25) {
                $msgError = 'Erro ao cadastrar o Bairro.';
            }
        }
        
        if (!empty($contato->getCity())) {
            if (strlen($contato->getCity()) > 25) {
                $msgError = 'Erro ao cadastrar a Cidade.';
            }
        }

        if (!empty($contato->getUf())) {
            if (!preg_match('/^(AC|AL|AP|AM|BA|CE|DF|ES|GO|MA|MT|MS|MG|PA|PB|PR|PE|PI|RJ|RN|RS|RO|RR|SC|SP|SE|TO)?$/i', $contato->getUf())) {
                $msgError = 'UF invalido.';
            }
        }
        
        return $msgError;
        
    }

}