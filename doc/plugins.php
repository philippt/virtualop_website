<h2>Plugins</h2>

<p>Most of the virtualop is implemented in plugins. Each plugin is a directory containing a file called <tt>&lt;name&gt;.plugin</tt> which holds metadata (dependencies, configuration). 
Also, a plugin may contain any of the following subdirectories:</p>
<ul>
<li>commands</li>
<li>helpers</li>
<li>templates</li>
<li>services</li>
<li>stacks</li>
</ul>

<h3>Metadata</h3>

<p>The plugin file holds additional information describing the plugin, e.g. dependencies, configuration etc.<br/>
The following directives are available:</p>

<ul>
	<li><tt>dependency :other_plugin</tt></li>
	<li><tt>dependencies [ :other_plugin ]</tt></li>
	<li>&nbsp;</li>
	<li><tt>config_param "name", "description", &lt;options&gt;</tt>
	<li><tt>config_param! "name", "description", &lt;options&gt;</tt></li>
	<li>&nbsp;</li>
	<li><tt>tags :first_tag, :second_tag</tt></li>
	<li>&nbsp;</li>
</ul>

<h3>Plugin Lifecycle</h3>

<p>When the virtualop ist started, the following lifecycle methods are called for each plugin:</p>

<h4>on_init</h4>

<h4>on_activation</h4>

<h4>on_preflight</h4>

<h3>Commands</h3>

<p>A virtualop command is a file containing ruby code that is executed through the virtualop - something like this:</p>
<span id="example_header"><pre>
description "this command does not really do anything"

param! "volume", "turn it up"
</pre></span>
<span id="example_code"><pre>
execute do |params|
  puts "volume is now #{params["volume"]}"
end
</pre></span>

<p>Commands consist of an optional <a id="header_section" href="example_header">header section</a> and a <a id="block_of_code" href="example_code">block of code</a>.</p>

<p>Commands can accept input parameters:</p>
<pre>
 param "name", "description", &lt;options&gt;
</pre>
<p><tt>param!</tt> is a shortcut for <tt>:mandatory => true</tt>, so you can write</p>
<pre>
  param! 'foo', 'we really need this value'
</pre>
<p>instead of</p>
<pre>
  param 'foo', 'longer version', :mandatory => true	
</pre>

<p>Other options:</p>
<ul>
  <li><pre>:default_value => &lt;the_value&gt;</pre></li>
  <li><pre>:default_param => (true|false)</pre></li>
  <li><pre>:allows_multiple_values => (true|false)</pre></li>
  <li><pre>:lookup_method => lambda { &lt;your code goes here&gt; }</pre></li>  
  <li><pre>display_type (:list|:table|:hash|:hidden|:raw</pre></li>
  <li><pre>add_columns [ :first, :second ]</pre></li>
  <li><pre>mark_as_read_only</pre></li>
  <li><pre>result_as</pre></li>
  <li><pre>params_as</pre></li>
</ul>

<script type="text_javascript">
$(function() {
	/*
	$('#header_section, #block_of_code').hover(function() {
		var thing = $(this).attr('href');
		console.log("hovering. thing : " + thing);
		$('#' + thing).effect("pulsate", { times: 1 }, 500);
	})
	*/
	
	$('#header_section').hover(function() {
		$('#example_header pre').effect("pulsate", { times: 1 }, 500);
	});
	/*
	$('#block_of_code').hover(function() {
		$('#example_code pre').effect("pulsate", { times: 1 }, 500);
	})
	*/
});	
</script>