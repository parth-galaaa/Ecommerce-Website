<!DOCTYPE html>
<html>
  <head>
    <title>Delete Account</title>
  </head>
  <style>
    div {
      width:350px;
      z-index: 10;
      border-radius: 5px;
      background-color: #F8F8F8;
      padding: 20px;
      font-size: 18px;
      border: 3px solid #ccc;
      border-radius: 20px;
      text-align: center;
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      margin: auto;
      transform: translateY(-50%);
    }
    form {
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      border-radius: 20px;
      border: 1px solid #ccc;
      background-color: white;
    }
    label {
      text-align:left;
      display: inline-block;
      width: 100px;
    }       
    input[type=email] {
      width:150px;
      margin-left: 10px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      padding: 5px;
      background-color: #f2f2f2;
    }
    input[type=email]:focus {
      border: 3px solid #555;
    }
    input[type=password] {
      width:150px;
      margin-left: 10px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      padding: 5px;
      background-color: #f2f2f2;
    }
    input[type=password]:focus {
      border: 3px solid #555;
    }
    input[type=submit] {
      width:100px;
      display: inline-block;
      background-color: #35B729;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      padding: 5px;
      cursor: pointer;
      float:right;
    }
    input[type=submit]:hover {
      background-color: #45a049;
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
  </style>
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

    <div align="center">
      <h2>Delete Account</h2>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" placeholder="EMAIL*">
        <br><br>
        <label for="pwd">Password: </label>
        <input type="password" id="pwd" name="pwd" placeholder="PASSWORD*">
        <br><br>
        <input type="submit">
      </form>
    </div>
  </body>
</html>

<?php
	session_start();
	$_SESSION['email']="";
    $servername = "localhost";
    $username = "galap_db";
    $password = "password";
    $dbname = "galap_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
	
    // Check connection
    if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }
	
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($email) or empty($pwd)) {
        echo "Please fill out the required fields*";
      }
      else {
        $sql1 = "SELECT * FROM Users WHERE email='$email'";
        $result = $conn->query($sql1);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          if ($row["email"]==$email and $row["password"]==$pwd) {
          	echo "You have successfully deleted your account.";
            $sql = "DELETE FROM Users WHERE email='$email'";
            $conn->query($sql);
          }
          else {
            echo "Email or password incorrect.";
          }
        }
      }
    }
?>