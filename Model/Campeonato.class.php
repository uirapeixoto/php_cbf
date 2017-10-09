<?php

/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 07/10/2017
 * Time: 20:33
 */
class Campeonato
{
    private $time;
    private $jogos;
    private $pontos;
    private $vitoria;
    private $empate;
    private $derrota;
    private $golsPartida;
    private $golsPro;
    private $golsContra;
    private $saldoGols;

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getJogos()
    {
        return $this->jogos;
    }

    /**
     * @param mixed $jogos
     */
    public function setJogos($jogos)
    {
        $this->jogos = $jogos;
    }

    /**
     * @return mixed
     */
    public function getPontos()
    {
        return $this->pontos;
    }

    /**
     * @param mixed $pontos
     */
    public function setPontos($pontos)
    {
        $this->pontos = $pontos;
    }

    /**
     * @return mixed
     */
    public function getVitoria()
    {
        return $this->vitoria;
    }

    /**
     * @param mixed $vitoria
     */
    public function setVitoria($vitoria)
    {
        $this->vitoria = $vitoria;
    }

    /**
     * @return mixed
     */
    public function getEmpate()
    {
        return $this->empate;
    }

    /**
     * @param mixed $empate
     */
    public function setEmpate($empate)
    {
        $this->empate = $empate;
    }

    /**
     * @return mixed
     */
    public function getDerrota()
    {
        return $this->derrota;
    }

    /**
     * @param mixed $derrota
     */
    public function setDerrota($derrota)
    {
        $this->derrota = $derrota;
    }

    /**
     * @return mixed
     */
    public function getGolsPartida()
    {
        return $this->golsPartida;
    }

    /**
     * @param mixed $golsPartida
     */
    public function setGolsPartida($golsPartida)
    {
        $this->golsPartida = $golsPartida;
    }

    /**
     * @return mixed
     */
    public function getGolsPro()
    {
        return $this->golsPro;
    }

    /**
     * @param mixed $golsPro
     */
    public function setGolsPro($golsPro)
    {
        $this->golsPro = $golsPro;
    }

    /**
     * @return mixed
     */
    public function getGolsContra()
    {
        return $this->golsContra;
    }

    /**
     * @return mixed
     */
    public function getSaldoGols()
    {
        return $this->saldoGols;
    }

    /**
     * @param mixed $saldoGols
     */
    public function setSaldoGols($saldoGols)
    {
        $this->saldoGols = $saldoGols;
    }

    /**
     * @param mixed $golsContra
     */
    public function setGolsContra($golsContra)
    {
        $this->golsContra = $golsContra;
    }



}