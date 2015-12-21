<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>

	$(function(){
		$('#sw_search').on('keyup', function(){
			_html = "";
			$.get('<?php echo base_url("test/coment"); ?>',{ arg : $(this).val() }, function(resp){
				for (var i = 0; i < resp.length; i++) {
					_html += '<li>' + resp[i].content + '</li>'
				}
				$('.uels').html(_html);
				console.log(_html);
			},'json');
		});
	});
</script>
<body>
<input type="text" id="sw_search" placeholder="search" name="keyword">
<ul class="uels">
	
</ul>

</body>
</html>