<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */ include '../../mongo/connection.php';
    ?>
    <h4 class="main-header"><span class="icon-list"></span> &nbsp;List</h4>

    <?php
    $col = new MongoCollection($db, 'simplecrud');
    $result = $col->find()->sort(array('order'=>'desc'));
    ?>
    <form id="ca-crud-data"> 
        <table class="ca-sort ca-table ca-table-border" ca-table-check="true" ca-ajax-sort-url="crud/sort.php" cellspacing="0" cellpadding="0">
            <tr class="ui-state-disabled">
                <th style="width: 20px"><input type="checkbox" ca-table-check-all="true"></th>
                <th>Name</th> 
                <th>Description</th>
            </tr>
            <?php foreach ($result as $r) { ?>
                <tr ca-table-check-this="1" id="id_<?php echo $r['_id']; ?>">
                    <td><input type="checkbox" name="id[]" value="<?php echo $r['_id']; ?>"></td>
                    <td><?php echo $r['name']; ?></td>
                    <td><?php echo $r['description']; ?></td>          
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>