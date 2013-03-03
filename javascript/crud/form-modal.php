<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    include '../../mongo/connection.php';
    extract($_POST);
    if (isset($id['0'])) {
        $col = new MongoCollection($db, 'simplecrud');
        $r = $col->findOne(array('_id' => new MongoId($id['0'])));
    }
    ?> 
    <div class="ca-modal-header">
        <button type="button" class="close" onclick="ca_close_box()" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2><span class="icon-edit"></span>Modal Add</h2>
    </div> 
    <div class="ca-modal-content">
        <form id="ca-crud-form">  
            <input type="hidden" name="_id" value="<?php echo isset($r['_id']) ? $r['_id'] : '' ?>">
            <p>
                <input type="text" name="name" value="<?php echo isset($r['name']) ? $r['name'] : '' ?>" ca-validation="required" style="width: 98%">
            </p>
            <p>
                <textarea name="description" ca-validation="required"  style="width: 98%"><?php echo isset($r['description']) ? $r['description'] : '' ?></textarea>
            </p>  
        </form>
    </div>
    <div class="ca-modal-footer">
        <a ca-ajax-url="<?php echo isset($id['0']) ? 'crud/update.php' : 'crud/create.php' ?>" ca-ajax="true" ca-ajax-data="#ca-crud-form" ca-ajax-type="POST" class="ca-btn ca-tip-top" ca-original-title="Submit">Submit</a> 
        <a href="javascript:void(0)" onclick="ca_close_box()" class="ca-btn ca-tip-top" ca-original-title="Close">Close</a> 
    </div> 

<?php }
?>
