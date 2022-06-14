<?php
    require_once('Perguntas.php');
    $perg = new Perguntas();

    if(isset($_POST['pergunta2'])){
        echo 'Resposta:<br/><br/>';
        $num = $_POST['pergunta2'];
        $rep2 = $perg->perg2($num);
        if(in_array($num,$rep2))
            echo 'pertence<br />';
        else
            echo 'não pertence<br />';
        echo json_encode($rep2);
    }
    
    if(isset($_POST['perg3'])){
        $perg->perg3();
    }
    
    if(isset($_POST['perg4'])){
        $perg->perg4();
    }
    
    if(isset($_POST['reverter'])){
        echo 'Resposta:<br/><br/>';
        $perg->perg5($_POST['reverter']).'<br/>';
    }
?>