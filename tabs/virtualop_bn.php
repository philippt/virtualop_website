<script type="text/javascript">

$(document).ready(function(){
	//$("#fade").fadeIn(1000);
	
	var verboses = $('.verbose');

	var idx = 0;
	
	if ($('body').data('timeout')) {
		clearTimeout($('body').data('timeout'));
	}
	
	function nextPlease() {
	  if (idx == verboses.length) {
        idx = 0;
      }
      console.log("starting to fadeIn idx #", idx);
	  $('#' + verboses[idx].id).fadeIn(1000).delay(5000).fadeOut(1000);
	  idx++;
	  $('body').data('timeout', setTimeout(nextPlease, 10000));
	}

    verboses.hide();
	nextPlease();

	$(".fbox[rel=example_group]").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
	});


	$("#single_1").fancybox({
          helpers: {
              title : {
                  type : 'float'
                 }
              }
          });

});

</script>

<div id="content_w">


	<div class="column c1">
		

	   <div id="verbose1" class="verbose">
	     
	      <div class="verb_wrap">
		<a class="fbox" href="" title="Installation of new 			Virtual Machines">installation of new Virtual Machines </a>
		</div>
	   </div>

	   <div id="verbose2" class="verbose">
		
		<div class="verb_wrap">
		<a class="fbox" href="">deployment from github, subversion 		or dropbox.com </a>
		</div>
	  </div>
			

	   <div id="verbose3" class="verbose">
		
		<div class="verb_wrap">
		<a class="fbox" href="">Monitoring</a>
		</div>
	   </div>
	

	   <div id="verbose4" class="verbose">
		
		<div class="verb_wrap">
		<a class="fbox" href="">backup & restore, test data generation</a>
		</div>
	   </div>


	   <div id="verbose5" class="verbose">
		
		<div class="verb_wrap">
		<a class="fbox" href="">database setup and replication (on MySQL)</a>
		</div>
	   </div>


	   <div id="verbose6" class="verbose">
		
		<div class="verb_wrap">
		<a class="fbox" href="">Logfile Collection & Analysis</a>
		</div>
	   </div>


	   <div id="verbose7" class="verbose">
		
		<div class="verb_wrap">
		<a class="fbox" href="">Continuous Integration & Deployment</a>
		</div>
	   </div>



	   <div id="verbose8" class="verbose">
		
		<div class="verb_wrap">
		<a class="fbox" href="">Automated Testing</a>
		</div>
	   </div>
	
</div>
	

	<div class="column c2">

	   <div id="maintext">
	        <h1>
		Welcome to virtualop.org, the web presence of the Ruby framework<br /> The Virtual Operator.</h1>

		<div class="text">
		The Virtual Op provides automated infrastructure <br /> for 		the development and operations <br /> of (web-) 			applications 
		<p>by automating</p>
		<br /> the steps of the 			software cycle <br /> and integrating processes and services in<br />
		 <h4>one comfortable working environment.</h4>
		</div>
	   </div>

	</div>


<script type="text/javascript">

		$(".fbox[rel=whatsdis]").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
		});

</script>


<ul class="bottom">
	<li>
		<div class="sec2">
			<a rel="whatsdis" id="various2" class="fbox wt" href="#wt1" title="What's this ?">What's this exactly?</a>

			<div style="display: none;">
			   <div id="wt1">
			   <br /><br />
			   The Virtual Operator is an Open Source framework  			   based on Ruby on Rails.<br /><br /> 
			   It automates and visualizes the 				   	   infrastructure of web applications.
		           <br /><br /> 
			   Why is this an advantage ?
			   </div>
	 		</div>


			<a rel="whatsdis" id="various2" class="fbox wt" href="#wt2" style="display: none" title="The Software Cycle"></a>

			<div style="display: none;">
			   <div id="wt2">
			From the mere idea to a running web application, 			you got a number of steps.
			<br />
			You need to convert the idea into code.<br /><br />
			You need to build this code. And test it.<br /><br />
			You need to deploy it onto different 
			staging- and production environments, 
			implemented on physical and virtual 					machines.
			<br /><br />
		
		          </div>
			</div>


<a rel="whatsdis" id="various2" class="fbox wt" href="#wt3" style="display: none" title="The Software Cycle"></a>

	<div style="display: none;">
	<div id="wt3">

	Once deployed, the application needs to be monitored constantly.
	<br /><br /> 	
	Supposingly you want to optimize the performance. <br />
	So you need to analyse the log data of the deployment for further 	releases.
	<br /><br />
	The data needs to be backed up regularly.
	Restore mechanisms need to be implemented and tested.
	<br /><br />
	
	</div>
	</div>


	<a rel="whatsdis" id="various2" class="fbox wt" href="#wt4" 		style="display: none" title="The Software Cycle"></a>

	<div style="display: none;">
	<div id="wt4">

	Increasing load and traffic will challenge your app's scalability 	and availability. 
	<br /><br />
	The development process gains velocity and the modifications made 	by more and more people working in different programming languages, 	disciplines and departments must be continuously integrated.
	</div>
	</div>


	<a rel="whatsdis" id="various2" class="fbox wt" href="#wt5" 		style="display: none" title="The Virtual Op"></a>

	<div style="display: none;">
	<div id="wt5">

	Facing this high level of complexity, automation is clearly an 		advantage. 
	<br /><br />
	With this approach, the virtual op framework allows you to:
	<br /><br />
	* Browse source code from your github repositories or your dropbox 	folder.<br /><br />
	* Set up new virtual machines easily and deploy your projects onto 	them.

	</div>
	</div>

	<a rel="whatsdis" id="various2" class="fbox wt" href="#wt6" 		style="display: none" title="The Virtual Op"></a>

	<div style="display: none;">
	<div id="wt6">

	* Take advantage of our staging- and production machine 		environments.
	<br /><br />
	* Be up-to-date regarding the performance of your application with 	the virtualop monitoring.
	<br /><br />
	* Backup & Restore your machines with one click.

	</div>
	</div>

	<a rel="whatsdis" id="various2" class="fbox wt" href="#wt7" 		style="display: none" title="The Virtual Op"></a>

	<div style="display: none;">
	<div id="wt7">

	* Improve your releases with the virtual op's logdata storage and 	analysis.<br /><br />	
	* Cooperate with fellow developers in realtime, and follow the 		progress of different projects with the newsfeed widget.

	</div>
	</div>


	<a rel="whatsdis" id="various2" class="fbox wt" href="#wt8" 		style="display: none" title="Two ways to use the Virtual Op"></a>

	<div style="display: none;">
	<div id="wt8">

	The virtual op is at your disposal  :
	<br /><br /> > Deployed, that is : Open Source <br /><br />
	> on the Virtualop Platform, where we offer
	you different packages of virtual machines and virtual op features.
	
	</div>
	</div>


	<a rel="whatsdis" id="various2" class="fbox wt" href="#wt9" 		style="display: none" title="The Framework"></a>

	<div style="display: none;">
	<div id="wt9">

	<h1> Deployed </h1>
	You got the framework running on your own system and u
 
	<br /><br /
	You should know a bit about Ruby and Ruby on Rails 
	and the framework needs to operate on machines and servers of a provider of your choice. 
	<br />
	Of course we provide support for the framework on local systems.  

	</div>
	</div>

	<a rel="whatsdis" id="various2" class="fbox wt" href="#wt10" 		style="display: none" title="The Virtual Op Platform"></a>

	<div style="display: none;">
	<div id="wt10">

	<h1>The Virtual Op platform</h1>

	Build your web application "on click".
	<br /><br />
	
	The virtual op dashboard allows you to manage your virtual 		machines, projects and services.<br />Be informed about running 	requests, critical machines and more.<br />Deploy 		releases onto your machines with drag and drop.<br /><br />
	The platform provides you a highly customizable working 		environment.

	
	</div>
	</div>

	<a rel="whatsdis" id="various2" class="fbox wt" href="#wt11" 		style="display: none" title="anything else..."></a>

	<div style="display: none;">
	<div id="wt11">

	More information about advantages and detailles of each of both 	ways you can find in the section "platform".
	<br /><br />
	If you have any questions, please get in touch with us.	

	</div>
	</div>

		</div>
	</li>


	<li>
		<div class="sec2">
			 <a href="http://vop.<?php echo $_SERVER['HTTP_HOST']; ?>">VirtualOp Login</a>
			</div>
	</li>


<script type="text/javascript">

		$(".fbox[rel=tour]").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
});

</script>


	<li>
		<div class="sec2">
	<a rel="tour" id="various3" class="fbox" href="#t1" title="Screenshots">Screenshots</a>
			
	<div style="display: none;">
	<div id="t1">

	Sorry, this section is still under construction !


	</div>
	</div>


	</div>
	</li>


	<script type="text/javascript">

	$(".fbox[rel=single_1]").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'elastic',
			'transitionOut'		: 'elastic'
		});

	</script>


	<li>
		<div class="sec2">
			<a id="single_1" href="#contact">Get in touch</a>

			<div style="display: none;">
			<div id="contact">

	<?php echo $css; ?>

		<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>
		<script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>

		<script type="text/javascript" src="js/script.js"></script> 

		<?php

		session_name("fancyform");
		session_start();


		$_SESSION['n1'] = rand(1,20);
		$_SESSION['n2'] = rand(1,20);
		$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


		$str='';
		if($_SESSION['errStr'])
		{
		$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
		}

		$success='';
		if($_SESSION['sent'])
		{
			$success='<h1>Thank you!</h1>';
	
			$css='<style type="text/css">#contact-form{display:none;}</style>';
	
		unset($_SESSION['sent']);
		}
		?>



	<div id="main-container">
	

		<div id="form-container">
    			<h1>Contact</h1>
    			<h2>Please send us a mail.</h2>
   
    			<form id="contact-form" name="contact-form" method="post" action="submit.php">
      			<table width="100%" border="0" cellspacing="0" cellpadding="5">
        		<tr>
          		<td width="15%"><label for="name">Name</label></td>
          		<td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?php echo $_SESSION['post']['name']; ?>" /></td>
          		<td width="15%" id="errOffset">&nbsp;</td>
        		</tr>
        		<tr>
          		<td><label for="email">Email</label></td>
          		<td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?php echo $_SESSION['post']['email']; ?>" /></td>
          		<td>&nbsp;</td>
        		</tr>
			<input type="hidden" name="subject" value="message" id="subject"/>	
               		<tr>
          		<td valign="top"><label for="message">Message</label></td>
          		<td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?php echo $_SESSION['post']['message']; ?></textarea></td>
          		<td valign="top">&nbsp;</td>
        		</tr>

<!--
        		<tr>
          		<td><label for="captcha"><?php echo $_SESSION['n1']; ?> + 		<?php echo $_SESSION['n2']; ?> =</label></td>
          		<td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
          		<td valign="top">&nbsp;</td>
        	</tr> -->
        	<tr>
          	<td valign="top">&nbsp;</td>
          	<td colspan="2"><input type="submit" name="button" id="button" value="Submit" />
          	<input type="reset" name="button2" id="button2" value="Reset" />
          
          	<?php echo $str; ?>          <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
        	</tr> 
      		</table>
      		</form>
      		<?php echo $success; ?>
    		</div>

	</div>
	

</div>
</div>
</div>
</li>

</ul>


</div>


</div>

<img src="../pix/cuadri1.png" id=""></img>
