<?php
#O Script a seguir exibe na tela a próxima Segunda-feira tendo como referência a data atual do servidor

#Captura a data de hoje, retorna um array do PHP
$hoje = getdate();

#Traz o índice do dia em PHP 0=>domingo, 1=> segunda, 2=>terça, 3=>quarta, 4=quinta, 5=sexta, 6=sábado 
$diadasemanaindice = $hoje["wday"];


#Verifica qual índice o dia recebe
switch ($diadasemanaindice) {
    
    #se for quarta-feira    
    case 3:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+5;
        echo 'Pauta da Reunião para o dia ' .$proximasegundavalor, PHP_EOL;
    break;

    #se for quinta-feira    
    case 4:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+4;
        echo 'Pauta da Reunião para o dia ' .$proximasegundavalor, PHP_EOL;
    break;

    #se for sexta-feira    
    case 5:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+3;
        echo 'Pauta da Reunião para o dia ' .$proximasegundavalor, PHP_EOL;
    break;

    #se for Sábado    
    case 6:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+2;
        echo 'Pauta da Reunião para o dia ' .$proximasegundavalor, PHP_EOL;
    break;
    
    #se for domingo    
    case 0:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+1;
        echo 'Pauta da Reunião para o dia ' .$proximasegundavalor, PHP_EOL;
    break;
}
?>
