
<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <h3 class="main-header">
        Modal
    </h3>
    <p>
        Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.
    </p>
    <h4 class="main-header">Example</h4>
    <button ca-modal="true" ca-modal-target="modal_target" ca-modal-width="50%" ca-modal-fix="true">Click Modal</button>
    <div id="modal_target" class="hidden"> 
        <div class="ca-modal-header">
            <button type="button" class="close" onclick="ca_close_box()" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h2>Modal header</h2>
        </div>
        <div class="ca-modal-body"> 
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="ca-modal-footer">
            <button class="ca-btn ca-tip-top" ca-original-title="Submit">Submit</button>
            <button class="ca-btn ca-tip-top" ca-original-title="Close" onclick="ca_close_box()">Close</button>
        </div>
    </div>

    <center>
        <div class="ex-modal-box">
            <div class="ex-modal-content"> 
                <div class="ca-modal-header">
                    <button type="button" class="close" onclick="ca_close_box()" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2>Modal header</h2>
                </div>
                <div class="ca-modal-body" >
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                        Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="ca-modal-footer">
                    <button class="ca-btn ca-tip-top" ca-original-title="Submit">Submit</button>
                    <button class="ca-btn ca-tip-top" ca-original-title="Close" onclick="ca_close_box()">Close</button>
                </div>
            </div>
        </div>
    </center>
    <h4 class="main-header">Script</h4>
    <pre class="prettyprint">
        &lt;button ca-modal="true" ca-modal-target="modal_target" ca-modal-width="50%" ca-modal-fix="true">Click Modal&lt;/button>
        &lt;div id="modal_target" class="hidden"> 
            &lt;div class="ca-modal-header">
                &lt;button type="button" class="close" onclick="ca_close_box()" data-dismiss="modal" aria-hidden="true">&times;&lt;/button>
                &lt;h2>Modal header&lt;/h2>
            &lt;/div>
            &lt;div class="ca-modal-body">
                &lt;p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                    Aldus PageMaker including versions of Lorem Ipsum.
                &lt;/p>
            &lt;/div>
            &lt;div class="ca-modal-footer">
                &lt;button class="ca-btn ca-tip-top" ca-original-title="Submit">Submit&lt;/button>
                &lt;button class="ca-btn ca-tip-top" ca-original-title="Close" onclick="ca_close_box()">Close&lt;/button>
            &lt;/div>
        &lt;/div> 
    </pre>
    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>