<?php

/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 07/10/2017
 * Time: 20:18
 */
class Jogo
{
    private $timeCasa;
    private $timeAdversario;
    private $golsTimeCasa;
    private $golsTimeAdversario;
    private $pontosTimeCasa;
    private $pontosTimeAdversario;


    /**
     * @return mixed
     */
    public function getTimeCasa()
    {
        return $this->timeCasa;
    }

    /**
     * @param mixed $timeCasa
     */
    public function setTimeCasa($timeCasa)
    {
        $this->timeCasa = $timeCasa;
    }

    /**
     * @return mixed
     */
    public function getTimeAdversario()
    {
        return $this->timeAdversario;
    }

    /**
     * @param mixed $timeAdversario
     */
    public function setTimeAdversario($timeAdversario)
    {
        $this->timeAdversario = $timeAdversario;
    }

    /**
     * @return mixed
     */
    public function getGolsTimeCasa()
    {
        return $this->golsTimeCasa;
    }

    /**
     * @param mixed $golsTimeCasa
     */
    public function setGolsTimeCasa($golsTimeCasa)
    {
        $this->golsTimeCasa = $golsTimeCasa;
    }

    /**
     * @param mixed $golsTimeAdversario
     */
    public function setGolsTimeAdversario($golsTimeAdversario)
    {
        $this->golsTimeAdversario = $golsTimeAdversario;
    }


    /**
     * @return mixed
     */
    public function getGolsTimeAdversario()
    {
        return $this->golsTimeAdversario;
    }

    /**
     * @return mixed
     */
    public function getPontosTimeCasa()
    {
        return $this->pontosTimeCasa;
    }

    /**
     * @return mixed
     */
    public function getPontosTimeAdversario()
    {
        return $this->pontosTimeAdversario;
    }

    /**
     * @param mixed $pontosTimeAdversario
     */
    public function setPontosTimeAdversario($pontosTimeAdversario)
    {
        $this->pontosTimeAdversario = $pontosTimeAdversario;
    }

    public function apurar(){
        if($this->golsTimeCasa > $this->golsTimeAdversario){
            $this->pontosTimeCasa = 3;
        }elseif($this->golsTimeAdversario < $this->golsTimeCasa){
            $this->pontosTimeAdversario = 3;
        }elseif($this->golsTimeCasa = $this->golsTimeAdversario){
            $this->golsTimeCasa  = 2;
            $this->golsTimeAdversario = 2;
        }
    }

}