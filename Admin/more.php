<?php
include("Header.php");
include("pro_con.php");
?>
<html>
	<head>
		<script src="jquery.min.js"></script>
			<script>	
				$(document).ready(function()
				{
				$("#delrec").click(function(){
				var sid=$("#a").val();
				$.ajax({
					url:"more_del.php",
					type:"post",
					data:{i:sid},
				    success:function(data)
					{
						alert(data);
					},
			        error:function(data)
					{
						alert(data);
					}
				})
				})			
				$("#uploadform").on('submit',(function(e){
				//var fileup = $("#fileToUpload").val();
				e.preventDefault();
					$.ajax({
					url:"more_insert.php",
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
				
		});		
		</script>
		</head>	
<body>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
	  <br><br>
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!--<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<center>
          <div class="col-lg-19">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><font color="purple"><b>More</b></font></h1>
              </div>
			  
              <form class="user" method="POST" id="uploadform"  enctype="multipart/form-data">
			  
				<div class="form-group">
				<input type="text" class="form-control form-control-user" id="a" name="a" placeholder="id">
				</div>
				
				<div class="form-group">
				<input type="text" class="form-control form-control-user" id="a1" name="a1" placeholder="Title">
				</div>
				
				<div class="form-group row">
                    <textarea  class="form-control form-control-user" id="a2" name="a2"  placeholder="Information"></textarea>
                </div>

				<div class="form-group">
				<input type="text" class="form-control form-control-user" id="a3" name="a3" placeholder="Status"><br>
				</div>
				
			<input type="file" value="Choose file" name="fileToUpload"><br><br>
			<div id="temp">
			</div>
			
			<br>
	<input type="submit" value="Insert" id="inrec" class="btn btn-primary btn-user btn-block">
	<br><br>
	<input type="button" value="Delete" id="delrec" class="btn btn-primary btn-user btn-block">
	<br><br>
	<a href="more_disp.php"><input type="button" id="disprec" value="Display" class="btn btn-primary btn-user btn-block"></a>
              </form>	  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
