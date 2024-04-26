<?php
        

                    $host = "localhost";
                    $dbname ="POO";
                    $user= "postgres";
                    $password= "Garcia";

                    $conexion = pg_connect("host=localhost dbname=POO user=postgres password=Garcia");
                    $inputId = intval($_REQUEST['inputId']);

                    if ($_REQUEST['inputCara'] == "ofendido") {

                        $query = "INSERT INTO public.ofendido(
                            id_ofendido, nombre, apellido, sexo, genero, direccion)
                            VALUES ($inputId , '$_REQUEST[inputNombre]' , '$_REQUEST[inputApellidos]' , '$_REQUEST[inputSexo]' , '$_REQUEST[inputGenero] ', '$_REQUEST[inputAddress]')";
              
    
                       
                      } elseif ($_REQUEST['inputCara'] == "denunciado") {
                        
                            $query = "INSERT INTO public.detenido(
                                id_detenido, nombre, apellido, sexo, genero, direccion)
                                VALUES ($inputId , '$_REQUEST[inputNombre]' , '$_REQUEST[inputApellidos]' , '$_REQUEST[inputSexo]' , '$_REQUEST[inputGenero] ', '$_REQUEST[inputAddress]')";


                          
                        }
                       elseif  ($_REQUEST['inputCara'] == "denunciante") {
                        

                            $query = "INSERT INTO public.denunciante(
                                id_denunciante, nombre, apellido, sexo, genero, direccion)
                                VALUES ($inputId , '$_REQUEST[inputNombre]' , '$_REQUEST[inputApellidos]' , '$_REQUEST[inputSexo]' , '$_REQUEST[inputGenero] ', '$_REQUEST[inputAddress]')";
                                
                          
                        }
                      

                   
                    $consulta = pg_query($conexion, $query);


                    if($consulta){

                        echo 'datos del cliente insertados';
                       
                    }

                    pg_close();

?>
