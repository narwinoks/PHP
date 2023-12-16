<?php
require_once  './Models/TodoList.php';
require_once './BusinessLogic/ShowTodoList.php';
require_once './View/ViewShowTodoLIst.php';
require_once  './View/ViewRemoveTodoList.php';
require_once './Helper/Input.php';
function ViewShowTodoList()
{
    while (true) {
        showTodoList();
        echo "Menu" . PHP_EOL;
        echo "1.Add Todo List" . PHP_EOL;
        echo "2.Remove Todo List" . PHP_EOL;
        echo "x.Close" . PHP_EOL;

        $selected = input("PILIH");
        if ($selected == "1") {
            viewAddTodoList();
        } else if ($selected == "2") {
            viewRemoveTodoList();
        } else if ($selected == "x") {
            break;
        } else {
            echo "Please select one" . PHP_EOL;
        }
    }
    echo  "SAMPAI JUMPA LAGI" . PHP_EOL;
}