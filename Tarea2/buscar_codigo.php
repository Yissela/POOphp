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
					
					Where expe.n_expediente= '322';"


         $consulta = pg_query($conexion, $query);


                    if($consulta){

                        echo 'datos del cliente insertados';
                       
                    }

                    pg_close();

?>