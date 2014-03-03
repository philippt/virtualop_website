</div>

<div id="footer">

	    <div id="foo_wrap">
	    <span id="copyright">&copy; xop 2014</span>	
	    </div>

	    <div id="numbers_foo">
 	    </div>
	
</div>

</body>
</html>

 <!-- tabs and content loading -->
 
 <script type="text/javascript">
    function loadContent(selector, url) {
	  $.get(url, function(data) {
	    $(selector).html(data);
	  });
    }

 $(function() {  
     $('#navi .button').click(function() {
	the_id = $(this).attr('id');
        url = $(this).find('a').attr('href');
        loadContent('#contentWrapper', url);
        return false;
 });




<!-- *** -->


        populateNumbers();
        populateNumbers('numbers_foo',3);
	changeNumbers();

        //$('#navi li').first().click();
    });

<!-- navi - hover -->

$(".b1").hover(function(){
$(this).slideDown("1500",function(){
$(".butcontent1").fadeIn("500")})},
function(){
$(".butcontent1").hide("500");
});


$(".b2").hover(function(){
$(this).slideDown("1500",function(){
$(".butcontent2").fadeIn("500")})},
function(){
$(".butcontent2").hide("500");
});



</script>

