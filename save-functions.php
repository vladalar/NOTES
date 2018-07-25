<?php
require_once 'load-functions.php';

function savenote(){

    $id=(int)(file_get_contents(dirname(__FILE__) . '/id_list/id_list'));
    $id=$id+1;

    $title=$_POST['title'];
    $content=$_POST['content'];
    $dateCreated="Date created: " .date("l") . ", " . date("d/m/Y");
    $dateModified="Last update:  " . date("l") . ", " . date("d/m/Y");

    $data = array('id' => $id, 'title' => $title, 'content' => $content, 'dateCreated' => $dateCreated, 'dateModified' => $dateModified);

    //Schimbam id-ul stocat local
    file_put_contents( dirname(__FILE__) . '/id_list/id_list',  $id ,  LOCK_EX);

    //Incarcam notes
    $notes = loadnotes();

    $notes[] = $data;

    //Adaugam datele noi la array-ul nostru



    //Dam overwrite fisierului ce contine doar array-urile cu notes vechi pentru a adauga arrayul ce contine si pe cel nou
    file_put_contents( dirname(__FILE__) . '/saved/saved',  json_encode($notes) ,  LOCK_EX);

    //Ne intoarcem la index.php
    header("Location: http://pixy.local/notes/index.php");
    die();



}
savenote();