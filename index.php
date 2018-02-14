<?php
    session_start();
	?>

<html>
<head>
   <title> INDEX PAGE SUDHARSAN ENGINEERING COLLEGE </title>
<center> <h1 style="color:aqua"> SUDHARSAN ENGINEERING COLLEGE </h1> </center>
<center> <h2 style="color:aqua"> ELECTRONICS AND COMMUNICATION DEPARTMENT 2014-2018 BATCH </h2> 
    </center>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
   <body>

   <div  class="login-box">
        <center>
         <br><img src="logo21.png" class="logo21"/><br>
            <br>
            <h3 style="color:aqua"><b>LOGIN FORM</b></h3><br>
        </center>

                <form class="my form" action="index.php" method="post">
		     <label><b>Username:</b></label><br>
			 <input name ="t1" type="text"  class="inputvalues" placeholder="Type your username"required/><br>
			 <br>
			 <label><b>Password:</b></label><br>
			 <input name="t2" type="password"  class="inputvalues" placeholder="Enter password" required/><br>
			 <br>
			 <input name="submit1" type="submit" id="login_btn" value="Login"/><br>
			 <br>
			 <a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
		</form>
       <?php
			if(isset($_POST["submit1"]))
			{
				$pwd=md5 ($_POST["t2"]);
				$link=mysqli_connect("localhost","root","");
				mysqli_select_db($link,"loginregister");
				$count=0;
				$res=mysqli_query($link,"select * from registration where username='$_POST[t1]' && password='$pwd'");
				$count=mysqli_num_rows($res);
				if($count>0)
				{
					
				?>
				<script type="text/javascript">
				window.location="download.php";
				</script>
				<?php
				}
				else
				{
				?>
				<script type="text/javascript">
				alert("incorrect username or password");
				</script>
				<?php	
					
				}
				
			}
			?>
   
     
     </div>
   </body>
</html>