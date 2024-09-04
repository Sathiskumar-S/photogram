<?php

function load_template($filename){
    include $_SERVER['DOCUMENT_ROOT']."/photogram/_templates/$filename.php";
}