<?php
include("pro_con.php");
include("Header.php");
$id=$title=$description=$img="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$s1="select * from about where id='$id'";
	$r1=mysqli_query($mycon,$s1);
	while($res1=mysqli_fetch_array($r1))
	{
		$id=$res1[0];
		$title=$res1[1];
		$img=$res1[2];
		$description=$res1[3];
		//echo $str;
	}
}
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="jquery.min.js"></script>
	<script>	
		$(document).ready(function(){
			
			var flag="";
            
			$.ajax({
				url:"about_display.php",
				type:"post",
				data:{},
				success:function(data)
				{
					$("#tb1").html(data);
				},
				
				error:function(data){
					$("#tb1").html(data);
				}
			
			})
			
				$("#uploadform").on('submit',(function(e){
				//var fileup = $("#fileToUpload").val();
				e.preventDefault();
					$.ajax({
					url:"about_update.php",
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
	<body>

  <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
		  <br><br><br>
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!--div class="col-lg-6 d-none d-lg-block bg-login-image"></div-->
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <div class="col-lg-19">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><br><b><font color="purple" >Activities</font></b></h1>
                  </div>
				  
				  <table id="tb1" border=3>
				  </table>
				  
                  <form class="user" method="POST" id="uploadform"  enctype="multipart/form-data">
				  <center>
				  			  
                    <div class="form-group">
					<br><br>
					<input type="text" class="form-control form-control-user" value="<?php echo "$id";?>" id="aid" name="aid" placeholder="Id"><br>
					</div>
					<div class="form-group">
                      <input type="text"  class="form-control form-control-user" value="<?php echo "$title";?>" id="atitle" name="n1" placeholder="Title">
                    </div><br>
					
					<div class="form-group">
					  <textarea type="text"  class="form-control form-control-user"  id="adesc" name="n2" placeholder="Description"><?php echo "$description";?></textarea>
                    </div><br>
					
					<input type="file" value="Choose file" name="fileToUpload"><br><br>
					<div id="temp">
					<img src="<?php echo $img;?>" height="150" width="200">
					</div>
					
					</center>
					<br><br>
					 <div class="form-group">
                    <input type="submit" id="adpro" class="btn btn-primary btn-user btn-block" name="btn" value="Update">
                     </div>
					 
					 
                </div>
				
              </div>
            </div>
			
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
