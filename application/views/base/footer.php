
<div class="blog-footer">
<p>&copy; 2013 bakukata</p>
<p id="back-top" style="position: fixed; bottom: 10px; right: 50px;"><a href="#top"><span class="right glyphicon glyphicon-chevron-up" data-toggle="tooltip" data-placement="top" title="Ke Atas"></span></a></p>
</div>        

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="<?php echo base_url('resource/ajax.googleapis_jquery-1.11.0/jquery.min.js'); ?>"></script>-->

<script src="<?php echo base_url('resource/bootstrap-3.1.1/js/bootstrap.min.js'); ?>"></script>

<script>
	$(document).ready(function(){
                // hide #back-top first
                $("#back-top").hide();
                // fade in #back-top
                $(function () {
                	$(window).scroll(function () {
                		if ($(this).scrollTop() > 100) {
                			$('#back-top').fadeIn();
                		} else {
                			$('#back-top').fadeOut();
                		}
                	});
                    // scroll body to 0px on click
                    $('#back-top a').click(function () {
                    	$('body,html').animate({
                    		scrollTop: 0
                    	}, 800);
                    	return false;
                    });
                });
            });
</script>

<!--Placed at the end-->
<script type="text/javascript">
	$(function () { $("[data-toggle='tooltip']").tooltip(); });
	document.querySelector('#fileSelect').addEventListener('click', function(e) {
        // Use the native click() of the file input.
        document.querySelector('#fileElem').click();
    }, false);
</script>

</body>
</html>
