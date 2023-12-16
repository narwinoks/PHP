<?php
require_once  './Models/TodoList.php';
require_once  './BusinessLogic/RemoveTodoList.php';
require_once  './BusinessLogic/AddTodoList.php';
require_once  './BusinessLogic/ShowTodoList.php';
addTodoList("EKO");
addTodoList("BUDI");
addTodoList("WAWAN");
addTodoList("MAMAT");
showTodoList();
removeTodoList(3);
showTodoList();