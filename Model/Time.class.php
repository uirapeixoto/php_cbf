<?php

/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 07/10/2017
 * Time: 20:13
 */
class Time
{
    private $nome;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}