<?php

require_once "../modelo/conexion.php";

class DashboardModelo{

    static public function mdlGetDatosDashboard(){
        
        $stmt = Conexion::conectar()->prepare('call prc_ObtenerDatosDashboard');

        $stmt-> execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}