<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    /* special ajax here */
    ?>
<h3 class="main-header">
    Dropdown
</h3>
<p>
    Add dropdown menus to nearly anything with this simple plugin, including the navbar, tabs, and pills.
</p>
<h4 class="main-header">Example</h4>

<ul class="ca-menu">
        <li>
            <a ca-dropdown="true" ca-dropdown-relative="left" ca-dropdown-init="1" ca-dropdown-target="menu1">Home<span class="icon-caret-down"></span></a>
            <ul class="ca-dropdown-target menu1">
                <li>
                    <a href="javascript:void(0)">Action</a>
                </li>
                <li>
                    <a href="javascript:void(0)">Another Action</a>
                </li>
                <li>
                    <a href="javascript:void(0)">Something els here</a>
                </li>
                <li class="ca-sparated-link">
                    <a href="javascript:void(0)">Separated link</a>
                </li>
            </ul>
        </li>
        <li>
            <a ca-dropdown="true" ca-dropdown-relative="left" ca-dropdown-init="1" ca-dropdown-target="menu2">Page<span class="icon-caret-down"></span></a>
            <ul class="ca-dropdown-target menu2">
                <li>
                    <a href="javascript:void(0)">Action</a>
                </li>
                <li>
                    <a href="javascript:void(0)">Another Action</a>
                </li>
                <li>
                    <a href="javascript:void(0)">Something els here</a>
                </li>
                <li class="ca-sparated-link">
                    <a href="javascript:void(0)">Separated link</a>
                </li>
            </ul>
        </li>
    </ul>  
Dropdown in list menu 
<button ca-dropdown="true" ca-dropdown-relative="left" ca-dropdown-target="dropdown-target">Left</button> dropdown relative in left |
    <ul class="ca-dropdown-target dropdown-target">
        <li>
            <a href="javascript:void(0)">Action</a>
        </li>
        <li>
            <a href="javascript:void(0)">Another Action</a>
        </li>
        <li>
            <a href="javascript:void(0)">Something els here</a>
        </li>
        <li class="ca-sparated-link">
            <a href="javascript:void(0)">Separated link</a>
        </li>
    </ul> 
<button ca-dropdown="true" ca-dropdown-relative="right" ca-dropdown-target="dropdown-target1">Right</button> dropdown relative in right  
    <ul class="ca-dropdown-target dropdown-target1">
        <li>
            <a href="javascript:void(0)">Action</a>
        </li>
        <li>
            <a href="javascript:void(0)">Another Action</a>
        </li>
        <li>
            <a href="javascript:void(0)">Something els here</a>
        </li>
        <li class="ca-sparated-link">
            <a href="javascript:void(0)">Separated link</a>
        </li>
    </ul>  
<h4 class="main-header">Script</h4>
 <div class="ca-tab" ca-tab-parent=".my-tab1" ca-tab-animation="flash">
        <a class="active" ca-tab-target="#dd1">Menu</a>
        <a class="" ca-tab-target="#dd2">Relative Left</a>
        <a class="" ca-tab-target="#dd3">Relative Right</a> 
    </div>
    <div class="ca-tab-target my-tab1">
        <div class="ca-child-tab" id="dd1">
<pre class="prettyprint">
&lt;ul class="ca-menu">
    &lt;li>
        &lt;a ca-dropdown="true" ca-dropdown-relative="left" ca-dropdown-init="1" ca-dropdown-target="menu1">Home&lt;span class="icon-caret-down">&lt;/span>&lt;/a>
        &lt;ul class="ca-dropdown-target menu1">
            &lt;li>
                &lt;a href="javascript:void(0)">Action&lt;/a>
            &lt;/li>
            &lt;li>
                &lt;a href="javascript:void(0)">Another Action&lt;/a>
            &lt;/li>
            &lt;li>
                &lt;a href="javascript:void(0)">Something els here&lt;/a>
            &lt;/li>
            &lt;li class="ca-sparated-link">
                &lt;a href="javascript:void(0)">Separated link&lt;/a>
            &lt;/li>
        &lt;/ul>
    &lt;/li>
    &lt;li>
        &lt;a ca-dropdown="true" ca-dropdown-relative="left" ca-dropdown-init="1" ca-dropdown-target="menu2">Page&lt;span class="icon-caret-down">&lt;/span>&lt;/a>
        &lt;ul class="ca-dropdown-target menu2">
            &lt;li>
                &lt;a href="javascript:void(0)">Action&lt;/a>
            &lt;/li>
            &lt;li>
                &lt;a href="javascript:void(0)">Another Action&lt;/a>
            &lt;/li>
            &lt;li>
                &lt;a href="javascript:void(0)">Something els here&lt;/a>
            &lt;/li>
            &lt;li class="ca-sparated-link">
                &lt;a href="javascript:void(0)">Separated link&lt;/a>
            &lt;/li>
        &lt;/ul>
    &lt;/li>
&lt;/ul> 
</pre> 
        </div>
        <div class="ca-child-tab" id="dd2">
<pre class="prettyprint">
&lt;button ca-dropdown="true" ca-dropdown-relative="left" ca-dropdown-target="dropdown-target">Left&lt;/button> dropdown relative in left |
&lt;ul class="ca-dropdown-target dropdown-target">
  &lt;li>
    &lt;a href="javascript:void(0)">Action&lt;/a>
  &lt;/li>
  &lt;li>
    &lt;a href="javascript:void(0)">Another Action&lt;/a>
  &lt;/li>
  &lt;li>
    &lt;a href="javascript:void(0)">Something els here&lt;/a>
  &lt;/li>
  &lt;li class="ca-sparated-link">
    &lt;a href="javascript:void(0)">Separated link&lt;/a>
  &lt;/li>
&lt;/ul>
</pre>           
        </div>
        <div class="ca-child-tab" id="dd3">
<pre class="prettyprint">
&lt;button ca-dropdown="true" ca-dropdown-relative="right" ca-dropdown-target="dropdown-target1">Right&lt;/button> dropdown relative in right     
&lt;ul class="ca-dropdown-target dropdown-target1">
    &lt;li>
        &lt;a href="javascript:void(0)">Action&lt;/a>
    &lt;/li>
    &lt;li>
        &lt;a href="javascript:void(0)">Another Action&lt;/a>
    &lt;/li>
    &lt;li>
        &lt;a href="javascript:void(0)">Something els here&lt;/a>
    &lt;/li>
    &lt;li class="ca-sparated-link">
        &lt;a href="javascript:void(0)">Separated link&lt;/a>
    &lt;/li>
&lt;/ul>  
</pre>
        </div> 
    </div> 
<?php
} else {
    header('Location: /docs/javascript/404.php');
}
?>