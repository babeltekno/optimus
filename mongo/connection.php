<?php
// try to connection with mongo DB
try {
    $m = new MongoClient('mongodb://hadinug:hadidukexzfv1@ds051437.mongolab.com:51437/documentation'); 
    $db = $m->documentation;
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
} 
?>
