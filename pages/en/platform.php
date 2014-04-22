<div id="content_p" class="p content">

    <div id="platform_header">

      <p1 title="...and peace, love and happiness for everybody, of course">setup. deployment. operations.</p1>

    </div>

    <div class="linkbox">
      <div class="linkwrap">
        <img src="/pix/dblarr_small.png" class="voppfeil" /><a href="#" id="basic" class="voplinks">basic</a>
      </div>
      <div class="linkwrap">
        <img src="/pix/dblarr_small.png" class="voppfeil" /><a href="#" id="pro" class="voplinks">professional</a>
      </div>
      <div class="linkwrap">
        <img src="/pix/dblarr_small.png" class="voppfeil" /><a href="#" id="disodat" class="voplinks">platform vs open source</a>
      </div>
    </div>

    <div id="vop_txt_wrap">
		<h1>The virtualop is a framework for automating the setup, deployment and operations of web applications.</h1>

		<br/>
		<p>It is written using the Ruby programming language, consists of a relatively small core, a command line and a web interface. It acts as a container for a growing number of plugins and services.</p>
		
		<p>The plugins contain logic for setting up the virtualop platform, which is a set of virtual machines deployed across multiple physical 
		hosts (e.g. two for production, one for staging).<br/>
		This platform is self-deploying, i.e. it automatically deploys new versions of itself onto the staging environment, 
		tests them there and updates itself on successful completion of all tests.<br/>
		A similar mechanism can be used to setup machines for development and integrate changes prepared there.</p>
		
		<p>The framework's design makes it easy to integrate a variety of services into the platform, and if any part of the platform 
		does not fit your needs, you can replace it with your own version with one click.</p>
		
		<p>You can use it to:
		<ul>
		  <li><b>setup</b > new virtual machines with CentOS or Ubuntu</li>
		  <li><b>deploy</b> projects from github, through git, subversion or an ownCloud
		      <ul>
		        <li>github: if you connect your github account, the virtualop initializes new repositories and manages SSH keys for you.</li>
		        <li>ownCloud: The minimal platform comes with a built-in owncloud server, and the virtualop prepares development machines with an owncloud client connected to it.</li>
		      </ul>
		  </li>
		  <li><b>install</b> #{services_count} canned services</li>
		  <li><b>configure</b> respectively generate configuration for
		  	<ul>
		  		<li>nagios</li>
		  		<li>iptables</li>
		  		<li>apache</li>
		  	</ul>
		</ul>
		<br/>
		
		<p>Also, we integrated</p>
		<ul>  	
		  <li><b>jenkins</b> for automated builds</li>
		  <li><b>389-ds as LDAP directory service</b></li>
		  <li><b>PowerDNS</b></li>
		</ul>
		</p>
		
		<p>All of this means that you get a self-deploying platform that will allow users to integrate their projects in a way that they are self-deploying as well.</p>
		
		<p>What is missing for public consumption is:
		<ul>
		    <li>documentation</li>
		    <li>security</li>
		</ul>
		</p>
		
		<p>If you are new to the virtualop, you will probably want to take a look at the web interface first - you can reach it <a href="#insert_link_here">here</a>.</p>

    </div>

</div>

<script type="text/javascript">

$(function(){


	$(".voplinks").click(function(){
		console.log($(this).attr("id"));
		loadContent("#vop_txt_wrap", "/doc/" + $(this).attr("id") + ".html" );
		return false;
    });

});

</script>