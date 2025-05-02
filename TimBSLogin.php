<!DOCTYPE html>
<!--
Name: Timon John
Assignment: Assignment 2
Date: 6/11/2019
-->
<html>
	<head>
	
	<title> Login page </title>
	
			<link rel="stylesheet" type="text/css" href="LoginStyle.css">
					
	
	
	</head>
		<body>	
		<div id="L_btn">
		<div id="Firm">
		<h3><center> Tim's Barber Salon </center></h3>
			<p><center><button type="button" onclick="document.getElementById('id01').style.display='block'" class="loginButton">Login</button><center><p>
		</div>
		</div>

<div id="id01" class="modal">
  
  <div id="Firm" class="animate">
			<form action = "ProcessTimsBS.php" method="POST">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			<p>
			<Label>Username:</label>
			<input type="text" ID="user" name="user" required/>
			</p>
			<p>
			<Label>Password:</label>
			<input type="password" ID="pass" name="pass" required/>
			</p>
			<p>
	
			<input type="submit" ID="btn" value="Login"/>
			</p>
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			</form>
			</div>

  </form>
</div>
<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

			</body>

</html>