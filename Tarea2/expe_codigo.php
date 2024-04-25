<?php
        

                    $host = "localhost";
                    $dbname ="POO";
                    $user= "postgres";
                    $password= "Garcia";

                    $conexion = pg_connect("host=localhost dbname=POO user=postgres password=Garcia");
                    $inputId = intval($_REQUEST['inputId']);

                    $query = "INSERT INTO public.expediente(
                        n_expediente, breve_narracion, estado_expe, fecha, delito)
                        VALUES ($inputId , '$_REQUEST[inputNombre]' , '$_REQUEST[inputApellidos]' , '$_REQUEST[inputSexo]' , '$_REQUEST[inputGenero] ', '$_REQUEST[inputAddress]')";
          

                    $consulta = pg_query($conexion, $query);


                    if($consulta){

                        echo 'datos del cliente insertados';
                    }

                    pg_close();

?>