<?php
 $conn = mysqli_connect('localhost','root','Thunderdrake21','dbmoonwalk');
 if(!$conn){
	 echo 'Could not find DB:'.mysqli_connect_error();
 }
		 //Crocs Original
         $CrocsOS='Select ProductName,ProductCost From Catalog Where ProductID = 28'; 
         $CrocsOC= mysqli_query($conn,$CrocsOS);
         $CrocsOF = mysqli_fetch_all($CrocsOC, MYSQLI_ASSOC); 
		 
		 //Crocs Rainboots
		 $CrocsRBS='Select ProductName,ProductCost From Catalog Where ProductID = 29'; 
         $CrocsRBC= mysqli_query($conn,$CrocsRBS);
         $CrocsRBF = mysqli_fetch_all($CrocsRBC, MYSQLI_ASSOC); 
		 
		 //Crocs Puff Boots
		 $CrocsPBS='Select ProductName,ProductCost From Catalog Where ProductID = 30'; 
         $CrocsPBC= mysqli_query($conn,$CrocsPBS);
         $CrocsPBF = mysqli_fetch_all($CrocsPBC, MYSQLI_ASSOC); 
		 
		 //DC Net Skate Shoe
		 $DCNS='Select ProductName,ProductCost From Catalog Where ProductID = 31'; 
         $DCNC= mysqli_query($conn,$DCNS);
         $DCNF = mysqli_fetch_all($DCNC, MYSQLI_ASSOC); 
		 
		 //DC Slip on shoe
		 $DCSOSS='Select ProductName,ProductCost From Catalog Where ProductID = 32'; 
         $DCSOSC= mysqli_query($conn,$DCSOSS);
         $DCSOSF = mysqli_fetch_all($DCSOSC, MYSQLI_ASSOC); 
		 
		 //DC Open Flip Flops
		 $DCOFFS='Select ProductName,ProductCost From Catalog Where ProductID = 33'; 
         $DCOFFC= mysqli_query($conn,$DCOFFS);
         $DCOFFF = mysqli_fetch_all($DCOFFC, MYSQLI_ASSOC); 
		 
		 //DC Walking Boots
		 $DCWBS='Select ProductName,ProductCost From Catalog Where ProductID = 34'; 
         $DCWBC= mysqli_query($conn,$DCWBS);
         $DCWBF = mysqli_fetch_all($DCWBC, MYSQLI_ASSOC); 
		 
		 //DC Villian Slip ons
		 $DCVSS='Select ProductName,ProductCost From Catalog Where ProductID = 35'; 
         $DCVSC= mysqli_query($conn,$DCVSS);
         $DCVSF = mysqli_fetch_all($DCVSC, MYSQLI_ASSOC);
         
		 //Converse Run Star
         $ConRSS='Select ProductName,ProductCost From Catalog Where ProductID = 36'; 
         $ConRSC= mysqli_query($conn,$ConRSS);
         $ConRSF = mysqli_fetch_all($ConRSC, MYSQLI_ASSOC);
?>

<html>
 <head>
  <!--reference the CSS page used for this page-->
  <link rel = "stylesheet" href = "Catalog 4 (2).css" />
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
  <form action="Catalog 4 (2).php" name="Catalog1shoes" Method="POST">
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/28. Crocs Original.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/29. Crocs Rainboots.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/30. Crocs Puff Boots.png" width="100" height="100"></span>
  <span id="Topshoe"><img src="Pictures of shoes/28. Crocs Original.png" width="100" height="100"><img src="Pictures of shoes/37. Converse Classic Chuck Taylor.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($CrocsOF as $CrocsC3){ ?><?php foreach($CrocsRBF as $CrocsC4){ ?><?php foreach($CrocsPBF as $CrocsC5){ ?>
  <span class="Group1"><?php echo htmlspecialchars($CrocsC3['ProductName']) ?><?php }?></span><span class="Group2">&nbsp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($CrocsC4['ProductName']) ?><?php }?></span><span class="Group3">&ensp;&ensp;&ensp;<?php echo htmlspecialchars($CrocsC5['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">R<?php echo htmlspecialchars($CrocsC3['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($CrocsC4['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($CrocsC5['ProductCost'])?></span>
  <br></br>
  <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="CrocsOG" value="Add to cart"/><input class="cart2" type="submit" name="CrocsRboots" value="Add to cart"/><input class="cart3" type="submit" name="CrocsPuff" value="Add to cart"/>
  <br>
  <span id="new">Newly Available:</span>
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/31. DC Net Skate Shoe.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/32. DC Slip on shoe.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/33. DC Open Flip Flops.png" width="100" height="100"></span>
  <span id="NewShoe"><img src="Pictures of shoes/11. Adidas Yeezy.png" width="100" height="100"><img src="Pictures of shoes/27. Crocs Salahe Bembury.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($DCNF as $DCS1){ ?><?php foreach($DCSOSF as $DCS2){ ?><?php foreach($DCOFFF as $DCS3){ ?>
  <span class="Group1"><?php echo htmlspecialchars($DCS1['ProductName']) ?><?php }?></span><span class="Group2"><?php echo htmlspecialchars($DCS2['ProductName']) ?><?php }?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($DCS3['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">R<?php echo htmlspecialchars($DCS1['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($DCS2['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($DCS3['ProductCost'])?></span>
  <br></br>
  <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="DCSkate" value="Add to cart"/><input class="cart2" type="submit" name="DCSlipON" value="Add to cart"/><input class="cart3" type="submit" name="DCFlipF" value="Add to cart"/>
  <br></br>
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/34. DC Walking Boots.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/35. DC Villian Slip ons.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/36. Converse Run Star.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($DCWBF as $DCS4){ ?><?php foreach($DCVSF as $DCS5){ ?><?php foreach($ConRSF as $Converse1){ ?>
  <span class="Group1"><?php echo htmlspecialchars($DCS4['ProductName']) ?><?php }?></span><span class="Group2"><?php echo htmlspecialchars($DCS5['ProductName']) ?><?php }?></span><span class="Group3">&ensp;<?php echo htmlspecialchars($Converse1['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">R<?php echo htmlspecialchars($DCS4['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($DCS5['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Converse1['ProductCost'])?></span>
  <br></br>
  <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="DCWalkboots" value="Add to cart"/><input class="cart2" type="submit" name="DCVillian" value="Add to cart"/><input class="cart3" type="submit" name="ConverseRStar" value="Add to cart"/>
  <br>
  </form>
  <!--This buttons will be used to navigate between the catalog pages-->
  <button id="Catalog1" OnClick="Page1()">1</button><button id="Catalog2" OnClick="Page2()">2</button><button id="Catalog3" OnClick="Page3()">3</button><button id="Catalog4" OnClick="Page4()">4</button><button id="Catalog5" OnClick="Page5()">5</button>
  <?php
    //Each of these functions will execute when the specific button is clicked for it
    if ($_POST['CrocsOG']==True){
    $shoe28 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('28','Crocs Original','500')";
	mysqli_query($conn,$shoe28);
	echo '<script>alert("Order Placed!")</script>'; //This will alert that an order has been added
	}
    if ($_POST['CrocsRboots']==True){
    $shoe29 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('29','Crocs Rainboots','700')";
	mysqli_query($conn,$shoe29);
	echo '<script>alert("Order Placed!")</script>';
	}
    if ($_POST['CrocsPuff']==True){
    $shoe30 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('30','Crocs Puff Boots','1000')";
	mysqli_query($conn,$shoe30);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['DCSkate']==True){
    $shoe31 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('31','DC Net Skate Shoe','700')";
	mysqli_query($conn,$shoe31);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['DCSlipON']==True){
    $shoe32 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('32','DC Slip on shoe','700')";
	mysqli_query($conn,$shoe32);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['DCFlipF']==True){
    $shoe33 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('33','DC Open Flip Flops','400')";
	mysqli_query($conn,$shoe33);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['DCWalkboots']==True){
    $shoe34 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('34','DC Walking Boots','1200')";
	mysqli_query($conn,$shoe34);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['DCVillian']==True){
    $shoe35 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('35','DC Villian Slip ons','900')";
	mysqli_query($conn,$shoe35);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['ConverseRStar']==True){
    $shoe36 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('36','Converse Run Star','1200')";
	mysqli_query($conn,$shoe36);
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