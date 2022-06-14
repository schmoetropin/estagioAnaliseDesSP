<?php
    class Perguntas{
        public function perg2($num){
            $n1 = 0;
            $n2 = 1;
            $prox = $n1+$n2;
            $arr = [];
            $val = false;
            array_push($arr, $n1, $n2, $prox);
            while ($prox <= $num) {
                $n1 = $n2;
                $n2 = $prox;
                $prox = $n1 + $n2;
                array_push($arr,$prox);
            }
            return $arr;
        }
    
        public function perg3(){
            $xml = simplexml_load_file('../data/valores.xml');
            $json = json_encode($xml);
            $obj = json_decode($json);
            $indexes = $obj->row;
            $arr = [];
            for($i = 0; $i < count($indexes); $i++){
                array_push($arr, $indexes[$i]->valor);
            }
            
            $med = array_sum($arr)/count($arr);
            $arrMais = [];
            for($i = 0;$i < count($arr); $i++){
                if($arr[$i] > $med)
                    array_push($arrMais,$arr[$i]);
            }
            
            $arrSemZero = [];
            for($i = 0;$i < count($arr); $i++){
                if($arr[$i] != 0)
                    array_push($arrSemZero,$arr[$i]);
            }?>
            Mininmo: <?php echo min($arrSemZero);?><br/>
            Maximo: <?php echo max($arr);?><br/>
            Media: <?php echo $med;?><br/>
            Dias acima da media: <?php echo count($arrMais);?><br/>
            Acima da media: 
            <div class="divXml">
                <pre><?php
                    print_r($arrMais);?>
                </pre>
            </div><br/>
            Todos os dias: 
            <div class="divXml">
                <pre><?php
                    print_r($obj->row);?>
                </pre>
            </div><br/><?php
        }
    
        public function perg4(){
            $sp = 67836.43;
            $rj = 36678.66;
            $mg = 29229.88;
            $es = 27165.48;
            $ou = 19849.53;
            $som = $sp+$rj+$mg+$es+$ou;
            echo 'Total: R$'.number_format($som,2,',','.').'<br/>';
            echo 'SP: '.($sp*100)/$som.'%<br/>';
            echo 'RJ: '.($rj*100)/$som.'%<br/>';
            echo 'MG: '.($mg*100)/$som.'%<br/>';
            echo 'ES: '.($es*100)/$som.'%<br/>';
            echo 'Outros: '.($ou*100)/$som.'%<br/>';
        }
        
        public function perg5($val){
            for($i = strlen($val)-1;$i >= 0;$i--){
                echo $val[$i];
            }
        }
    };
?>