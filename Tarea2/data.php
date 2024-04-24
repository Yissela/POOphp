<?php
        class data{
               public static function Cconexion(){

                    $host = "localhost";
                    $dbname ="POO";
                    $user= "postgres";
                    $password= "Garcia";

                    try{
                            $con = new PDO ("pgsql:host=$host; dbname=$dbname", $user, $password);

                    }catch(PODException $ex){
                            echo("no se pudo conectar, $ex");

                    }


                    return $con;

                }
              

        }



?>


