<?php
#O Script a seguir exibe na tela a próxima Segunda-feira tendo como referência a data atual do servidor

#Captura a data de hoje, retorna um array do PHP
$hoje = getdate();

#Traz o índice do dia em PHP 0=>domingo, 1=> segunda, 2=>terça, 3=>quarta, 4=quinta, 5=sexta, 6=sábado 
$diadasemanaindice = $hoje["wday"];


#Verifica qual índice o dia recebe
switch ($diadasemanaindice) {
    
    #se o dia atual for terça-feira    
    case 2:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+6;
        echo 'A próxima segunda-feira será dia ' .$proximasegundavalor, PHP_EOL;
    break;
        
    #se o dia atual for quarta-feira    
    case 3:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+5;
        echo 'A próxima segunda-feira será dia ' .$proximasegundavalor, PHP_EOL;
    break;

    #se o dia atual for quinta-feira    
    case 4:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+4;
        echo 'A próxima segunda-feira será dia ' .$proximasegundavalor, PHP_EOL;
    break;

    #se o dia atual for sexta-feira    
    case 5:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+3;
        echo 'A próxima segunda-feira será dia ' .$proximasegundavalor, PHP_EOL;
    break;

    #se o dia atual for Sábado    
    case 6:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+2;
        echo 'A próxima segunda-feira será dia ' .$proximasegundavalor, PHP_EOL;
    break;
    
    #se o dia atual for domingo    
    case 0:
        $diadasemanavalor=date("d");
        $proximasegundavalor=$diadasemanavalor+1;
        echo 'A próxima segunda-feira será dia ' .$proximasegundavalor, PHP_EOL;
    break;
}
?>
