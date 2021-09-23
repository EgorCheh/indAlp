<?php
$form = $_REQUEST['form'];
switch ($form) {
    case 'min':
        echo "min   ";
        echo $_REQUEST['name'];
        echo "   ";
        echo $_REQUEST['phone'];
        break;
    case '15pass':
        echo "pass   ";
        echo $_REQUEST['name'];
        echo "   ";
        echo $_REQUEST['phone'];
        echo "   ";
        echo $_REQUEST['mail'];
        break;
    case 'work':
        echo "work   ";
        echo $_REQUEST['name'];
        echo "   ";
        echo $_REQUEST['phone'];
        echo "   ";
        echo $_REQUEST['mail'];
        break;
    default:
    echo"error";
}
