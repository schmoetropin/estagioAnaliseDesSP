<?php
    require_once('classes/Perguntas.php');
    $perg = new Perguntas();

    if(isset($_POST['pergunta2'])){
        $num = strip_tags($_POST['pergunta2']);
        $num = preg_replace("/[^0-9]/",'',$num);
        if($num != '' && $num != null){
            echo 'Resposta:<br/><br/>';
            $rep2 = $perg->perg2($num);
            if(in_array($num,$rep2))
                echo $num.' pertence<br />';
            else
                echo $num.' não pertence<br />';
            echo json_encode($rep2);
        }
    }
    
    if(isset($_POST['perg3'])){
        $perg->perg3();
    }
    
    if(isset($_POST['perg4'])){
        $perg->perg4();
    }
    
    if(isset($_POST['reverter'])){
        $palavra = strip_tags($_POST['reverter']);
        $pTest = str_replace(' ','',$palavra);
        if($pTest != '' && $pTest != null){
            echo 'Resposta:<br/><br/>';
            echo $palavra.'<br/>';
            $perg->perg5($palavra).'<br/>';
        }
    }
?>