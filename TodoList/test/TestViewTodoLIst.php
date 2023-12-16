<?php
require_once  './View/ViewShowTodoLIst.php';
require_once  './BusinessLogic/AddTodoList.php';

addTodoList("WINARNO");
addTodoList("GANTENG");

ViewShowTodoList();