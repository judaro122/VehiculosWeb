    <?php

    $tmp = array();
                
                $array = array();
            
                $tipos = array('1', '2', '3','4'); 
                $tiposnombre = array('Moto', 'Carro', 'Avion','Helicoptero'); 
                $nvehiculos = rand(1, 15);
                for ($i = 1; $i <= $nvehiculos; $i++) {
                    $tipovehiculo =rand(0, 3);
                   
                    $tmp['idtipo'] = $tipos[$tipovehiculo];
                    $tmp['tipo'] =  $tiposnombre[$tipovehiculo];
                    $tmp['x'] =  rand(0, 100);
                    $tmp['y'] =  rand(0, 100);
                    $array[]=$tmp;
                    }
             
               

           echo json_encode(array('vehiculos' =>  $array));  