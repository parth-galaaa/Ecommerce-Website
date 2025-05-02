<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<style>
		.card {
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			width: 300px;
			margin: 1em;
			text-align: center;
			font-family: Arial, sans-serif;
      		background-color: #f7f7f7;
		}
		.card img {
			width: 100%;
			height: 200px;
		}

		.card h2 {
			font-size: 1.5em;
			margin-top: 0.5em;
		}

		.card button {
			border: none;
			outline: none;
			padding: 0.8em;
			background-color: #4CAF50;
			color: #FFF;
			font-size: 1.2em;
			font-weight: bold;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		.card button:hover {
			background-color: #3E8E41;
		}
		.product-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}
      body {
      background-color: #f7f7f7;
      font-family: Arial, sans-serif;
      color: #333;

  	}
    h2 {
      color: #35B729;
      padding: 10px;
      border: none;
      border-radius: 10px;
      font-size:35px;
      margin-top: 0;
      text-align: center;
      font-weight: bold;
      margin-bottom: 20px;
    }
    nav {
      background-color: #f5f5f5;
      padding: 10px;
      border-bottom: 2px solid #ddd;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    nav li {
      margin: 0 10px;
    }

    nav a {
      text-decoration: none;
      color: #333;
      font-size: 16px;
      font-weight: bold;
    }

    nav a:hover {
      color: #f00;
    }
     
    input[type="number"] {
    width: 50px;
    padding: 8px;
    border: none;
    text-align: center;
    background-color: #f2f2f2;
  }
     
	</style>
</head>
<body>

  <nav>
      <ul>
        <li><a href="https://galap.myweb.cs.uwindsor.ca/COMP-2707-W23/project/index.html">Home</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="https://galap.myweb.cs.uwindsor.ca/COMP-2707-W23/project/product.php">Products</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="https://galap.myweb.cs.uwindsor.ca/COMP-2707-W23/project/shoppingcart.php">Cart</a></li>
        <li><a href="https://galap.myweb.cs.uwindsor.ca/COMP-2707-W23/project/update.php">Update Credentials</a></li>
        <li><a href="https://galap.myweb.cs.uwindsor.ca/COMP-2707-W23/project/delete.php">Delete Account</a></li>
        <li><a href="https://galap.myweb.cs.uwindsor.ca/COMP-2707-W23/project/signup.php">Register</a></li>
        <li><a href="https://galap.myweb.cs.uwindsor.ca/COMP-2707-W23/project/login.php">Login</a></li>
      </ul>
    </nav>
  
	<div class="product-container">
		<div class="card">
			<img src="c1.jpeg" alt="Clothes">
			<h2>Clothing</h2>
			<p>Price: $10.99</p>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <input type="hidden" name="product_id" value="1">
              <input type="number" name="quantity" value="1">
              <input type="hidden" name="price" value="10.99">
              <input type="hidden" name="product_name" value="Clothing">
              <button type="submit">Add to Cart</button>
            </form>
		</div>

		<div class="card">
			<img src="c2.jpeg" alt="Footwear">
			<h2>Footwear and Shoes</h2>
			<p>Price: $15.99</p>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <input type="hidden" name="product_id" value="2">
              <input type="number" name="quantity" value="1">
              <input type="hidden" name="price" value="15.99">
              <input type="hidden" name="product_name" value="Footwear">
              <button type="submit">Add to Cart</button>
            </form>
		</div>

		<div class="card">
			<img src="c3.webp" alt="Tech">
			<h2>Electronics</h2>
			<p>Price: $49.99</p>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <input type="hidden" name="product_id" value="3">
              <input type="number" name="quantity" value="1">
              <input type="hidden" name="price" value="49.99">
              <input type="hidden" name="product_name" value="Electronics">
              <button type="submit">Add to Cart</button>
            </form>
		</div>
      
      <div class="card">
			<img src="c4.jpeg" alt="Games">
			<h2>Games and Toys</h2>
			<p>Price: $10.99</p>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <input type="hidden" name="product_id" value="4">
              <input type="number" name="quantity" value="1">
              <input type="hidden" name="price" value="10.99">
              <input type="hidden" name="product_name" value="Games">
              <button type="submit">Add to Cart</button>
            </form>
		</div>

	</div>
<div class="product-container">

		<div class="card">
			<img src="c5.webp" alt="Home">
			<h2>Home</h2>
			<p>Price: $10.99</p>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <input type="hidden" name="product_id" value="5">
              <input type="number" name="quantity" value="1">
              <input type="hidden" name="price" value="10.99">
              <input type="hidden" name="product_name" value="Home">
              <button type="submit">Add to Cart</button>
            </form>
		</div>

		<div class="card">
			<img src="c6.jpeg" alt="Beauty">
			<h2>Beauty</h2>
			<p>Price: $15.99</p>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <input type="hidden" name="product_id" value="6">
              <input type="number" name="quantity" value="1">
              <input type="hidden" name="price" value="15.99">
              <input type="hidden" name="product_name" value="Beauty">
              <button type="submit">Add to Cart</button>
            </form>
		</div>

		<div class="card">
			<img src="c7.webp" alt="Sports">
			<h2>Sports</h2>
			<p>Price: $19.99</p>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <input type="hidden" name="product_id" value="7">
              <input type="number" name="quantity" value="1">
              <input type="hidden" name="price" value="19.99">
              <input type="hidden" name="product_name" value="Sports">
              <button type="submit">Add to Cart</button>
            </form>
		</div>
      
      <div class="card">
			<img src="c8.webp" alt="Pets">
			<h2>Pets</h2>
			<p>Price: $10.99</p>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <input type="hidden" name="product_id" value="8">
              <input type="number" name="quantity" value="1">
              <input type="hidden" name="price" value="10.99">
              <input type="hidden" name="product_name" value="Pets">
              <button type="submit">Add to Cart</button>
            </form>
		</div>
	</div>
</body>
</html>

<?php
	session_start();
	$_SESSION['product_name']="";
	$servername = "localhost";
    $username = "galap_db";
    $password = "password";
    $dbname = "galap_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
	
	//$sql1 = "DELETE FROM Cart WHERE product_ID=1";
	//$conn->query($sql1);
	
    // Check connection
    if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $quantity=$_POST['quantity'];
      	$price = $_POST['price']*$quantity;
        $sql = "INSERT INTO Cart (product_ID,Category, Quantity, Price) VALUES ('$product_id','$product_name','$quantity','$price')";
        $conn->query($sql);
        echo "Item added to cart."; 
    }
?>