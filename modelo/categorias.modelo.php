<?php

require_once "conexion.php";

class CategoriasModelo{

    public $resultado;

    static public function mdlListarCategorias(){

        $stmt = Conexion::conectar()->prepare("SELECT id_categoria, nombre_categoria
                                                FROM categorias C
                                            order BY nombre_categoria asc");

        $stmt -> execute();

        return $stmt->fetchAll();
    }
}