<link rel="stylesheet" href="../css/style.css">
<!-- <style>
	.table{
		border: 2px solid blue;
    width: 600px;
    margin: auto;
	}
</style> -->
<body>

	<!-- Start All Pages -->
	<div >
		<div>
			<div>
				<div >
					<h1> REGISTRATION US </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!-- Start Contact -->

	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

				</div>
			</div>

			<div class="table">
				<div class="column">
					<table >
						<form action="" method="POST">

							
							<tr>
								<td>
									<input type="text" name="name" value="" placeholder="Enter Your Name" required="" style="padding: 6px 10px; width: 300%"> <br>
								</td>
							</tr>
							<tr>
								<td> <input type="text" name="department" value="" placeholder=" Enter Your Department" required="" style="padding: 6px 10px; width: 300%;"> <br> </td>
							</tr>
							<tr>
								<td> <input type="text" name="roll" value="" placeholder=" Enter Your Roll" required="" style="padding: 6px 10px; width: 300%;"> <br> </td>
							</tr>
							<tr>
								<td> <input type="text" name="reg" value="" placeholder=" Enter Your Registration " required="" style="padding: 6px 10px; width: 300%;"> <br> </td>
							</tr>
							<tr>
								<td> <input type="text" name="session" value="" placeholder=" Enter Your Session" required="" style="padding: 6px 10px; width: 300%;"> <br> </td>
							</tr>
							<tr>
								<td> <input type="text" name="hall" value="" placeholder=" Enter Your Hall" required="" style="padding: 6px 10px; width: 300%"> <br> </td>
							</tr>

							<tr>
								<td> <input type="email" name="email" value="" placeholder="Enter Your Email Address" required="" style="padding: 6px 10px; width: 300%"> <br> </td>
							</tr>
							<tr>
								<td> <input type="phone" name="phone" value="" placeholder="Enter Your Phone Number" required="" style="padding: 6px 10px; width: 300%"> <br> </td>
							</tr>

							<tr>
								<td align="center"> <input type="submit" name="sb" value="Registration Now" style="color:red; background: lightgreen; font-size: 1.3em; font-family: times new roman; margin-top:10px;border-radius:13px;margin-left:100px"> <br> </td>
							</tr>

						</form>
					</table>

					<?php
					if (isset($_POST['sb'])) {

						
						$name = $_POST['name'];

						$department = $_POST['department'];
						$hall = $_POST['hall'];
						$roll = $_POST['roll'];
						$reg = $_POST['reg'];

						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$session = $_POST['session'];
				
						include "connect.php";
						mysqli_query($con, "insert into student(
							name,department,roll,reg,session,hall,email,phone) values('$name','$department','$roll','$reg','$session','$hall','$email','$phone')");
						echo "<script>alert('Registration SuccessFully');</script>";
						echo "<center>Registration SuccessFully ... Click to<a href='../index.php'>Home</a></center>";
					}

					?>





				</div>
			</div>

		</div>
	</div>