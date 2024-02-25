<?php
 $conn = mysqli_connect('localhost','root','Thunderdrake21','dbmoonwalk');
 if(!$conn){
	 echo 'Could not find DB:'.mysqli_connect_error();
 }
 //This is used to read in all the orders the customer has made
 $importshoes = 'Select OrderName, OrderPrice FROM ShoppingCart';
 $ordercomplete = mysqli_query($conn, $importshoes);
 $Getorder = mysqli_fetch_all($ordercomplete, MYSQLI_ASSOC);
 //This is used to get the number of items the person has added to their cart
 $Totalorder = 'Select Count(OrderName) AS TotalItems from ShoppingCart';
 $TotalorderEXE = mysqli_Query($conn, $Totalorder);
 $GetAllitems = mysqli_fetch_all($TotalorderEXE, MYSQLI_ASSOC);
 //This is used to get the subtotal off all the ordered items
 $Totalordercost = 'Select SUM(OrderPrice) AS TotalCost from ShoppingCart';
 $TotalordercostEXE = mysqli_Query($conn, $Totalordercost);
 $Getprice = mysqli_fetch_all($TotalordercostEXE, MYSQLI_ASSOC);
 //This is used to get the vat amount of the subtotal
 $Vatamount = 'Select SUM(OrderPrice)*0.15 AS Vatamount from ShoppingCart';
 $VatamountEXE = mysqli_Query($conn, $Vatamount);
 $GetVatamount = mysqli_fetch_all($VatamountEXE, MYSQLI_ASSOC);
 //This is used to get the final cost of everything, subtotal + vat
 $Finalcost = 'Select SUM(OrderPrice) + SUM(OrderPrice)*0.15 AS Wholecost from ShoppingCart';
 $FinalCostEXE = mysqli_Query($conn, $Finalcost);
 $GetFinalcost = mysqli_fetch_all($FinalCostEXE, MYSQLI_ASSOC);
?>

<html>
 <head>
  <!--reference the CSS page used for this page-->
  <link rel="stylesheet" href="Shopping Cart (3).css"/>
  <title>Shopping Cart</title>
 </head>
 <body>
   <!--Create the buttons at the top to switch between pages-->
  <button id="Homebtn" OnClick="Home()">Home & About</button>
  <button id="Productsbtn" OnClick="Products()">Catalog</button>
  <button id="Cartbtn" OnClick="Cart()">Shopping Cart Info</button>
  <hr>
  <h1>Shopping Cart & Checkout</h1>
  <span><u>List of Products:</u></span> 
  <br></br>
  <!--Create the form that will give the buttons their functions-->
  <form action="Shopping Cart (3).php" method="POST">
   <!--Call in every item that was added to cart-->
   <?php foreach($Getorder as $CustOrder){?>
   <span id="productdetail"><?php echo htmlspecialchars($CustOrder['OrderName'])?><?php echo htmlspecialchars($CustOrder['OrderPrice'])?><?php }?><input name="Remove" type="submit" value="Remove"/></span>
   <br>
   <!--Call in the number of items ordered-->
   <?php foreach($GetAllitems as $allitems){?>
   <span id="Totalitems">Total number of items: <?php echo htmlspecialchars($allitems['TotalItems']) ?><?php }?></span>
   <br></br>
   <span><u>Total Cost:</u></span>
   <br></br>
   <!--Call in the subtotal-->
   <?php foreach($Getprice as $subtotal){?>
   <span id="Subtotal">Subtotal (without VAT): R:<?php echo htmlspecialchars($subtotal['TotalCost']) ?><?php }?></span>
   </br>
   <!--Call in the vatamount-->
   <?php foreach($GetVatamount as $Vattotal){?>
   <span id="VAT">VAT amount: R:<?php echo htmlspecialchars($Vattotal['Vatamount']) ?><?php }?></span>
   <br></br>
   <!--Call in the Finalcost-->
   <?php foreach($GetFinalcost as $EndCost){?>
   <span id="TotalCost">Final Cost (with VAT): R:<?php echo htmlspecialchars($EndCost['Wholecost']) ?><?php }?></span>
   <hr>
   <br></br>
   <!--The customer can select their payment method and insert their card details-->
   <span><u>Payment Info:</u><input type="text" id="card" name="cardinfo" list="Cardtype"/></span><input id="carddetails" type="text" value="Card Number MM/YYYY"><input id="CVcode" type="text" value="CVV">
   <datalist id="Cardtype">
     <option value="Credit"></option>
	 <option value="Debit"></option>
   </datalist>
   <br></br>
   <!--The customer must enter their billing address info to where they want their order delivered-->
   <span><u>Billing Adress:</u></span><input id="city" type="text" name="ordercity" value="City">
   <br></br>
   <span><input id="area" type="text" name="orderarea" value="Area"></span>
   <br></br>
   <span><input id="post-code" type="text" name="orderpostcode" value="Postal Code"></span>
   <br></br>
   <span><input id="street" type="text" name="orderstreet" value="Street Name"></span>
    <br></br>
   <br></br>
   <span><input id="order" type="submit" name="btn" value="Place Order"></span>
   </form>
   <?php
   //If the person clicks the remove button their order will be removed
   if ($_POST['Remove']==True){
	   $Removeorder = "Delete FROM ShoppingCart";
	   mysqli_query($conn,$Removeorder);
   } 
   
   //This is used to fetch the names of the order
   $orderitem = "Select OrderName from ShoppingCart";
   $fetchorderitem=mysqli_query($conn, $orderitem);
   $Getallorders = mysqli_fetch_all($fetchorderitem, MYSQLI_ASSOC);  
   
   //This is used to fetch the totalcost of the order   
   $orderprice = "Select SUM(OrderPrice) + SUM(OrderPrice)*0.15 AS Wholecost from ShoppingCart";
   $fetchorderprice=mysqli_query($conn, $orderprice);
   $Getprice = mysqli_fetch_all($fetchorderprice, MYSQLI_ASSOC);
   
   //The variables are created to fetch all the billing address info
   $City = $_POST["ordercity"];
   $Area = $_POST["orderarea"];
   $postcode = $_POST["orderpostcode"];
   $street = $_POST["orderstreet"];
   //A text file is created and the customer info is added as a receipt
   $receipt = fopen("Receipt.txt", "w");
   foreach($Getallorders as $Lastorder){
	fwrite($receipt, $Lastorder['OrderName']);   
   }
   foreach($Getprice as $Lastprice){
	fwrite($receipt, $Lastprice['Wholecost']);   
   }
   fwrite($receipt, $City);
   fwrite($receipt, $Area);
   fwrite($receipt, $postcode);
   fwrite($receipt, $street);
   fclose($receipt);
   
   if ($_POST['btn']==True){
   echo '<script>alert("Order has been placed and Receipt created!")</script>';
   } //An alert message will pop up to state when an order is successfully placed
   ?>
   <script>
    //This used to navigate to the home page
    function Home(){
    window.location.href = "http://localhost/Project%20ITECA/Website%20(1).php";
    }
	//This used to navigate to the catalog page
    function Products(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%201%20(2).php";
    }
	//This used to navigate to the shopping cart page
    function Cart(){
    window.location.href = "http://localhost/Project%20ITECA/Shopping%20Cart%20(3).php";
    }
  </script> 
  <!--This is used to end the connection of the database-->
  <?php mysqli_close($conn);?>  
 </body>
</html>

