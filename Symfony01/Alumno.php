<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Alumno
 *
 * @author huber
 */
class Alumno {

    private int $id_alumno;
    private String $nombre;

    function __construct(int $id_alumno, String $nombre) {
        $this->id_alumno = $id_alumno;
        $this->nombre = $nombre;
    }

    public function getId_alumno(): int {
        return $this->id_alumno;
    }

    public function getNombre(): String {
        return $this->nombre;
    }

    public function setId_alumno(int $id_alumno): void {
        $this->id_alumno = $id_alumno;
    }

    public function setNombre(String $nombre): void {
        $this->nombre = $nombre;
    }

}
