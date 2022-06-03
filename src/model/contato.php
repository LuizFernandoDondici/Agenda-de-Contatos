<?php

namespace AgendaDeContatos\Src\Model;

class Contato
{

    private $id;
    private $name;
    private $tel;
    private $cel;
    private $email;
    private $birthday;
    private $cep;
    private $street;
    private $num;
    private $comp;
    private $district;
    private $city;
    private $uf;

    public function __construct
    (
        $id, $name, $tel, $cel, $email, $birthday, $cep, 
        $street, $num, $comp, $district, $city, $uf
    )
    {   
        $this->id = $id;
        $this->name = $name;
        $this->tel = $tel;
        $this->cel = $cel;
        $this->email = $email;
        $this->birthday = $birthday;
        $this->cep = $cep;
        $this->street = $street;
        $this->num = $num;
        $this->comp = $comp;
        $this->district = $district;
        $this->city = $city;
        $this->uf = $uf;
    }


    function getId()
    {
        return $this->id;
    }
 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

  
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    
    public function getTel()
    {
        // Replace para corrigir alterações das mascaras de formulario.
        return str_replace(array("(", ")", "-", " "), "", $this->tel);
    }

    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    
    public function getCel()
    {
        // Replace para corrigir alterações das mascaras de formulario.
        return str_replace(array("(", ")", "-", " "), "", $this->cel);
    }

    public function setCel($cel)
    {
        $this->cel = $cel;

        return $this;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    
    public function getBirthday()
    {
        return $this->birthday;
    }
 
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    
    public function getCep()
    {
        // Replace para corrigir alterações das mascaras de formulario.
        return str_replace("-", "", $this->cep);
    }

    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    
    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    
    public function getNum()
    {
        return $this->num;
    }
 
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    
    public function getComp()
    {
        return $this->comp;
    }

    public function setComp($comp)
    {
        $this->comp = $comp;

        return $this;
    }

 
    public function getDistrict()
    {
        return $this->district;
    }

    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

   
    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }
    
}