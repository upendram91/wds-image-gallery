<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="CSS/styles.css" rel="stylesheet" type="text/css">
</head>
<body>

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
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>
        </div>
<form>
	<label>Full Text Search</label><input type="text" placeholder="Enter Search Term"><br>
	<fieldset>
		<label>Results/page</label><select>
			<option value="5">5</option>
			<option value="10">10</option>
			<option value="20">20</option>
			<option value="40">40</option>
			<option value="60">60</option>
			<option value="80">80</option>
			<option value="100">100</option>
		</select>
		<label>Sort items by</label><select>
			<option value="1">relevance</option>
			<option value="2">issue date</option>
			<option value="3">submit date</option>
			<option value="4">title</option>
		</select>
		<label>In Order</label><select>
			<option value="1">Ascending</option>
			<option value="2">Descending</option>
		</select>
	</fieldset>
	<input type="submit" value="go">
</form>
<footer>    	
	<div class="footer-notes row">
    	<p align="right">
        	<a>University of Texas at Arlington</a><br>
           	<a>Special Collections</a><br>
            <a>702 Planetarium Place, Arlington, TX 76019. 8172723000 </a>
        </p>
    </div>
</footer>
</div>
</body>
</html>