<?php

require_once "../controlador/categorias.controlador.php";
require_once "../modelo/categorias.modelo.php";

class AjaxCategorias{

    public function ajaxListarCategorias(){

        $categorias = CategoriasControlador::ctrListarCategorias();

        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }

}

$categorias = new AjaxCategorias();
$categorias -> ajaxListarCategorias();