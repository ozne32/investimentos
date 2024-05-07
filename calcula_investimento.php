<?php 

str_replace(',','.', $_POST['dinheiro']);
function colocarNome(){
    if($_POST['op_invest'] != 0){
        if($_POST['op_invest']==1){
            return 'CDB';
        }else if($_POST['op_invest']==2){
            return 'LCI';
        }else if($_POST['op_invest']==3){
            return 'LCA';
        }else if($_POST['op_invest']==4){
            return 'Tesouro Selic';
        }
    }
}
if($_POST['data_final'] != false && $_POST['dinheiro'] != false && $_POST['data_inicial'] != false && $_POST['op_invest'] != false  ){
    $nome = colocarNome();
    $tempo_aplicacao = calcularTempo();
    $lucro_porcentagem_dia = calcularLucroDia();
    $lucro_total = lucroTotal($tempo_aplicacao,$lucro_porcentagem_dia, $_POST['dinheiro']);
    $dinheiro_pos_invest = floor($lucro_total);
    header("Location:centroInvest.php?dinheiro=$dinheiro_pos_invest&investimento=$nome");
}else{
    header('Location:centroInvest.php?preenchimento=erro');
}
function calcularTempo(){
    $qtd_dia = 1*24*60*60;
    $tempo_final = strtotime($_POST['data_inicial']);
    $tempo_inicial = strtotime($_POST['data_final']);
    $tempo_final /= $qtd_dia;
    $tempo_inicial /= $qtd_dia;
    return  abs($tempo_final - $tempo_inicial);
}
function calcularLucroDia(){
    if($_POST['op_invest'] != 0){
        if($_POST['op_invest']==1){
            return (12.32/12)/30;
        }else if($_POST['op_invest']==2){
            return (15.4/12)/30;
        }else if($_POST['op_invest']==3){
            return (9/12)/30;
        }else if($_POST['op_invest']==4){
            return (10.75/12)/30;
        }
    }
}
function lucroTotal($dias,$lucroDias,$dinheiro){
    for($i = 0; $i < $dias; $i++){
        $dinheiro += ($dinheiro * $lucroDias)/100;
    }
    return $dinheiro;
}
