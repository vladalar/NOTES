<?php
require_once 'load-functions.php';

function viewnotes($data){

    foreach ($data as $key => $line) {
        echo $line['id'];
        echo $line['title'];
    }



    //for($i=1;$i<=count($data[$id]);$i)
    //echo $data;

    /*
$lines = file_get_contents(dirname(__FILE__) . '/saved/saved');

echo str_replace("\n","&lt;br&gt;",$lines);*/

}

function viewnote($id){


    echo $data[$id];

}
