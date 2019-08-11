<?php
    //echo $_REQUEST['id'];
    $id = $_REQUEST['id'];
    $data = file_get_contents("data/mycases.json");
    $data = json_decode($data, true);

    $data[$id]['deleted'] = 'y';    // mark case deleted

    $data = json_encode($data);
    file_put_contents("data/mycases.json", $data);
    header('location:mycases.php');
?>
