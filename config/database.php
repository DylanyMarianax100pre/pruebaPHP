<?php

class database{
    public static function conectar(){
        $conexion = new mysqli("localhost","root","", "tienda2");
        $conexion->query("SET NAMES 'utf-8'");
    }
}