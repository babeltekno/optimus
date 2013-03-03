
<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */ 
?>
<h3 class="main-header">
    Collapse
</h3> 
<p>
    Get base styles and flexible support for collapsible components like accordions and navigation.
</p>
<h4 class="main-header">Example</h4> 
<pre class="prettyprint">
&lt;div class="ca-collapse" ca-coll-speed="slow"&gt;
    &lt;div class="active-coll-menu ca-coll-menu" ca-coll-target="#home"&gt;home2&lt;/div&gt;
        &lt;div class="ca-coll-child active-coll-content" id="home"&gt;
            &lt;h3>collapse home2&lt;/h3&gt;
            &lt;p&gt;
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;div class="ca-coll-menu" ca-coll-target="#post"&gt;post2&lt;/div&gt;
        &lt;div class="ca-coll-child" id="post"&gt;
            &lt;h3&gt;collapse post2&lt;/h3&gt;
            &lt;p&gt;
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;div class="ca-coll-menu" ca-coll-target="#page">page2&lt;/div&gt;
        &lt;div class="ca-coll-child" id="page"&gt;
            &lt;h3&gt;collapse page2&lt;/h3&gt;
            &lt;p&gt;
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;div class="ca-coll-menu" ca-coll-target="#contact">contact2&lt;/div&gt;
        &lt;div class="ca-coll-child" id="contact"&gt;
            &lt;h3&gt;collapse contact2&lt;/h3&gt;
            &lt;p&gt;
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            &lt;/p&gt;
        &lt;/div&gt;
&lt;/div&gt;
</pre>
<div class="ca-collapse" ca-coll-speed="slow">
    <div class="active-coll-menu ca-coll-menu" ca-coll-target="#home">home2</div>
        <div class="ca-coll-child active-coll-content" id="home">
            <h3>collapse home2</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    <div class="ca-coll-menu" ca-coll-target="#post">post2</div>
        <div class="ca-coll-child" id="post">
            <h3>collapse post2</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    <div class="ca-coll-menu" ca-coll-target="#page">page2</div>
        <div class="ca-coll-child" id="page">
            <h3>collapse page2</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    <div class="ca-coll-menu" ca-coll-target="#contact">contact2</div>
        <div class="ca-coll-child" id="contact">
            <h3>collapse contact2</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
</div> 
<?php
}else{
   header('Location: /docs/javascript/404.php');
}
?>