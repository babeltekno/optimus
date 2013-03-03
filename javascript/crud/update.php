<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    include '../../mongo/connection.php';  
    extract($_POST);
    if (isset($name)) {
        $col = new MongoCollection($db, 'simplecrud');
        $data = array(
            'name' => $name,
            'description' => $description
        );
        $col->update(array('_id' => new MongoId($_id)),$data);  
    }
}
?>
