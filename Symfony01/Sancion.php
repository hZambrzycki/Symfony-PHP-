<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sancion
 *
 * @author gorka
 */
class Sancion {
    private int $id_sancion;
    private int $gravedad;
    private int $descripcion;

    function __construct(int $id_sancion, int $gravedad, int $descripcion) {
        $this->id_sancion = $id_sancion;
        $this->gravedad = $gravedad;
        $this->descripcion = $descripcion;
    }
    function getId_sancion(): int {
        return $this->id_sancion;
    }

    function getGravedad(): int {
        return $this->gravedad;
    }

    function getDescripcion(): int {
        return $this->descripcion;
    }

    function setId_sancion(int $id_sancion): void {
        $this->id_sancion = $id_sancion;
    }

    function setGravedad(int $gravedad): void {
        $this->gravedad = $gravedad;
    }

    function setDescripcion(int $descripcion): void {
        $this->descripcion = $descripcion;
    }


}
