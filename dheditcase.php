<?php
    ////////////////////////////////////////////
    //  Script to Edit existing case
    ////////////////////////////////////////////

    //print_r($_POST);
    //echo "<br>";

    $id = $_POST['id'];

    // id is not a property of the case object
    unset($_POST['id']);
    
    //print_r($_POST);
    //echo "<br>";

    $data = file_get_contents("data/mycases.json");
    $data = json_decode($data, true);

    $data[$id] = $_POST;

    $data = json_encode($data);

    file_put_contents("data/mycases.json", $data);
  
    header('location:mycases.php');
?>