<?php
require_once  './Models/TodoList.php';
require_once './BusinessLogic/AddTodoList.php';

addTodoList("Nama");
addTodoList("Nomer");
addTodoList("Kelas");

var_dump($todoList);