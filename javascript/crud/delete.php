<?php
include '../../mongo/connection.php';
$col = new MongoCollection($db,'simplecrud');  
extract($_POST); 
if (isset($id['0'])) {  
    $col->remove(array('_id'=>new MongoId($id['0']))); 
}
 
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
