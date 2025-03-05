 
<?php
    Session_start();
    /* TODO: Inicio de Session */
    class Conectar{
        public $dbh;
        public function Conexion(){
            try{
                /* TODO: Cadena de Conexion */
                $conectar = $this->dbh=new PDO("mysql:host=localhost;dbname=empresa","root","");
                return $conectar;
            }catch (Exception $e){
                /* TODO: En caso de error mostrar mensaje */
                print "Error Conexion BD". $e->getMessage() ."<br/>";
                die();
            }
          
        } 
        public static function ruta(){

            return "http://localhost/sema/";  
        }
    }
?>




