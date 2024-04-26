<?php
        

                    $host = "localhost";
                    $dbname ="POO";
                    $user= "postgres";
                    $password= "Garcia";

                    $conexion = pg_connect("host=localhost dbname=POO user=postgres password=Garcia");
                    $inputId = intval($_REQUEST['inputExpediente']);
                    $inputDenunciante = intval($_REQUEST['inputDenunciante']);
                    $inputDenunciado = intval($_REQUEST['inputDenunciado']);
                    $inputOfendido = intval($_REQUEST['inputOfendido']);

                    $query = "INSERT INTO public.expediente(
                        n_expediente, breve_narracion, estado_expe, fecha, delito)
                        VALUES ($inputId , '$_REQUEST[inputBreve]' , '$_REQUEST[inputEstado]' , '$_REQUEST[inputFecha]' , '$_REQUEST[inputDelitos] ');";
                    
                    
                    $query .= "INSERT INTO public.expe_denunciante(
                        \"id_expeDenu\", n_expediente, id_denunciante)
                        VALUES ($inputId, $inputId, $inputDenunciante );";

                    $query .= "INSERT INTO public.expe_detenido(
                        \"id_expeDete\", n_expediente, id_detenido)
                         VALUES ($inputId , $inputId , $inputDenunciado);";

                    $query .= "INSERT INTO public.expe_ofendido(
                        \"id_expeOfen\", n_expediente, id_ofendido)
                        VALUES ($inputId , $inputId , $inputOfendido);";



                    $consulta = pg_query($conexion, $query);


                    if($consulta){

                        echo 'datos del cliente insertados';
                        
                    }

                    pg_close();

?>