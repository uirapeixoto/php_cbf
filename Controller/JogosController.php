<?php
require_once("../init.php");

SalvarJogo($_REQUEST);

function SalvarJogo(){
    $jogo = new Jogo();
    $jogo->setTimeCasa(seExisteRequest('timeCasa', ''));
    $jogo->setGolsTimeCasa(seExisteRequest('golsTimeCasa', ''));
    $jogo->setTimeAdversario(seExisteRequest('timeAdversario', ''));
    $jogo->setGolsTimeAdversario(seExisteRequest('golsTimeAdversario', ''));
    $_SESSION['jogos'][] = $jogo;

    CalculaJogos($_SESSION['jogos'],$jogo->getTimeCasa());
    CalculaJogos($_SESSION['jogos'],$jogo->getTimeAdversario());

    header('Location: ../View/jogos.php');
}

function CalculaJogos($jogos, $time){
    $nJogos = 0;
    $nVitorias = 0;
    $nDerrotas = 0;
    $nEmpates = 0;
    $nPontos = 0;
    $nGolsPro = 0;
    $nGolsSofridos = 0;

    if(isset($jogos) && is_array($jogos)){
        foreach ($jogos as $jogo ) {
            if(($jogo->getTimeCasa() == $time)){
                $nJogos++;
                $nGolsPro+=$jogo->getGolsTimeCasa();
                $nGolsSofridos+=$jogo->getGolsTimeAdversario();
                if($jogo->getGolsTimeCasa() > $jogo->getGolsTimeAdversario()){
                    $nVitorias++;
                    $nPontos+=3;
                }elseif($jogo->getGolsTimeCasa() < $jogo->getGolsTimeAdversario()){
                    $nDerrotas++;
                }elseif($jogo->getGolsTimeCasa() == $jogo->getGolsTimeAdversario()){
                    $nEmpates++;
                    $nPontos+=2;
                }
            }elseif(($jogo->getTimeAdversario() == $time)){
                $nJogos++;
                $nGolsPro+=$jogo->getGolsTimeAdversario();
                $nGolsSofridos+=$jogo->getGolsTimeCasa();
                if($jogo->getGolsTimeAdversario() > $jogo->getGolsTimeCasa()){
                    $nVitorias++;
                    $nPontos+=3;
                }elseif($jogo->getGolsTimeAdversario() < $jogo->getGolsTimeCasa()){
                    $nDerrotas++;
                }elseif($jogo->getGolsTimeAdversario() == $jogo->getGolsTimeCasa()){
                    $nEmpates++;
                    $nPontos+=2;
                }
            }
        }

        $campeonato = new Campeonato();
        $campeonato->setTime($time);
        $campeonato->setGolsPro($nGolsPro);
        $campeonato->setGolsContra($nGolsSofridos);
        $campeonato->setJogos($nJogos);
        $campeonato->setDerrota($nDerrotas);
        $campeonato->setVitoria($nVitorias);
        $campeonato->setEmpate($nEmpates);
        $campeonato->setPontos($nPontos);
        $campeonato->setSaldoGols($nGolsPro - $nGolsSofridos);

        $_SESSION['campeonato'][$campeonato->getTime()] = $campeonato;

        return $campeonato;
    }
}

function limparCampeonato($limpar){

    $limpar  = seExisteRequest('limpar',false);
    if($limpar){
        unset($_SESSION['jogos']);
        unset($_SESSION['campeonato']);
    }
}

function seExisteRequest($key, $return){
    if(!$return)
        $return = false;
    return isset($_REQUEST)?(isset($_REQUEST["$key"])?($_REQUEST["$key"]):$return):$return;
}
