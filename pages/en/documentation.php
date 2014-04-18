<div id="content_w" class="d content">

	<h1>documentation</h1>

	<div id="doc_link_wrap">
      <h2>user manual</h2>
        <a id="intro" href="#">introduction</a>
	    <a id="widgets" href="#">Dashboard & Widgets</a>
	    <a id="dash" href="#">Other dashboard tabs</a>
	    
	    <!--a id="machines" href="#">Machines</a>
	    <a id="projects" href="#">Projects</a>
	    <a id="deploy" href="#">Deployments</a>
	    
	    <a id="machdash" href="#">Machine dashboard</a-->
	    
        <a id="console" href="#">Console</a>
        <a id="faq" href="#" title="frequently asked questions">FAQ</a>

      <h2>admin guide</h2>
	    <a id="install" href="#">Installation</a>
	    <a id="vop_deployment" href="#">Deployment</a>

      <h2 id="development">development</h2>
        <a id="plugins" href="#">Plugins</a>
        <!--a id="plugins" href="#">Commands</a>
        <a id="plugins" href="#">Services</a>
        <a id="caching" href="#">Caching</a>
	    <a id="themes" href="#">Themes</a>
	    <a id="plugins" href="#">Source Code &amp; Build</a-->
	</div>

   <div class="doc_wrapper">
	
   </div>

</div>

<script type="text/javascript">

$(function(){


	$(".d a").click(function(){
		console.log($(this).attr("id"));
		loadContent(".doc_wrapper", "/doc/" + $(this).attr("id") + ".html" );
		return false;
    });

	loadContent(".doc_wrapper", "/doc/default.html");
	console.log("foo!");
	
});

</script>


