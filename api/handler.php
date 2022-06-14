<?php
    require_once('classes/Perguntas.php');
    $perg = new Perguntas();

    if(isset($_POST['pergunta2'])){
        echo 'Resposta:<br/><br/>';
        $num = strip_tags($_POST['pergunta2']);
        $rep2 = $perg->perg2($num);
        if(in_array($num,$rep2))
            echo $num.' pertence<br />';
        else
            echo $num.' não pertence<br />';
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
        $palavra = strip_tags($_POST['reverter']);
        echo $palavra.'<br/>';
        $perg->perg5($palavra).'<br/>';
    }
?>