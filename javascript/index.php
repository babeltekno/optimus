<!DOCTYPE html>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link type="text/css" rel="stylesheet" href="../style.css">   
        <script type="text/javascript" src="../js/jquery.1.7.2.min.js"></script> 
        <script type="text/javascript" src="../js/jquery.ui.1.7.2.min.js"></script> 

        <script type="text/javascript" src="../js/ca-core-optimus.js"></script>
        <script type="text/javascript" src="../js/ca-ajax-crud.js"></script>
        <script type="text/javascript" src="../js/ca-ajax-optimus.js"></script>
        <script type="text/javascript" src="../js/ca-modal-optimus.js"></script>
        <script type="text/javascript" src="../js/ca-dropdown-optimus.js"></script>
        <script type="text/javascript" src="../js/ca-collapse-optimus.js"></script>
        <script type="text/javascript" src="../js/ca-validation-optimus.js"></script>
        <script type="text/javascript" src="../js/ca-tab-optimus.js"></script>
        <script type="text/javascript" src="../js/ca-popover-optimus.js"></script>
        <script type="text/javascript" src="../js/ca-tooltip-optimus.js"></script> 
        <link type="text/css" rel="stylesheet" href="../prettify/prettify.css"> 
        <script type="text/javascript">
            var ca_loading_='Loading...',
            ca_animate_ = 'none', 
            ca_base_ = '/docs/javascript/',  
            ca_wrapper_ = '#ca_right'; 
            var _ca_menu_selected = function(i){
                $('.ca-doc-menu li a').removeClass('active');
                $(i).addClass('active');
            }
        </script>
        <?php
        $ca_base_ = '/docs/javascript/';
        ?>
        <title>ROCK - JavaScript</title>      
    </head>
    <body onload="prettyPrint()">
        <div id="main-element">
            <?php 
            include '../top.php';
            ?>  
            <div class="doc-left">
                <div class="fixed">
                    <ul class="ca-doc-menu">
                        <li>
                            <a onclick="_ca_menu_selected(this)" href="<?php echo $ca_base_ ?>#ajax/index.php" ca-url-push="true" ca-ajax="true" ca-ajax-target="#ca_right">Ajax</a>                                
                        </li>
                        <li>
                            <a onclick="_ca_menu_selected(this)" href="<?php echo $ca_base_ ?>#collapse/index.php" ca-url-push="true"  ca-ajax="true" ca-ajax-target="#ca_right">Collapse</a>
                        </li>
                        <li>
                            <a onclick="_ca_menu_selected(this)" href="<?php echo $ca_base_ ?>#crud/index.php" ca-url-push="true"  ca-ajax="true" ca-ajax-target="#ca_right">Crud</a> 
                        </li>
                        <li>
                            <a onclick="_ca_menu_selected(this)" href="<?php echo $ca_base_ ?>#dropdown/index.php" ca-url-push="true"  ca-ajax="true" ca-ajax-target="#ca_right">Dropdown</a>
                        </li>
                        <li>
                            <a onclick="_ca_menu_selected(this)" href="<?php echo $ca_base_ ?>#modal/index.php" ca-url-push="true"  ca-ajax="true" ca-ajax-target="#ca_right">Modal</a>
                        </li>
                        <li>
                            <a onclick="_ca_menu_selected(this)" href="<?php echo $ca_base_ ?>#popover/index.php" ca-url-push="true"  ca-ajax="true" ca-ajax-target="#ca_right">Popover</a>
                        </li>
                        <li>
                            <a onclick="_ca_menu_selected(this)" href="<?php echo $ca_base_ ?>#tooltip/index.php" ca-url-push="true"  ca-ajax="true" ca-ajax-target="#ca_right">Tooltip</a>
                        </li> 
                        <li>
                            <a onclick="_ca_menu_selected(this)" href="<?php echo $ca_base_ ?>#tab/index.php" ca-url-push="true"  ca-ajax="true" ca-ajax-target="#ca_right">Tab</a>
                        </li> 
                        <li>
                            <a onclick="_ca_menu_selected(this)" href="<?php echo $ca_base_ ?>#validation/index.php" ca-url-push="true"  ca-ajax="true" ca-ajax-target="#ca_right">Validation</a>
                        </li>  
                        <li>
                            <a onclick="_ca_menu_selected(this)" href="<?php echo $ca_base_ ?>#setting/index.php" ca-url-push="true"  ca-ajax="true" ca-ajax-target="#ca_right">Setting</a> 
                        </li> 
                    </ul>
                </div>
            </div>
            <div class="doc-right" id="ca_right">  
            </div> 
        </div> 
    </body>
</html>
<script type='text/javascript' src='../prettify/prettify.js'></script> 