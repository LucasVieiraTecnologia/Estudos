<?php

 /*
 
 Sinais:

 Um = :quer dizer que está atribuindo.
 Dois == :confere se os valores são iguais.
 != :confere se o valor é diferente.
 três = :confere se são identicos
 

 Operador logico "E"= && <<< todos tem que ser certos
 Operador logico "OU"= || <<< apenas um pode ser certo
 
 ____________________________________________________
   cho '<pre>';
    print_r($_SERVER);                       <- isso da para ver todas informações do SERVER.
    echo '</pre>';
-----------------------------------------------------

     $nome = 'lucas';                       <- string
     $bool = true;                          <- boolean
     $double = 10.09                        <- Doubles
-----------------------------------------------------
    define('NOME','lucas');                 <- Irá printar o nome
----------------------------------------------------  
    
    $nome = array('Lucas','Augusto');       <- Arrays antigos
    echo $nome[1];                          <- Arrays antigos
    
    $nome[] = 'Lucas';                      <- Arrays antigos
    $nome[] = 'Augusto';                    <- Arrays antigos

    $variaveis = ['Lucas','Augusto','Araujo'];   <- Arrays novos
    
   $informação['nome'] = 'Lucas';
   $informação['idade'] = 22;
   $informação['cidade'] = 'Belo Horizonte';

   echo "Seu nome: ".$informação['nome'].", voce tem ".$informação['idade']." mora em".$informação['cidade'];
-----------------------------------------------------

  $var = array(10+5, '10+5');

    if($var[0] == $var[0]){
    echo "if";

    }elseif ($var[0] != $var[1]) {              <- if,else,elseif
    echo"elseif";

    }else{ 
    echo "else";
    }

-----------------------------------------------------

   

    for($contador = 0; $contador <=10 ; $contador++){                 <--Repetição
        echo $contador;
        echo "<hr>";
    }
    ------------------------------------------------------------------
                                                                 <--Repetição
     $contador = 0;
        while ($contador < 10) {
            $contador ++;
            echo $contador;
            echo "<hr>";
        }
        guar



         $ar = array('chave1','Lucas','Tadeu','Vrau');
        
        foreach($ar as $key => $value){
            echo $key;
            echo '=>';
            echo $value;
            echo '<hr>';
        }


   $ar = array('chave1','Lucas','Tadeu','Vrau');
       $total = count($ar);

        for ($contador=0; $contador < $total ; $contador++) { 
           echo $ar[$contador];
        }

arrays multidimensionais:

        $arr = array(array('Lucas', 'pnc'),array(22,10),array('belo','horizonte'));
        echo $arr[2][1];

    

        $ar[0] = array('Lucas','Agustos');
        $ar[1] = array(23,32);
        
        echo $ar[1][1];

        Função sleep, o código "dorme"
    sleep(1);
    echo "0";
    
MATA O PROCESSO:

   $nome = 'lucas';

   if ($nome == 'Lucas') {
       echo "está certo";
   }else{

    die("O script parou de ser usado");
}

            function verdade(){
                return true;
            }

            function retornString(){
                return 'Fim';

            }
  
            retornString();
            
                function horario(){
                    for ($i=0 ; $i < 60 ;$i++){ 
                          ;
                        $data = date('d/m/Y H:i:s');
                        sleep(0);
                        echo $data;
                   
                        echo '<hr>';
                    }
                }
            
                  horario($date);
             
            date_default_timezone_set('America/Sao_Paulo');
                  
            $data = date('d/m/Y H:i:s',time()+(60*600));
                
            echo $data;
            


            Recortar uma string.
                            $conteudo =  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy tee recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
            
                            echo substr($conteudo,1 , 90);
                            
                            
                            Separa as strings;

                            $nome = 'Lucas Augusto Araujo';
                            $nomes = explode(' ',$nome);
                            print_r($nomes);
  */
 

     echo "teste";
                

    
?>