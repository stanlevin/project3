<?php 

//print_r($_POST);
//echo '<br>';


$data = file_get_contents("data/mycases.json");
$data = json_decode($data, true);

$itemCount = count($data);

echo "Number of cases on file: ". $itemCount . "<br>"; 

//Generate new case id
$newCaseId = ++$itemCount;
//echo "New Case Id: ". $newCaseId . "<br>";

//Add new case to associative array
$data[$newCaseId] = $_POST;

//print_r($data);
//echo '<br>';

$data = json_encode($data);
file_put_contents('data/mycases.json', $data);

header('location:mycases.php');
?>
