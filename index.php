
<?php  
      
    require 'cabecera.php';
        
    if(!isset($nombreRecibido) || !isset($mayor)){
         echo '<h1 class="error">ERROR!<br>No se ingresaron los parametros necesarios</h1>';
            
    }else{
            
        echo '<h2 class="correcto">Hola '.$nombreRecibido.',</h2>';
           
        /*Si el valor asignado a $mayor es 0(falso)*/
        if(!$mayor){
            echo'<h2 class="correcto">no sos mayor de edad</h2>';
        }
        /*Si el valor asignado a $mayor es 1(verdadero)*/
        else{
            echo'<h2 class="correcto">sos mayor de edad</h2>';
                
        }
    }    
    echo '<br><br><br><br><br><br><br><br>';
?>   

    <select>   
        
         <?php            
         
            
            foreach ($ciudades as $ciudad) {
                 echo '<option>'.$ciudad.'</option>';
             }                    
      
        /* 
        forfooter ($i=0;$i<=count($ciudades)-1;$i++){
           if($numeroRecibido=$i){
               echo '<option selected>'.$ciudades[$i].'</option>';
           }else{
               
               echo '<option>'.$ciudades[$i].'</option>';       
           }
        }
        */ 
         ?>
     </select>     
    
<?php require 'pie.php'; ?>
    