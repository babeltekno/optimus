<h3 class="main-header">
     Validation
</h3> 
<p> 
    </b> is the attribute is allowed the browser check the input element has defined the attribute <code>ca-validation="required"</code>, see how it's work
</p>
<h4 class="main-header">Attribute</h4>
<table class="ca-table ca-table-border" cellspacing="0" cellpadding="0">
        <tr>
            <th>Name</th> 
            <th>Description</th>
        </tr>
        <tr class="zebra">
            <td>email</td> 
            <td>Required information which contained email address</td>
        </tr>
        <tr>
            <td>required</td> 
            <td>The field must be fill , can not empty</td>
        </tr>
        <tr class="zebra">
            <td>url</td> 
            <td>Required information which contained url address</td>
        </tr>
        <tr>
            <td>character</td> 
            <td>Required information which contained characters</td>
        </tr> 
    </table>
<h4 class="main-header">Syntax</h4>
<code>ca-validation="required"</code>
<h4 class="main-header">Example</h4>
<div class="demo-btn"> 
    <form name="ca-form-user">
        <p>
            <input type="text" name="yourname" ca-validation="required" placeholder="Input your name"> Your Name 
        </p>
        <p>
            <input type="text" name="youremail" ca-validation="required|email" placeholder="Input your email"> Your Email 
        </p>
    </form>
    <button href="ajax/data/data.php" ca-ajax="true" ca-ajax-type="POST" ca-ajax-redirect="ajax/data/redirect.php" ca-ajax-data="form[name='ca-form-user']" ca-ajax-target="#ca_right">Validate</button>
</div> 
<pre class="prettyprint">
&lt;form name="ca-form-user"&gt;
  &lt;p&gt;
     &lt;input type="text" name="yourname" ca-validation="required" placeholder="Input your name"&gt; Your Name
  &lt;/p&gt;
  &lt;p&gt;
     &lt;input type="text" name="youremail" ca-validation="required|email" placeholder="Input your email"&gt; Your Email
  &lt;/p&gt;
&lt;/form&gt;
&lt;button ca-ajax-url="ajax/data/data.php" ca-ajax="true" ca-ajax-type="POST" ca-ajax-redirect="ajax/data/redirect.php" ca-ajax-data="form[name='ca-form-user']" ca-ajax-target="#ca_right"&gt;Validate&lt;/button&gt;
</pre> 


