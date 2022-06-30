<?php
include_once 'model/model.php';
class Controller{
    function menu(){
        include 'view/menu.php';
    }
    function red(){
        include 'view/red.php';
    }
    function green(){
        include 'view/yellow.php';
    }
}