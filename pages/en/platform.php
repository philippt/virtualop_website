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