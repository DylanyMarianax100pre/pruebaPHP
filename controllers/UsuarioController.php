<?php

//Aca mostramos todas acciones que puede hacer un controlador
class UsuarioController{

    public function mostrarTodos(){

         require_once 'models/UsuarioModel.php';

        $usuario = new Usuario();

        $todos_los_ususarios = $usuario->conseguirTodos();

        require_once 'views/usuario/mostrar-Todos.php';
    }

}