<div id="content_p" class="p content">

    <div id="platform_header">

      <p1>
      setup. deployment. operations.</p1>
      <!--p1>The virtualop is a framework to help you to get your web app online and keep it running.</p1-->

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


    </div>

</div>

<script type="text/javascript">

$(function(){

	$(document).ready(function(){
	loadContent("#vop_txt_wrap", "/doc/default.html");
	});

	$(".voplinks").click(function(){
	console.log($(this).attr("id"));
	loadContent("#vop_txt_wrap", "/doc/" + $(this).attr("id") + ".html" );
	return false;
    	});

	
});

</script>