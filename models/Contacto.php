<?php
class Contacto extends Conectar
{
    public function RegisterContacto($nombre, $email, $telefono, $servicio, $mensaje) {
        try {
            $conectar = parent::Conexion();
            $sql = "CALL RegistrarContacto (?, ?, ?, ?, ?)";
            $query = $conectar->prepare($sql);
            $query->bindValue(1, $nombre);
            $query->bindValue(2, $email);
            $query->bindValue(3, $telefono);
            $query->bindValue(4, $servicio);
            $query->bindValue(5, $mensaje);
            $query->execute();

            return ["success" => true, "message" => "Registro exitoso"];
        } catch (Exception $e) {
            return ["success" => false, "message" => "Error: " . $e->getMessage()];
        }
    }

    public function RegisterBoletin($email) {
        try {
            $conectar = parent::Conexion();
            $sql = "CALL registrarCorreosPublicidad (?)";
            $query = $conectar->prepare($sql);
            $query->bindValue(1, $email);
            $query->execute();

            return ["success" => true, "message" => "Registro exitoso"];
        } catch (Exception $e) {
            return ["success" => false, "message" => "Error: " . $e->getMessage()];
        }
    }
}
?>
