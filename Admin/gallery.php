<?php
	include("Header.php");
?>
<html>
	<head>
		<script src="jquery.min.js"></script>
			<script>	
				$(document).ready(function()
			{
				$("#uploadform").on('submit',(function(e){
				//var fileup = $("#fileToUpload").val();
				e.preventDefault();
					$.ajax({
					url:"gallery_disp.php",
					type:"post",
					data:new FormData(this),
					contentType: false,
					cache: false,
					processData:false,
					success:function(data){
						alert(data);
									},
					error:function(data){
						alert(data);
									}
						})
			    }))
				/*
			$.ajax({
			url:"gal_display.php",
			type:"post",
			data:{},
			success:function(data)
			{
				$("#gal").html(data);
			},
			error:function(data)
			{
				
			}
		})
				*/
			});			
		</script>
		</head>	
<body>
<form method="POST" id="uploadform"  enctype="multipart/form-data">
<center>
&nbsp;
<br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Select image to upload:
&nbsp;&nbsp;&nbsp;
  <input type="file" name="fileToUpload"><br><br>
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" id="btn" value="Submit" name="submit"><br><br><br>

  <div id="gal">
  </div>
  
</center>
</form>
</body>
</html>
