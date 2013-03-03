
<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <h3 class="main-header">
        Tooltip
    </h3>
<p>
    Required <code>ca-tooltip-optimus.js</code> and <code>ca-tooltip-optimus.css</code>
</p>
<h4 class="main-header">Example</h4>
<center>
    <button class="ca-tip-left" ca-tip="true" ca-tip-icon="icon-info-sign" ca-original-title="Hello World!! Can you list me">Tooltip left</button>
    <button class="ca-tip-top" ca-tip="true" ca-tip-icon="icon-info-sign" ca-original-title="Hello World!! Can you list me">Tooltip top</button>
    <button class="ca-tip-bottom" ca-tip="true" ca-tip-icon="icon-info-sign" ca-original-title="Hello World!! Can you list me">Tooltip bottom</button>
    <button class="ca-tip-right" ca-tip="true" ca-tip-icon="icon-info-sign" ca-original-title="Hello World!! Can you list me">Tooltip right</button>
</center>
    <h4 class="main-header">Script</h4>
    <pre class="prettyprint">
&lt;button class="ca-tip-left" ca-tip="true" ca-tip-icon="icon-info-sign" ca-original-title="Hello World!! Can you list me">Tooltip left&lt;/button>
&lt;button class="ca-tip-top" ca-tip="true" ca-tip-icon="icon-info-sign" ca-original-title="Hello World!! Can you list me">Tooltip top&lt;/button>
&lt;button class="ca-tip-bottom" ca-tip="true" ca-tip-icon="icon-info-sign" ca-original-title="Hello World!! Can you list me">Tooltip bottom&lt;/button>
&lt;button class="ca-tip-right" ca-tip="true" ca-tip-icon="icon-info-sign" ca-original-title="Hello World!! Can you list me">Tooltip right&lt;/button>
    </pre>
    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>