<?php

class User {
    private int $id_usuario;
   private String $nombre;
   private String $tipo_usuario;
   
   
    public function __construct(int $id_usuario, String $nombre, String $tipo_usuario) {
       $this->id_usuario = $id_usuario;
       $this->nombre = $nombre;
       $this->tipo_usuario = $tipo_usuario;
   }
   
   
   public function getId_usuario(): int {
       return $this->id_usuario;
   }

   public function getNombre(): String {
       return $this->nombre;
   }

   public function getTipo_usuario(): String {
       return $this->tipo_usuario;
   }

   public function setId_usuario(int $id_usuario): void {
       $this->id_usuario = $id_usuario;
   }

   public function setNombre(String $nombre): void {
       $this->nombre = $nombre;
   }

   public function setTipo_usuario(String $tipo_usuario): void {
       $this->tipo_usuario = $tipo_usuario;
   }
}
