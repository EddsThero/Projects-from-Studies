<?php
 $conn = mysqli_connect('localhost','root','Thunderdrake21','dbmoonwalk');
 if(!$conn){
	 echo 'Could not find DB:'.mysqli_connect_error();
 }
		 //Puma Deviate Running Shoes
         $PumaDRS='Select ProductName,ProductCost From Catalog Where ProductID = 19'; 
         $PumaDRC= mysqli_query($conn,$PumaDRS);
         $PumaDRF = mysqli_fetch_all($PumaDRC, MYSQLI_ASSOC); 
		 
		 //Puma Nitro Shoes
		 $PumaNS='Select ProductName,ProductCost From Catalog Where ProductID = 20'; 
         $PumaNC= mysqli_query($conn,$PumaNS);
         $PumaNF = mysqli_fetch_all($PumaNC, MYSQLI_ASSOC); 
		 
		 //Vans Classic Sneakers
		 $VansCS='Select ProductName,ProductCost From Catalog Where ProductID = 21'; 
         $VansCC= mysqli_query($conn,$VansCS);
         $VansCF = mysqli_fetch_all($VansCC, MYSQLI_ASSOC); 
		 
		 //Vans Classic Slip-ons
		 $VansCSS='Select ProductName,ProductCost From Catalog Where ProductID = 22'; 
         $VansCSC= mysqli_query($conn,$VansCSS);
         $VansCSF = mysqli_fetch_all($VansCSC, MYSQLI_ASSOC); 
		 
		 //Vans Sk8 HI
		 $VansS8S='Select ProductName,ProductCost From Catalog Where ProductID = 23'; 
         $VansS8C= mysqli_query($conn,$VansS8S);
         $VansS8F = mysqli_fetch_all($VansS8C, MYSQLI_ASSOC); 
		 
		 //Vans Boots
		 $VansBS='Select ProductName,ProductCost From Catalog Where ProductID = 24'; 
         $VansBC= mysqli_query($conn,$VansBS);
         $VansBF = mysqli_fetch_all($VansBC, MYSQLI_ASSOC); 
		 
		 //Vans Cross Strap Flip Flops
		 $VansCFFS='Select ProductName,ProductCost From Catalog Where ProductID = 25'; 
         $VansCFFC= mysqli_query($conn,$VansCFFS);
         $VansCFFF = mysqli_fetch_all($VansCFFC, MYSQLI_ASSOC); 
		 
		 //Crocs Classic Flip Flops
		 $CrocsCFFS='Select ProductName,ProductCost From Catalog Where ProductID = 26'; 
         $CrocsCFFC= mysqli_query($conn,$CrocsCFFS);
         $CrocsCFFF = mysqli_fetch_all($CrocsCFFC, MYSQLI_ASSOC);
         
		 //Crocs Salahe Bembury
         $CrocsSBS='Select ProductName,ProductCost From Catalog Where ProductID = 27'; 
         $CrocsSBC= mysqli_query($conn,$CrocsSBS);
         $CrocsSBF = mysqli_fetch_all($CrocsSBC, MYSQLI_ASSOC);
?>

<html>
 <head>
  <!--reference the CSS page used for this page-->
  <link rel = "stylesheet" href = "Catalog 3 (2).css" />
  <title>Catalog</title>
 </head>
 <body>
  <!--Create the buttons at the top to switch between pages-->
  <button id="Homebtn" OnClick="Home()">Home & About</button>
  <button id="Productsbtn" OnClick="Products()">Catalog</button>
  <button id="Cartbtn" OnClick="Cart()">Shopping Cart Info</button>
  <h1>Catalog</h1> 
  <h2>(Note: you can only order 1 of each type of shoe!)</h2>
  <!--Create the form that will use the buttons created to create records in the shopping cart table-->
  <form action="Catalog 3 (2).php" name="Catalog1shoes" Method="POST">
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/19. Puma Deviate Running Shoes.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/20. Puma Nitro Shoes.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/21. Vans Classic Sneakers.png" width="100" height="100"></span>
  <span id="Topshoe"><img src="Pictures of shoes/28. Crocs Original.png" width="100" height="100"><img src="Pictures of shoes/37. Converse Classic Chuck Taylor.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($PumaDRF as $PumaL4){ ?><?php foreach($PumaNF as $PumaL5){ ?><?php foreach($VansCF as $VansC1){ ?>
  <span class="Group1">&ensp;&ensp;<?php echo htmlspecialchars($PumaL4['ProductName']) ?><?php }?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($PumaL5['ProductName']) ?><?php }?></span><span class="Group3"><?php echo htmlspecialchars($VansC1['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($PumaL4['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($PumaL5['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($VansC1['ProductCost'])?></span>
  <br></br>
  <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="PumaDeviante" value="Add to cart"/><input class="cart2" type="submit" name="PumaNitro" value="Add to cart"/><input class="cart3" type="submit" name="VANSCLASSICS" value="Add to cart"/>
  <br>
  <span id="new">Newly Available:</span>
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/22. Vans Classic Slip-ons.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/23. Vans Sk8 HI.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/24. Vans Boots.png" width="100" height="100"></span>
  <span id="NewShoe"><img src="Pictures of shoes/11. Adidas Yeezy.png" width="100" height="100"><img src="Pictures of shoes/27. Crocs Salahe Bembury.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($VansCSF as $VansC2){ ?><?php foreach($VansS8F as $VansC3){ ?><?php foreach($VansBF as $VansC4){ ?>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($VansC2['ProductName']) ?><?php }?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($VansC3['ProductName']) ?><?php }?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($VansC4['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($VansC2['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($VansC3['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($VansC4['ProductCost'])?></span>
  <br></br>
  <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="VANSslipons" value="Add to cart"/><input class="cart2" type="submit" name="VANSSK8" value="Add to cart"/><input class="cart3" type="submit" name="VANSBoots" value="Add to cart"/>
  <br></br>
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/25. Vans Cross Strap Flip Flops.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/26. Crocs Classic Flip Flops.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/27. Crocs Salahe Bembury.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($VansCFFF as $Vans5){ ?><?php foreach($CrocsCFFF as $CrocsC1){ ?><?php foreach($CrocsSBF as $CrocsC2){ ?>
  <span class="Group1"><?php echo htmlspecialchars($Vans5['ProductName']) ?><?php }?></span><span class="Group2"><?php echo htmlspecialchars($CrocsC1['ProductName']) ?><?php }?></span><span class="Group3"><?php echo htmlspecialchars($CrocsC2['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Vans5['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($CrocsC1['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($CrocsC2['ProductCost'])?></span>
   <br></br>
   <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="VANSFlipF" value="Add to cart"/><input class="cart2" type="submit" name="CrocsFlipF" value="Add to cart"/><input class="cart3" type="submit" name="CrocsSalahe" value="Add to cart"/>
  <br>
  </form>
  <!--This buttons will be used to navigate between the catalog pages-->
  <button id="Catalog1" OnClick="Page1()">1</button><button id="Catalog2" OnClick="Page2()">2</button><button id="Catalog3" OnClick="Page3()">3</button><button id="Catalog4" OnClick="Page4()">4</button><button id="Catalog5" OnClick="Page5()">5</button>
  <?php
    //Each of these functions will execute when the specific button is clicked for it
    if ($_POST['PumaDeviante']==True){
    $shoe19 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('19','Puma Deviate Running Shoes','1500')";
	mysqli_query($conn,$shoe19);
	echo '<script>alert("Order Placed!")</script>'; //This will alert that an order has been added
	}
    if ($_POST['PumaNitro']==True){
    $shoe20 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('20','Puma Nitro Shoes','1200')";
	mysqli_query($conn,$shoe20);
	echo '<script>alert("Order Placed!")</script>';
	}
    if ($_POST['VANSCLASSICS']==True){
    $shoe21 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('21','Vans Classic Sneakers','600')";
	mysqli_query($conn,$shoe21);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['VANSslipons']==True){
    $shoe22 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('22','Vans Classic Slip-ons','600')";
	mysqli_query($conn,$shoe22);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['VANSSK8']==True){
    $shoe23 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('23','Vans Sk8 HI','700')";
	mysqli_query($conn,$shoe23);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['VANSBoots']==True){
    $shoe24 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('24','Vans Boots','1200')";
	mysqli_query($conn,$shoe24);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['VANSFlipF']==True){
    $shoe25 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('25','Vans Cross Strap Flip Flops','400')";
	mysqli_query($conn,$shoe25);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['CrocsFlipF']==True){
    $shoe26 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('26','Crocs Classic Flip Flops','300')";
	mysqli_query($conn,$shoe26);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['CrocsSalahe']==True){
    $shoe27 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('27','Crocs Salahe Bembury','2000')";
	mysqli_query($conn,$shoe27);
	echo '<script>alert("Order Placed!")</script>';
	}
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
   //This used to navigate to the first catalog page
    function Page1(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%201%20(2).php";
   }
   //This used to navigate to the second catalog page
   function Page2(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%202%20(2).php";
   }
   //This used to navigate to the third catalog page
   function Page3(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%203%20(2).php";
   }
   //This used to navigate to the fourth catalog page
   function Page4(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%204%20(2).php";
   }
   //This used to navigate to the fifth catalog page
   function Page5(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%205%20(2).php";
   }
  </script> 
  <!--This is used to end the connection of the database-->
  <?php mysqli_close($conn);?>
 </body>
</html>