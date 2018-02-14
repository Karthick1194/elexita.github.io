
<?php
    session_start();
	?>
<html>
<head>
   <title>REGISTRATION PAGE SUDHARSAN ENGINEERING COLLEGE </title> 
<center> <h1 style="color:aqua"> SUDHARSAN ENGINEERING COLLEGE </h1> </center>
<center> <h2 style="color:aqua"> ELECTRONICS AND COMMUNICATION DEPARTMENT 2014-2018 BATCH </h2> 
    </center>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
   <body>
       
   <div  class="register-box">
        <center>
         <br><img src="logo21.png" class="logo21"/><br>
            <br>
            <h3 style="color:aqua"> Registration Form</h3><br>
        </center>
       <form class="my form" action="register.php" method="post"> 
           <label style="color:white" ><b>First Name:</b></label><br>
		 <br>
		 <input name="t1" type="text" class="inputvalues" placeholder="Enter First Name" required/><br>
		 <br>
           <label style="color:white" ><b>Last Name:</b></label><br>
		 <br>
		 <input name="t2" type="text"  class="inputvalues" placeholder="Enter Last Name"required/><br>
		 <br>
           <label style="color:white" ><b>Username:</b></label><br>
		 <br>
	     <input name="t3" type="text" class="inputvalues" placeholder="Type your username" required/><br>
		 <br>
           <label style="color:white" ><b>Password:</b></label><br>
		 <br>
	     <input name="t4" type="password" class="inputvalues" placeholder="your password"required/><br>
		 <br>
           <label style="color:white" ><b>Email-id:</b></label><br>
		 <br>
	     <input  name="t5" type="text" class="inputvalues" placeholder="Enter E-mail id"required/><br>
		 <br>
           <label style="color:white" ><b> Mobile number:</b></label><br>
		 <br>
	     <input name="t6" type="text" class="inputvalues" placeholder="Enter Mobile Number"required/><br>
		 <br>
		 <td>Gender</td>
                <td><input type="radio" name="r1" value="male" checked>Male<input type="radio" name="r1" value="female">female</td><br>
			<br>
            <input name="submit1" type="submit" id="signup_btn" value="Sign up"/><br>
		 <br>
		 <a href ="index.php"> <input type="button" id="back_btn" value="Back"/><br></a>
	</form>
       
       <?php
	if(isset($_POST["submit1"]))
	{	
			$link=mysqli_connect("localhost","root","");
			mysqli_select_db($link,"loginregister");
			$count=0;
			$res=mysqli_query($link,"select * from registration where username='$_POST[t3]'");
				$count=mysqli_num_rows($res);
			 	if($count>0)
				{
					?>
					<script type="text/javascript">
					alert("this username already exist please choose another");
					</script>
					<?php
					
					
				}
				else
				{
					$pwd=md5 ($_POST["t4"]);
				mysqli_query($link,"insert into registration values('','$_POST[t1]','$_POST[t2]','$_POST[t3]','$pwd','$_POST[r1]','$_POST[t5]','$_POST[t6]')");
					?>
					<script type="text/javascript">
					alert("Registered successfully..go to login page");
                        window.location="index.php";
					</script>
					<?php
				}
		
   
}
	
		?>
       </div>
    </body>
</html>
             
             
   