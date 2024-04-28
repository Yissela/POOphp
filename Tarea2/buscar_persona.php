<?php
        

                    $host = "localhost";
                    $dbname ="POO";
                    $user= "postgres";
                    $password= "Garcia";

                    $conexion = pg_connect("host=localhost dbname=POO user=postgres password=Garcia");
                    $inputId = intval($_REQUEST['inputId']);


                    if ($_REQUEST['inputCara'] == "ofendido") {

                        $query = "SELECT o.id_ofendido, o.nombre, ex.n_expediente
                        FROM  ofendido o
                        JOIN  expe_ofendido ex ON o.id_ofendido = ex.id_ofendido 
                       
                        
                        Where o.id_ofendido='$inputId'";

$consulta = pg_query($conexion, $query);    

if($consulta){

       if(pg_num_rows($consulta)>0){
               echo "<p>Numero de identidad $inputId <br>";
               echo "<p>-------------------------- <br>";
              
               while ($obj = pg_fetch_object($consulta)){



                   echo "identidad del ofendidio: " .$obj->id_ofendido. "<br>";
                   echo "nombre del ofendidio: " .$obj->nombre. "<br>";
                   echo "Numero de expedientes: " .$obj->n_expediente. "<br>";
                   echo "<p>  <br>";
                echo "<p>-------------------------- <br>";


               }

       }

}


                       
                      } elseif ($_REQUEST['inputCara'] == "denunciado") {
                        
                        $query = "SELECT d.id_detenido, d.nombre, ex.n_expediente
                        FROM  detenido d
                        JOIN  expe_detenido ex ON d.id_detenido = ex.id_detenido
                       
                        
                        Where d.id_detenido='$inputId'";


$consulta = pg_query($conexion, $query);    

if($consulta){

       if(pg_num_rows($consulta)>0){
               echo "<p>Numero de identidad $inputId <br>";
               echo "<p>-------------------------- <br>";
              
               while ($obj = pg_fetch_object($consulta)){



                   echo "identidad del detenido: " .$obj->id_detenido. "<br>";
                   echo "nombre del ofendidio: " .$obj->nombre. "<br>";
                   echo "Numero de expedientes: " .$obj->n_expediente. "<br>";
                   echo "<p>  <br>";
                echo "<p>-------------------------- <br>";


               }

       }

}
                           

                          
                        }
                       elseif  ($_REQUEST['inputCara'] == "denunciante") {

                            $query = "SELECT d.id_denunciante, d.nombre, ex.n_expediente
                            FROM  denunciante d
                            JOIN  expe_denunciante ex ON d.id_denunciante = ex.id_denunciante
                           
                            
                            Where d.id_denunciante='$inputId';";



                                $consulta = pg_query($conexion, $query);    

                                if($consulta){
                                
                                       if(pg_num_rows($consulta)>0){
                                               echo "<p>Numero de identidad $inputId <br>";
                                               echo "<p>-------------------------- <br>";
                                              
                                               while ($obj = pg_fetch_object($consulta)){
                                
                                
                                
                                                   echo "identidad: " .$obj->id_denunciante. "<br>";
                                                   echo "nombre del ofendidio: " .$obj->nombre. "<br>";
                                                   echo "Numero de expedientes: " .$obj->n_expediente. "<br>";
                                                   echo "<p>  <br>";
                                                echo "<p>-------------------------- <br>";
                                
                                
                                               }
                                
                                       }
                                
                                }

                           
                          
                        }


                   

               

?>