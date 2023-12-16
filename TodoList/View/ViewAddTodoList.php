<?php
require_once './Helper/Input.php';
require_once './BusinessLogic/AddTodoList.php';
function viewAddTodoList()
{
    echo "Add TODO List" . PHP_EOL;
    $todo = input("TODO (x to cancel)");
    if ($todo == "x"){
        echo  "Cancel Add todo :";
    }else{
        addTodoList($todo);
    }
}