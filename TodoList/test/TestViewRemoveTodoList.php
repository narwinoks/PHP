<?php
require_once  './Models/TodoList.php';
require_once  './View/ViewRemoveTodoList.php';
require_once './BusinessLogic/AddTodoList.php';
require_once './BusinessLogic/ShowTodoList.php';

addTodoList("EKO");
addTodoList(1);
addTodoList(2);
addTodoList(3);
addTodoList(4);
showTodoList();
viewRemoveTodoList();
showTodoList();