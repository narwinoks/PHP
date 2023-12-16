<?php

require_once './Helper/Input.php';
require_once  './BusinessLogic/RemoveTodoList.php';
function viewRemoveTodoList()
{
    echo "Remove TODO list :";
    $select = input("NOMER (x cencel)") .PHP_EOL;
    if ($select == "x") {
        echo "Cancel Remove Todo List";
    } else {
        $result = removeTodoList($select);
        if ($result) {
            echo "Remove Sucesss : ${select}" .PHP_EOL;
        } else {
            echo "Remove Failed : ${select}" .PHP_EOL;
        }
    }

}