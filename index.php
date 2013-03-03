<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <meta http-equiv='expires' content='-1' />
        <meta http-equiv= 'pragma' content='no-cache' />  
        <link type="text/css" rel="stylesheet" href="style.css"> 
        <script type="text/javascript" src="js/jquery.1.7.2.min.js"></script>
        <script type="text/javascript" src="js/ajax-validation.js"></script>
        <script type="text/javascript" src="js/ajax-optimus.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script> 
        <link type="text/css" rel="stylesheet" href="prettify/prettify.css"> 
        <script type="text/javascript">
            var loadImg='<img src="loading.gif">',
            ca_animate_ = 'none',
            ca_base_ = 'http://192.168.1.9:81/cajs/'; 
        </script>
        <title>ROCK - JavaScript</title>      
    </head>
    <body onload="prettyPrint()">
        <div id="main-element">
            <?php
            include 'top.php';
            ?>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span3">
                        <ul class="ca-doc-menu">
                            <li>
                                <a href="#!%content/ajax/ajax.php" ca-ajax="true" ca-ajax-target="#ca_right">Setting</a>
                                <ul>
                                    <li>
                                        <a href="#!%content/ajax/ca_ajax.php" ca-ajax="true" ca-ajax-target="#ca_right">ca_base_</a>
                                    </li>
                                    <li>
                                        <a href="#!%content/ajax/ca_animate_.php" ca-ajax="true" ca-ajax-target="#ca_right">ca_animate_</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#!%content/ajax/ajax.php" ca-ajax="true" ca-ajax-target="#ca_right">Ajax</a>
                                <ul>
                                    <li>
                                        <a href="#!%content/ajax/ca_ajax.php" ca-ajax="true" ca-ajax-target="#ca_right">ca_ajax</a>
                                    </li>
                                    <li>
                                        <a href="#!%content/ajax/ca_ajax_type.php" ca-ajax="true" ca-ajax-target="#ca_right">ca_ajax_type</a>
                                        <ul>
                                            <li>
                                                <a href="#!%content/ajax/put.php" ca-ajax="true" ca-ajax-target="#ca_right">PUT</a>
                                            </li>
                                            <li>
                                                <a href="#!%content/ajax/get.php" ca-ajax="true" ca-ajax-target="#ca_right">GET</a>
                                            </li>
                                            <li>
                                                <a href="#!%content/ajax/post.php" ca-ajax="true" ca-ajax-target="#ca_right">POST</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#!%content/ajax/ca_ajax_url.php" ca-ajax="true" ca-ajax-target="#ca_right">ca_ajax_url</a>
                                    </li>
                                    <li>
                                        <a href="#!%content/ajax/ca_ajax_target.php" ca-ajax="true" ca-ajax-target="#ca_right">ca_ajax_target</a>
                                    </li>
                                    <li>
                                        <a href="#!%content/ajax/ca_ajax_data.php" ca-ajax="true" ca-ajax-target="#ca_right">ca_ajax_data</a>
                                    </li>
                                    <li>
                                        <a href="#!%content/ajax/ca_ajax_redirect.php" ca-ajax="true" ca-ajax-target="#ca_right">ca_ajax_redirect</a>
                                    </li>
                                </ul>
                            </li> 
                        </ul>
                    </div>
                    <div class="span9" id="ca_right"> 

                    </div>
                </div>
            </div> 
        </div>
    </body>
</html>
<script type='text/javascript' src='prettify/prettify.js'></script> 