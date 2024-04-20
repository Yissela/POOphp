<?php
        class data{
                function Cconexion(){

                    $host = "";
                    $dbname ="";
                    $user= "";
                    $password= "";

                    try{
                            $con = POD();

                    }catch(PODException $ex){
                            echo("no se pudo conectar, $ex");

                    }


                    return $con;

                }
              

        }



?>

;
