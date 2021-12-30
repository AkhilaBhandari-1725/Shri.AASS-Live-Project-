<?php
include("pro_con.php");
include("Header.php");
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="jquery.min.js"></script>
	<script>	
		$(document).ready(function(){
			
			var flag="";
            
			$.ajax({
				url:"contact_disp.php",
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
                    <h1 class="h4 text-gray-900 mb-4"><br><b><font color="purple" >Contact</font></b></h1>
                  </div>
				  
				  <table id="tb1" border=3>
				  </table>
				  
                  <form class="user" method="POST" id="uploadform"  enctype="multipart/form-data">
					</center>
					<br><br>				 
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
