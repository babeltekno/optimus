
<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <h3 class="main-header">
        Popover
    </h3> 
<p>
    Required <code>ca-popover-optimus.js</code> and <code>ca-popover-optimus.css</code>
</p>
<h4 class="main-header">Example</h4>
    <center>
        <button class="ca-pop-left" ca-pop="true" ca-pop-icon="icon-info-sign" ca-pop-header="Hello!!" ca-pop-content="Hello World!! Can you list me">Popover Left</button>
        <button class="ca-pop-top" ca-pop="true" ca-pop-icon="icon-info-sign" ca-pop-header="Hello!!" ca-pop-content="Hello World!! Can you list me">Popover Top</button>
        <button class="ca-pop-bottom" ca-pop="true" ca-pop-icon="icon-info-sign" ca-pop-header="Hello!!" ca-pop-content="Hello World!! Can you list me">Popover Bottom</button>
        <button class="ca-pop-right" ca-pop="true" ca-pop-icon="icon-info-sign" ca-pop-header="Hello!!" ca-pop-content="Hello World!! Can you list me">Popover Right</button>
    </center>
<h4 class="main-header">Script</h4>
    <pre class="prettyprint">
&lt;button class="ca-pop-left" ca-pop="true" ca-pop-icon="icon-info-sign" ca-pop-header="Hello!!" ca-pop-content="Hello World!! Can you list me">popover left&lt;/button>
&lt;button class="ca-pop-top" ca-pop="true" ca-pop-icon="icon-info-sign" ca-pop-header="Hello!!" ca-pop-content="Hello World!! Can you list me">popover top&lt;/button>
&lt;button class="ca-pop-bottom" ca-pop="true" ca-pop-icon="icon-info-sign" ca-pop-header="Hello!!" ca-pop-content="Hello World!! Can you list me">popover bottom&lt;/button>
&lt;button class="ca-pop-right" ca-pop="true" ca-pop-icon="icon-info-sign" ca-pop-header="Hello!!" ca-pop-content="Hello World!! Can you list me">popover right&lt;/button>
    </pre> 
    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>