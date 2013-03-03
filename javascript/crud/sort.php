<?php

include '../../mongo/connection.php';
$col = new MongoCollection($db, 'simplecrud');
extract($_POST);
$counter = 1;
foreach ($id as $val){  
    $col->update(array('_id'=> new MongoId($val)), array('$set'=>array('order' => $counter)));
    $counter = $counter + 1;
}
?>
