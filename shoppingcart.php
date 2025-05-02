<!DOCTYPE html>
<html>
  <head>
    <title>Shopping Cart</title>
  </head>
  <style>
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

  h1 {
    text-align: center;
    margin: 20px 0;
    color: #333;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }

  th,
  td {
    text-align: left;
    padding: 10px;
  }

  th {
    background-color: #45a049;
    color: #fff;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tfoot tr {
    font-weight: bold;
  }

  tfoot td:first-child {
    text-align: right;
  }

  .a {
      width:100px;
      display: inline-block;
      background-color: #35B729;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      padding: 10px;
      cursor: pointer;
      float:right;
  }
  button:hover {
    background-color: #555;
  }
   
  .b {
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
    <table>
      <thead>
        <tr>
          <th>Product ID</th>
          <th>Category</th>
          <th>Quantity</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
        	session_start();
            $servername = "localhost";
            $username = "galap_db";
            $password = "password";
            $dbname = "galap_db";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
        	$sql = 'SELECT * FROM Cart';
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['product_ID'] . '</td>';
                echo '<td>' . $row['Category'] . '</td>';
                echo '<td>' . $row['Quantity'] . '<form method="post" action="remove.php"><input type="hidden" name="product_ID" value="' . $row['product_ID'] . '"><button class="b" type="submit" name="remove">Remove</button></form></td>';
                echo '<td>$' . $row['Price'] . '</td>';
                echo '</tr>';
                $total += $row['Price'];
              }
            }

            $conn->close();
        ?>
        </tbody>
      <tfoot>
        <tr>
          <td colspan="3">Total</td>
          <td>$<?php echo $total;?></td>
        </tr>
      </tfoot>
    </table>
    <button class="a">Checkout</button>
  </body>
</html>