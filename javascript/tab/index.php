
<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
    <h3 class="main-header">
         Tab
    </h3> 
<p>
    Required <code>ca-tab-optimus.js</code> and <code>ca-tab-optimus.css</code>
</p>
<h4 class="main-header">Example</h4> 
    <div class="ca-tab" ca-tab-parent=".my-tab1" ca-tab-animation="bounce">
        <a class="active" ca-tab-target="#home">home</a>
        <a class="" ca-tab-target="#post">post</a>
        <a class="" ca-tab-target="#home1">home1</a>
        <a class="" ca-tab-target="#post1">post1</a>
    </div>
    <div class="ca-tab-target my-tab1">
        <div class="ca-child-tab" id="home">
            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
        </div>
        <div class="ca-child-tab" id="post">
            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
        </div>
        <div class="ca-child-tab" id="home1">
            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
        </div>
        <div class="ca-child-tab" id="post1">
            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
        </div>
    </div> 
<h4 class="main-header">Script</h4>
<pre class="prettyprint">
&lt;div class="ca-tab" ca-tab-parent=".my-tab1" ca-tab-animation="bounce">
   &lt;a class="active" ca-tab-target="#home">home&lt;/a>
   &lt;a class="" ca-tab-target="#post">post&lt;/a>
   &lt;a class="" ca-tab-target="#home1">home1&lt;/a>
   &lt;a class="" ca-tab-target="#post1">post1&lt;/a>
&lt;/div>
&lt;div class="ca-tab-target my-tab1">
   &lt;div class="ca-child-tab" id="home">
      Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. 
   &lt;/div>
   &lt;div class="ca-child-tab" id="post">
      Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua,
   &lt;/div>
   &lt;div class="ca-child-tab" id="home1">
      Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua,
   &lt;/div>
   &lt;div class="ca-child-tab" id="post1">
      Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 
   &lt;/div>
 &lt;/div> 
</pre>
    <?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>