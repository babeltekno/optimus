### README.MD ###

For detail documentation please visit <a href="http://babeltekno.com/optimus/javascript/#ajax/index.php" target="_blank">optimus</a>

What are you looking for in website development?, Is it easy development?... Yes it was, maybe until 90% peoples 
on website development is looking for it.Whether it's easy understanding from syntax and many thing else.
So here we are CodeAnalytic TEAM provide a simple javascript framework in every technology build codeanalytic CMS.
In this document we are in javascript, So here we will focus in javascript build codeanalytic. 

I'll remember that codeanalytic is use much javascript framework especially jQuery and we are combine to be simple
framework for support codeanalytic development with fast and easy.
   
   
[b]FAST[/b], is the main thing, that we provide in codeanalytic CMS. There are many way to optimize your website to be fast, where one of them is ajax optimize.
We are provide a simple javascript API to developer, and we named <code>ajax-optimus</code>, where
ajax-optimus is allow you to add ajax request in every element has defined the attribute <code>ca-ajax="true"</code> with easy and simple.
In this case, ajax-optimus is provide three method witch rich and return value with different method. They are 
<code>ca-ajax-type="PUT"</code>,
<code>ca-ajax-type="GET"</code>, 


<code>ca-ajax-type="POST"</code>    
</p> 
<h4 class="main-header">Attribute</h4>
<table class="ca-table ca-table-border" cellspacing="0" cellpadding="0">
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Default</th>
        <th>Description</th>
    </tr>
    <tr class="zebra">
        <td>ca-ajax</td>
        <td>String</td>
        <td>none</td>
        <td>Initialize the element as ajax request when element on Click</td>
    </tr>
    <tr>
        <td>ca-ajax-data</td>
        <td>Selector</td>
        <td>none</td>
        <td>Get data serialize from element <code>&lt;form&gt;</code> base of selector syntax</td>
    </tr>
    <tr class="zebra">
        <td>ca-ajax-redirect</td>
        <td>String</td>
        <td>none</td>
        <td>The redirect url after the first ajax process is success</td>
    </tr>
    <tr>
        <td>ca-ajax-target</td>
        <td>Selector</td>
        <td>none</td>
        <td>The element selector for put the result of ajax request. HTML value from ajax request will be replace to element was defined in selector</td>
    </tr>
    <tr class="zebra">
        <td>ca-ajax-type</td>
        <td>String</td>
        <td>PUT</td>
        <td>The type of mothod ajax request. There are three method <code>PUT,POST,GET</code></td>
    </tr>
    <tr>
        <td>ca-ajax-url</td>
        <td>Stringr</td>
        <td>none</td>
        <td>The url address to sent request as ajax</td>
    </tr>
</table>
<p>
    Learn more about ajax-optimus attribute:
</p>
</div>
<div id="ca_ajax_data">
    <h3 class="main-header">
        ca-ajax-data
    </h3> 
    <p>
        <b>ca-ajax-data</b> is the attribute name whether it's id,class,name of &lt;form&gt;. Implementation in code is <b>ca-ajax-data="form[attr_name='value_name']"</b>
        This attribute just run if you define the <code>ca-ajax-type="POST|GET"</code>, see how it's work
    </p>
    <h4 class="main-header">Syntax</h4>
    <code>ca-ajax-data="form[attr_name='value_name']"</code>
    <h4 class="main-header">Example</h4>
    
    <pre class="prettyprint">
&lt;form name="ca-form-user"&gt;
   &lt;input type="text" name="yourname"&gt; Input your name
&lt;/form>
&lt;p&gt;
   &lt;a class="ca-btn" href="ajax/data/data.php" ca-ajax="true" ca-ajax-type="POST" ca-ajax-data="form[name='ca-form-user']" ca-ajax-target="ca-modalbox"&gt;send&lt;/a&gt;
&lt;/p&gt;
    </pre> 
</div>
<div id="ca_ajax_redirect">
    <h3 class="main-header">
        ca-ajax-redirect
    </h3> 
    <p>
        <b>ca-ajax-redirect</b> is the attribute name whether it's contained the page url want to redirect after ajax request.
        Implementation in code is <b>ca-ajax-redirect="url_redirect"</b>
        This attribute just run if you define the ca-ajax-type="POST|GET", see how it's work
    </p>
    <h4 class="main-header">Syntax</h4>
    <code>ca-ajax-redirect="url_redirect"</code>
    <h4 class="main-header">Example</h4>
    
    <pre class="prettyprint">
&lt;form name="ca-form-redirect"&gt;
   &lt;input type="text" name="yourname" ca-validation="required" &gt; Input your name
&lt;/form>
&lt;p&gt;
   &lt;a class="ca-btn" href="ajax/data/data.php" ca-ajax="true" ca-ajax-type="POST" ca-ajax-redirect="ajax/data/redirect.php" ca-ajax-data="form[name='ca-form-user']" ca-ajax-target="#ca_right"&gt;send&lt;/a&gt;
&lt;/p&gt;
    </pre> 

</div>
<div id="ca_ajax_target">
    <h3 class="main-header">
        ca-ajax-target
    </h3> 
    <p>
        <b>ca-ajax-target</b> is the place where you put or view the ajax result. You can define the target as id,class or another attribute name of HTML element. But
        the result is able to view as modalbox with <code>ca-ajax-target="ca-modalbox"</code>

    </p>
    <h4 class="main-header">Syntax</h4>
    <code>ca-ajax-target="your_target"</code>
    <h4 class="main-header">Example</h4>
    

    <pre class="prettyprint">
&lt;a href="ajax/data/put.php" ca-ajax="true" ca-ajax-target="#id-target"&gt;id&lt;/a&gt;
&lt;a ca-ajax-url="ajax/data/put.php" ca-ajax="true" ca-ajax-target=".class-target"&gt;class&lt;/a&gt;
&lt;a href="ajax/data/put.php" ca-ajax="true" ca-ajax-target="div[name='my-target']"&gt;other&lt;/a&gt;
&lt;a href="ajax/data/modal.php" ca-ajax="true" ca-ajax-target="ca-modalbox"  ca-modal-fix="true"&gt;modalbox&lt;/a&gt;
    </pre> 
</div>
<div id="ca_ajax_type">
    <h3 class="main-header">
        ca-ajax-type
    </h3> 
    <p>
        The attr "ca-ajax-type" has three value, where as default is <b>PUT</b>. The different of the third value is type of request.
        <code>ca-ajax-type="PUT"</code>,
        <code>ca-ajax-type="GET"</code>, 
        <code>ca-ajax-type="POST"</code>  
        every attribute is use in different case, See how it's used.
    </p> 
    <!--include PUT documentation-->
    <h4 class="main-header" id="PUT">
        PUT 
    </h4> 
    <p>
        <b>PUT</b> method is allow you to put a html value in element target who has defined in <code>ca-ajax-target="target-name"</code>. The target 
        name must be define as class,id or another attribute in HTML element. The ajax target not only limit as element but you can view the result as <b>lightbox</b>.
        Learn more about <code>ca-ajax-target</code>
    </p>
    <h4 class="main-header">Syntax</h4>
    <code>ca-ajax-type="PUT"</code>
    <h4 class="main-header">Example</h4>
   
    <pre class="prettyprint">
&lt;a href="ajax/data/put.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#target"&gt;PUT a html page&lt;/a&gt;
    </pre> 

    <!--include POST documentation-->
    <h4 class="main-header" id="GET">
        GET 
    </h4> 
    <p>
        GET method is allow you to POST a variable request form to server as ajax and return html page in element target who has defined in <code>ca-ajax-target="target-name"</code>
    </p>
    <h4 class="main-header">Syntax</h4>
    <code>ca-ajax-type="GET"</code>
    <h4 class="main-header">Example</h4>
    

    <pre class="prettyprint">
&lt;form id="data-get"&gt;
    &lt;input type="text" name="yourname" ca-validation="required"placeholder="Insert your name"&gt; Your Name
&lt;/form&gt;
&lt;p>
   &lt;a class="ca-btn" href="ajax/data/get.php" ca-ajax="true" ca-ajax-data="#data-get" ca-ajax-type="GET" ca-ajax-target="#get-target">Submit&lt;/a&gt;
   &lt;a class="ca-btn" onclick="ca_reset_form()" href="../data/empty.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#GET-target"&gt;reset&lt;/a&gt;
&lt;/p&gt;
    </pre> 


    <!--include POST documentation-->
    <h4 class="main-header" id="POST">
        POST  
    </h4> 
    <p>
        POST method is allow you to post a variable request form to server as ajax and return html page in element target who has defined in <code>ca-ajax-target="target-name"</code>
    </p>
    <h4 class="main-header">Syntax</h4>
    <code>ca-ajax-type="POST"</code>
    <h4 class="main-header">Example</h4>
    

    <pre class="prettyprint">
&lt;form id="data-post"&gt;
   &lt;input type="text" name="yourname" ca-tip-icon="icon-warning-sign" placeholder="Insert your name" ca-validation="required"&gt; Your Name
&lt;/form&gt;
&lt;p&gt;
   &lt;a class="ca-btn ca-tip-bottom"  ca-original-title="HotKeys(ALT+S)" accesskey="S" href="ajax/data/post.php" ca-ajax="true" ca-ajax-data="#data-post" ca-ajax-type="POST" ca-ajax-target="#post-target">Submit&lt;/a&gt;
   &lt;a class="ca-btn ca-tip-top"  ca-original-title="HotKeys(ALT+X)" accesskey="X" onclick="ca_reset_form()" href="../data/empty.php" ca-ajax="true" ca-ajax-type="PUT" ca-ajax-target="#post-target"&gt;reset&lt;/a&gt;
&lt;/p&gt;
    </pre> 
</div>
<div id="ca_ajax_url">
    <h3 class="main-header">
        ca-ajax-url
    </h3> 
    <p>
        <b>ca-ajax-url</b> is the url address for ajax request. This is optional, you can use ca-ajax-url as href in &lt;a&gt; HTML element
    </p>
    <h5 class="main-header">Syntax</h5>
    <code>ca-ajax-url="your_url"</code>
    <h5 class="main-header">Example</h5>
    

    <pre class="prettyprint">
&lt;a href="ajax/data/put.php" ca-ajax="true" ca-ajax-target="#url-target"&gt;href&lt;/a&gt;
&lt;a ca-ajax-url="ajax/data/put.php" ca-ajax="true" ca-ajax-target="#url-target"&gt;ca-ajax-url&lt;/a&gt;
    </pre> 

</div>
</div>

