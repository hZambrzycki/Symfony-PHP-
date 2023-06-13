<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Falta
 *
 * @author gorka
 */
class Falta {

    private int $id_falta;
    private String $gravedad;
    private String $descripcion;

    function __construct(int $id_falta, String $gravedad, String $descripcion) {
        $this->id_falta = $id_falta;
        $this->gravedad = $gravedad;
        $this->descripcion = $descripcion;
    }

    function getId_falta(): int {
        return $this->id_falta;
    }

    function getGravedad(): String {
        return $this->gravedad;
    }

    function getDescripcion(): String {
        return $this->descripcion;
    }

    function setId_falta(int $id_falta): void {
        $this->id_falta = $id_falta;
    }

    function setGravedad(String $gravedad): void {
        $this->gravedad = $gravedad;
    }

    function setDescripcion(String $descripcion): void {
        $this->descripcion = $descripcion;
    }

}
