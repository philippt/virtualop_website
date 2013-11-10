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
	  $('#' + verboses[idx].id).fadeIn(1000).delay(5000).fadeOut(1000);
	  idx++;
	  $('body').data('timeout', setTimeout(nextPlease, 10000));
	}

    verboses.hide();
	nextPlease();


	$("#single_1").fancybox({
      helpers: {
          title : {
              type : 'float'
             }
          }
      });

	$.getJSON('/address.json', function(data) { 
		$('#vop_link').attr("href", data[0].vop_url);
	});
});

</script>

<div id="content_w" class="content">

    <div id="column-wrapper">
        <div class="column c1">
		

            <div id="verbose1" class="verbose">
	     
	         <div class="verb_wrap">
		     <a class="fbox" href="" title="Installation of new Virtual Machines">installation of new Virtual Machines </a>
	        </div>
	    </div>

	    <div id="verbose2" class="verbose">
		
	        <div class="verb_wrap">
		     <a class="fbox" href="">deployment from github, subversion or dropbox.com </a>
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
	

<script type="text/javascript">

$(function(){
 function loadContent(selector, url) {
	  $.get(url, function(data) {
	    $(selector).html(data);
	  });
    };

 $(function() {  
     $('#platform').click(function() {
	the_id = $(this).attr('id');
        url = $(this).attr('href');
        loadContent('#contentWrapper', url);
        return false;
        });
     });


$(function(){
	$(".fbox[rel=single_1]").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'elastic',
			'transitionOut'		: 'elastic'
		});
	});
	});



	</script>

       <div class="column c2">

           <div id="maintext">

               <h1>Welcome to virtualop.org, the web presence of the Ruby framework The Virtual Operator.</h1>

	       <div class="text">

	            <div class="main_links_wrap">
		        <img src="/pix/dblarr_small.png" class="main_links" />
		        <a href="../tabs/platform.html" class="main_link" id="platform">What is this exactly ?</a>
		    </div>
		    <div class="main_links_wrap">
		        <img src="/pix/dblarr_small.png" class="main_links" />
		        
		        <a href="#" id="vop_link" class="main_link" target="_blank">virtualop login</a>
		    </div>
		    <div class="main_links_wrap">
		        <img src="/pix/dblarr_small.png" class="main_links" />
		        <a href="#" class="main_link">screenshots</a>
		    </div>
		    <div class="main_links_wrap">
		        <img src="/pix/dblarr_small.png" class="main_links" />
		        <a class="main_link fbox" id="single_1" href="#contact">get in touch </a>
		    </div>


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


        		         <tr>
          	   	         <td valign="top">&nbsp;</td>
          		         <td colspan="2"><input type="submit" name="button" id="button" value="Submit" />
          		         <input type="reset" name="button2" id="button2" value="Reset" />
          
          		         <?php echo $str; ?>          
				 <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
        		         </tr> 
      			         </table>
      			         </form>
      			         <?php echo $success; ?>

    			      </div>

		      </div>
	
		  </div>
	      </div>


	  </div>

        </div>


      </div>
    </div>	  



	<ul class="bottom">
	    <li>
	        <div class="sec2">
	        <h2>Setup.</h2>
		 Be flexible with where to create your web environment 		using the virtualop for automatic installation from scratch and automatic configuration of virtual machines.
	        </div>	
	    </li>


	    <li>
	        <div class="sec2">
	        <h2>Deployment.</h2> Get your app online by drag and drop ! 		Deploy releases to your machines continuously browsing source code from your dropbox or github account.
	        </div>
	    </li>



	    <li>
	        <div class="sec2">
	       <h2>Operations.</h2>Ensure that your web app keeps running smoothly with the virtualop plugins, taking care of monitoring, backup and restore, logfile storage and analysis and more.
	        </div>
	    </li>

        </ul>


</div>