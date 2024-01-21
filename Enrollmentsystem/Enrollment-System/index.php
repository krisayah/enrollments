<?php
	session_start();
		if(isset($_SESSION['login']))
		{
			header('Location:'.$_SESSION['login'].".php");
		}
		elseif(isset($_SESSION['message']))
		{	
			echo '<script type="text/javascript">alert("'.$_SESSION['message'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
		elseif(isset($_SESSION['error']))
		{
			echo '<script type="text/javascript">alert("'.$_SESSION['error'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
		elseif (isset($_SESSION['n_user'])) {
			echo '<script type="text/javascript">alert("'.$_SESSION['n_user'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
	<style type="text/css">
		body{
			background: #f1f1f1;
		}
		.input{
			width: 373px;
			margin-top: 10px;
			height: 30px; 
			padding-left: 15px;
			font-size: 18px;
		}
		.flex{
			display: inline-flex;
		}
	</style>

</head>

<body>
	<form style="background-color: green; height: 80px; padding-top: 10px;" action="login_check.php" method="POST">
		<div style="padding: 10px; width: 450px; display: inline-flex; ">
			<b style="font-family: cursive; font-size: 30px; color: #ed854d; margin-left: 75px;">Online Enrollment System</b>
		</div>
		<div align="right" style="margin-left: 240px; display: inline; width: 700px;">
			<select style="margin: 5px;" name="login_type">
				<option value="admin">Admin</option>
				<option value="student">Student</option>
			</select>

			<div class="flex">
				<div><input style="width: 180px; margin: 5px;" type="text" name="username" placeholder="Username/Email" required></div>
				
				<div><input style="width: 130px; margin: 5px;" type="password" name="password" placeholder="Password" required></div>
			</div>
			<input style="margin: 5px;" type="submit" name="login" value="Login">
		</div>
	</form>
	<script>
		function student() {
		    var x = document.getElementById('student');
		    if (x.style.display == 'block') {
		        x.style.display = 'none';
		    } 
		    else {
		        x.style.display = 'block';
		    }
		}
	</script>
	<div style="background-color: #d8dedc;">
		<form action="insert_db.php" method="POST">
			<div style="margin-left: 430px; padding: 25px; padding-top: 10px; padding-bottom: 5px;">
				<b style="font-size: 30px; font-style: bold; font-family: all;">Enrollment Form</b><br>		
				<div style="width: 470px;">
					<div class="flex"><input class="input" type="text" name="name" placeholder="Full Name" required></div><br>

					<div class="flex"><input class="input" type="email" name="email" placeholder="Email Address" required></div><br>

					<div class="flex" style="width: 208px;"> <input style="width: 160px;" class="input" type="password" name="password" placeholder="New Password" required></div>

					<div class="flex"><input style="width: 160px;" class="input" type="password" name="confirm_password" placeholder="Confirm Password" required></div><br>

					<div class="flex" style="width: 168px; margin-top: 30px;"> <b>Date of Birth:</b></div>
					<div class="flex"><input style="width: 200px;" class="input" type="Date" name="Date_of_birth" placeholder="DD/MM/YY" required></div><br>

					<div class="flex" style="width: 200px; margin-top: 25px;"> <b>Choose your identity:</b></div>
					<div class="flex" style="margin-top: 5px; margin-left: 35px;">
						<input type="radio" name="Sex" value="Male" required>Male
						<input type="radio" name="Sex" value="Female">Female
					</div><br>
					

					<div class="flex"><input class="input" type="text" name="address" placeholder="Your residental Address" required></div><br>
					<label for="province">Select Province:</label>
                <select id="province" name="province" >
                    <option value="negros-occidental">Negros Occidental</option>
                    <option value="negros oriental">Negros Oriental</option>
                    <!-- Add more provinces as needed -->
                </select>
    <br>
                <label for="city">Select City:</label>
                <select id="city" name= "city">
                    <!-- City options will be dynamically populated using JavaScript -->
                    <option value="Bacolod City">Bacolod City</option>
                    <option value="Bago city">Bago City </option>
                    <option value="Binalbagan">Binalbagan</option>
                    <option value="Cadiz city">Cadiz City</option>
                    <option value="Calatrava">Calatrava</option>
                    <option value="Candoni">Candoni</option>
                    <option value="Cauayan">Cauayan</option>
                    <option value="Don salvador Benedicto">Don Salavador Benedicto</option>
                    <option value="nEscalante">Escalante</option>
                    <option value="Himamaylan">Himamaylan</option>
                    <option value="Hinigaran">Hinigaran</option>
                    <option value="Hinoba-an">Hinoba-an</option>
                    <option value="Ilog">Ilog</option>
                    <option value="Isabella">Isabella</option>
                    <option value="Kabangkalan">Kabangkalan</option>
                    <option value="Kauayan">Kauayan</option>
                    <option value="La carlota city">La carlota City</option>
                    <option value="La Castellana">La Castillana</option>
                    <option value="Manapla">Manapla</option>
                    <option value="Moises Padilla">Moises Padilla</option>
                    <option value="Murcia">Murcia</option>
                    <option value="Paraiso">Paraiso (Fabrica) </option>
                    <option value="Pontevedra">Pontevedra</option>
                    <option value="pulupandanl">Pulupandan</option>
                    <option value="Sagay">Sagay</option>
                    <option value="San Carlos city">San Carlos City</option>
                    <option value="San enreque">San Enreque</option>
                    <option value="Silay City">Silay City</option>
                    <option value="Silay Hawaiian Central">Silay Hawaiian Central</option>
                    <option value="Sipalay">Sipalay</option>
                    <option value="Talisay">Talisay 6125 Toboso</option>
                    <option value="Valladoid">Valladolid</option>
                    <option value="Victorias">Victorias</option>
          
                </select> <br>
					<div class="flex" style="width: 148px;"> Upload Photo:</div>
					<div class="flex"><input class="input" style="height: 30px; width: 258px; padding-left: 0px;" type="file" name="photo" required></div>

					<div class="flex" style="width: 165px; margin-top: 30px;"> <b>Enroll as:</b></div>
					<div class="flex">
						<div style=" margin-top: 5px;">
							<select required style="margin: 5px; width: 225px; height: 45px; background-color: #d4e1cc; font-weight: bold;" class="input" name="c_type">
								<option type="button" value="">None</option>
								<option type="button" onclick="student()" value="student">Student</option>
							</select>


						</div>
					</div>
				</div>
			</div>


			<div id="student" hidden style="margin-left: 430px; padding: 25px; margin-top: -40px; margin-bottom: -15px;">

				<div class="flex"><input class="input" type="text" name="course" placeholder="Course name"></div><br>

			</div>
			<div class="flex"><input class="input" style="margin-left: 456px; height: 45px; width: 150px; margin-top: 5px; border-radius: 5px; background-color: green; font-weight: bold; color: white; margin-bottom: 10px;" type="reset" value="Reset"></div>

			<div class="flex"><input class="input" style="margin-left: 430px; width: 170px; height: 45px; margin-top: 5px; margin-left: 73px; border-radius: 5px; background-color: green; font-weight: bold; color: white;" type="submit" value="Register"></div>
		</form>
	</div>



</body>
</html>