</div>

<div id="footer">

	    <div id="foo_wrap">
	    <span id="copyright">&copy; xop 2014</span>	
	    </div>

	    <div id="numbers_foo">
 	    </div>
	
</div>

<script type="text/javascript">

function loadContent(selector, url) {
  $.get(url, function(data) {
    $(selector).html(data);
  });
};

$(function() {  

    populateNumbers();
    populateNumbers('numbers_foo',3);
	changeNumbers();

	$(".b1").hover(
		function(){
			$(this).slideDown("1500",function(){
				$(".butcontent1").fadeIn("500")
			}
		)},
		function(){
			$(".butcontent1").hide("500");
		}
	);
	
	$(".b2").hover(
		function(){
			$(this).slideDown("1500",function(){
				$(".butcontent2").fadeIn("500")
			}
		)},
		function(){
			$(".butcontent2").hide("500");
		}
	);
});

</script>

</body>
</html>