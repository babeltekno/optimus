<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') { 
    /* special ajax here */
    ?>
    <h3 class="main-header">Crud</h3>
    <p>Simple javascript for crud</p>
    <h4 class="main-header">Example</h4>
    <div id="ca-option-event">
        <button crud-name="check" class="ca-btn-crud icon-check ca-tip-top" ca-original-title="Select all" ca-table-check-all="true"></button>
        <button crud-name="list" ca-ajax="true" ca-ajax-url="crud/list.php" ca-ajax-target="#ca-crud-target" class="ca-btn-crud icon-list ca-tip-top" ca-original-title="List table"></button>
        <button crud-name="create" ca-ajax="true" ca-ajax-url="crud/form.php" ca-ajax-target="#ca-crud-target" class="ca-btn-crud icon-plus ca-tip-top" ca-original-title="Add row"></button>
        <button crud-name="delete" ca-crud-url="crud/delete.php" disabled="disabled" ca-crud-redirect="crud/list.php" ca-crud-data="#ca-crud-data" ca-crud-table-target="table.ca-table" class="ca-btn-crud icon-trash ca-tip-top" ca-original-title="Remove row"></button>
        <button crud-name="update" ca-crud-url="crud/form.php" disabled="disabled" ca-crud-redirect="crud/list.php" ca-crud-data="#ca-crud-data" ca-crud-table-target="table.ca-table" class="ca-btn-crud icon-edit ca-tip-top" ca-original-title="Edit row"></button>
        <input  type="name" name="search" placeholder="Search.." ca-crud-search="1" ca-search-target="#ca-crud-target">
        <button crud-name="list" ca-ajax="true" ca-ajax-url="crud/list.php" ca-ajax-target="#ca-crud-target" class="ca-right ca-btn-crud icon-refresh ca-tip-top" ca-original-title="Refresh"></button>
        <button crud-name="create" ca-ajax="true" ca-ajax-url="crud/form-modal.php" ca-ajax-target="ca-modalbox" ca-modal-width="50%" class="ca-right ca-btn-crud icon-add-ons ca-tip-top" ca-original-title="Add Modal"></button>
    </div>     
    <div id="ca-crud-target">
        <?php include 'list.php'; ?>
<!--        your target-->
    </div>    
    
    <h4 class="main-header">Script</h4>
<div class="ca-tab" ca-tab-parent=".my-tab1" ca-tab-animation="bounce">
        <a class="active" ca-tab-target="#index">Index</a>
        <a class="" ca-tab-target="#list">List</a>
        <a class="" ca-tab-target="#form">Form</a>
        <a class="" ca-tab-target="#create">Create</a>
        <a class="" ca-tab-target="#update">Update</a>
    </div>
    <div class="ca-tab-target my-tab1">
        <div class="ca-child-tab" id="index">
<pre class="prettyprint">
index.php
&lt;div id="ca-option-event">
   &lt;button crud-name="check" class="ca-btn-crud icon-check ca-tip-top" ca-original-title="Select all" ca-table-check-all="true"></button>
   &lt;button crud-name="list" ca-ajax="true" ca-ajax-url="crud/list.php" ca-ajax-target="#ca-crud-target" class="ca-btn-crud icon-list ca-tip-top" ca-original-title="List table">&lt;/button>
   &lt;button crud-name="create" ca-ajax="true" ca-ajax-url="crud/form.php" ca-ajax-target="#ca-crud-target" class="ca-btn-crud icon-plus ca-tip-top" ca-original-title="Add row">&lt;/button>
   &lt;button crud-name="delete" ca-crud-url="crud/delete.php" disabled="disabled" ca-crud-redirect="crud/list.php" ca-crud-data="#ca-crud-data" ca-crud-table-target="table.ca-table" class="ca-btn-crud icon-trash ca-tip-top" ca-original-title="Remove row">&lt;/button>
   &lt;button crud-name="update" ca-crud-url="crud/form.php" disabled="disabled" ca-crud-redirect="crud/list.php" ca-crud-data="#ca-crud-data" ca-crud-table-target="table.ca-table" class="ca-btn-crud icon-edit ca-tip-top" ca-original-title="Edit row">&lt;/button>
   &lt;input  type="name" name="search" placeholder="Search.." ca-crud-search="1" ca-search-target="#ca-crud-target">
   &lt;button crud-name="list" ca-ajax="true" ca-ajax-url="crud/list.php" ca-ajax-target="#ca-crud-target" class="ca-right ca-btn-crud icon-refresh ca-tip-top" ca-original-title="Refresh">&lt;/button>
   &lt;button crud-name="create" ca-ajax="true" ca-ajax-url="crud/form-modal.php" ca-ajax-target="ca-modalbox" ca-modal-width="50%" class="ca-right ca-btn-crud icon-add-ons ca-tip-top" ca-original-title="Add Modal">&lt;/button>
&lt;/div> 
&lt;div id="ca-crud-target">
    &lt;?php include 'list.php'; ?>
<!--        your target-->
&lt;/div>
</pre>
    </div>
        <div class="ca-child-tab" id="list">
            <pre class="prettyprint">
list.php
&lt;?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */ include '../../mongo/connection.php';
    ?>
    &lt;h4 class="main-header">&lt;span class="icon-list">&lt;/span> &nbsp;List&lt;/h4>

    &lt;?php
    $col = new MongoCollection($db, 'simplecrud');
    $result = $col->find()->sort(array('order'=>'desc'));
    ?>
    &lt;form id="ca-crud-data"> 
        &lt;table class="ca-sort ca-table ca-table-border" ca-table-check="true" ca-ajax-sort-url="crud/sort.php" cellspacing="0" cellpadding="0">
            &lt;tr class="ui-state-disabled">
                &lt;th style="width: 20px">&lt;input type="checkbox" ca-table-check-all="true">&lt;/th>
                &lt;th>Name&lt;/th> 
                &lt;th>Description&lt;/th>
            &lt;/tr>
            &lt;?php foreach ($result as $r) { ?>
                &lt;tr ca-table-check-this="1" id="id_<?php echo $r['_id']; ?>">
                    &lt;td>&lt;input type="checkbox" name="id[]" value="&lt;?php echo $r['_id']; ?>">&lt;/td>
                    &lt;td>&lt;?php echo $r['name']; ?>&lt;/td>
                    &lt;td>&lt;?php echo $r['description']; ?>&lt;/td>          
                &lt;/tr>
                &lt;?php
            }
            ?>
        &lt;/table>
    &lt;/form>
    &lt;?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>
            </pre>
        </div>
        <div class="ca-child-tab" id="create">
            <pre class="prettyprint">
create.php
&lt;?php
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

            </pre>
        </div>
        <div class="ca-child-tab" id="form">
            <pre class="prettyprint">
from.php
&lt;?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    include '../../mongo/connection.php';
    extract($_POST);
    if (isset($id['0'])) {
        $col = new MongoCollection($db, 'simplecrud');
        $r = $col->findOne(array('_id' => new MongoId($id['0'])));
    }
    ?>  
    &lt;h4 class="main-header">&lt;?php echo isset($r['_id']) ? '&lt;span class="icon-edit">&lt;/span> &nbsp;Update' : '&lt;span class="icon-plus">&lt;/span> &nbsp;Add' ?>&lt;/h4>
    &lt;form id="ca-crud-form">  
        &lt;input type="hidden" name="_id" value="<?php echo isset($r['_id']) ? $r['_id'] : '' ?>">
        &lt;p>
            &lt;input type="text" name="name" value="<?php echo isset($r['name']) ? $r['name'] : '' ?>" ca-validation="required" style="width: 98%">
        &lt;/p>
        &lt;p>
            &lt;textarea name="description" ca-validation="required"  style="width: 98%"><?php echo isset($r['description']) ? $r['description'] : '' ?>&lt;/textarea>
        &lt;/p>  
        &lt;p>
            &lt;a ca-ajax-url="<?php echo isset($id['0']) ? 'crud/update.php' : 'crud/create.php' ?>" ca-ajax="true" ca-ajax-data="#ca-crud-form" ca-ajax-type="POST" class="ca-btn">Submit&lt;/a> 
        &lt;/p> 
    &lt;/form>  
    &lt;?php }
?>

            </pre>
        </div>
        <div class="ca-child-tab" id="update">
            <pre class="prettyprint">
update.php
&lt;?php
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

            </pre>
        </div>
    <?php
} else {
    header('Location: ./404.php');
}
?>