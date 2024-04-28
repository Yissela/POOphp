<?php
        

                    $host = "localhost";
                    $dbname ="POO";
                    $user= "postgres";
                    $password= "Garcia";

                    $conexion = pg_connect("host=localhost dbname=POO user=postgres password=Garcia");
                    $inputId = intval($_REQUEST['inputId']);


                    $query = "SELECT o.id_ofendido, o.nombre, expe.delito, expe.estado_expe, d.id_detenido,d.nombre
                    FROM expediente expe
                    JOIN expe_ofendido ex ON ex.n_expediente = expe.n_expediente 
                    JOIN ofendido o ON o.id_ofendido = ex.id_ofendido
                    JOIN expe_detenido exDete ON expe.n_expediente = exDete.n_expediente
                    Join detenido d ON d.id_detenido = exDete.id_detenido
					
					Where expe.n_expediente= '$inputId'";

                $consulta = pg_query($conexion, $query);    

         if($consulta){

                if(pg_num_rows($consulta)>0){
                        echo "<p>Expediente numero $inputId <br>";
                        echo "<p>-------------------------- <br>";

                        while ($obj = pg_fetch_object($consulta)){



                            echo "identidad del ofendidio: " .$obj->id_ofendido. "<br>";
                            echo "nombre del ofendidio: " .$obj->nombre. "<br>";
                            echo "Delitos: " .$obj->delito. "<br>";
                            echo "Estado del expediente: " .$obj->estado_expe. "<br>";
                            echo "identidad del detenido: " .$obj->id_detenido. "<br>";
                            echo "nombre del detenido: " .$obj->nombre. "<br>";


                        }

                }

         }

?>