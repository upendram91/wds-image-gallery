<html>
<head>
	<title>WD SMITH</title>
	<link href="CSS/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

if(isset($_GET['contact_name']))
{

}


?>
	<div class="wrapper" align="center">
		<div class="header">
	        <div class="navbar">
	            <div class= "titlelogo"></div>
	            <div class="searchbar" align="right">
	              <form action="">
	                <input type="text" width="" placeholder="enter  the search text here">
	                <input type="submit" value="Click here to Search">
	              </form>
	              <a href="search.php">Advanced Search</a>
	            </div>
	          	<ul class="navlist">
	              <li><a href="index.php">Home</a></li>
	              <li><a href="#">About</a></li>
	              <li><a href="#">Photo collection</a></li>
	              <li><a href="#">Learn More</a></li>
	              <li><a href="contactus.php">Contact us</a></li>
	            </ul>
	        </div>
	    </div>
	</div>
	<div class="contact-form">
		<h2>Fill below details to contact us!</h2>
		<fieldset>
		<form name="contactus_form" action="<?php echo $SERVER["PHP_SELF"]?>" method="POST">
		<pre>
			<label for="contact_name">Name*:</label>
			<input type="text" name="contact_name" placeholder=""><br>
			<label for="contact_message">Message*:</label>
			<input type="textarea" name="contact_message"><br>
			<label for="contact_email">Email address*:</label>
			<input type="email" name="contact_email"><br>
			<input type="submit" value="Contact">
		</pre>
		</form>
		</fieldset>
	</div>
</body>
</html>