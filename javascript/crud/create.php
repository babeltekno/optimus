<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */

    extract($_POST);
    if (isset($name)) {
        include '../../mongo/connection.php';
        $col = new MongoCollection($db, 'simplecrud');
        $data = array(
            'name' => $name,
            'description' => $description,
            'order' => $col->count()+1
        );
        $col->insert($data);
    }
}
?>
