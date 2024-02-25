<?php
 $conn = mysqli_connect('localhost','root','Thunderdrake21','dbmoonwalk');
 if(!$conn){
	 echo 'Could not find DB:'.mysqli_connect_error();
 }
         //Jordan series
         $JordanSS='Select ProductName,ProductCost From Catalog Where ProductID = 10'; 
         $JordanSC= mysqli_query($conn,$JordanSS);
         $JordanSF = mysqli_fetch_all($JordanSC, MYSQLI_ASSOC); 
		 
		 //Adidas Yeezy
		 $AdidasYS='Select ProductName,ProductCost From Catalog Where ProductID = 11'; 
         $AdidasYC= mysqli_query($conn,$AdidasYS);
         $AdidasYF = mysqli_fetch_all($AdidasYC, MYSQLI_ASSOC); 
		 
		 //Adidas Stan smith
		 $AdidasSSS='Select ProductName,ProductCost From Catalog Where ProductID = 12'; 
         $AdidasSSC= mysqli_query($conn,$AdidasSSS);
         $AdidasSSF = mysqli_fetch_all($AdidasSSC, MYSQLI_ASSOC); 
		 
		 //Adidas Ultraboost
		 $AdidasBS='Select ProductName,ProductCost From Catalog Where ProductID = 13'; 
         $AdidasBC= mysqli_query($conn,$AdidasBS);
         $AdidasBF = mysqli_fetch_all($AdidasBC, MYSQLI_ASSOC); 
		 
		 //Adidas Slide
		 $AdidasSS='Select ProductName,ProductCost From Catalog Where ProductID = 14'; 
         $AdidasSC= mysqli_query($conn,$AdidasSS);
         $AdidasSF = mysqli_fetch_all($AdidasSC, MYSQLI_ASSOC); 
		 
		 //Adidas Superstar
		 $AdidasstarS='Select ProductName,ProductCost From Catalog Where ProductID = 15'; 
         $AdidasstarC= mysqli_query($conn,$AdidasstarS);
         $AdidasstarF = mysqli_fetch_all($AdidasstarC, MYSQLI_ASSOC); 
		 
		 //Puma Long Sleeve Flip Flops
		 $PumaLFS='Select ProductName,ProductCost From Catalog Where ProductID = 16'; 
         $PumaLFC= mysqli_query($conn,$PumaLFS);
         $PumaLFF = mysqli_fetch_all($PumaLFC, MYSQLI_ASSOC); 
		 
		 //Puma Smash Buck Trainers
		 $PumaBTS='Select ProductName,ProductCost From Catalog Where ProductID = 17'; 
         $PumaBTC= mysqli_query($conn,$PumaBTS);
         $PumaBTF = mysqli_fetch_all($PumaBTC, MYSQLI_ASSOC);
         
		 //Puma Terrae Boots
         $PumaTBS='Select ProductName,ProductCost From Catalog Where ProductID = 18'; 
         $PumaTBC= mysqli_query($conn,$PumaTBS);
         $PumaTBF = mysqli_fetch_all($PumaTBC, MYSQLI_ASSOC);	

?>

<html>
 <head>
  <!--reference the CSS page used for this page-->
  <link rel = "stylesheet" href = "Catalog 2 (2).css" />
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
  <form action="Catalog 2 (2).php" name="Catalog2shoes" Method="POST">
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/10. Jordan series.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/11. Adidas Yeezy.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/12. Adidas Stan smith.png" width="100" height="100"></span>
  <span id="Topshoe"><img src="Pictures of shoes/28. Crocs Original.png" width="100" height="100"><img src="Pictures of shoes/37. Converse Classic Chuck Taylor.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($JordanSF as $Jordans1){ ?><?php foreach($AdidasYF as $AdidasYee){ ?><?php foreach($AdidasSSF as $AdidasStan){ ?>
  <span class="Group1"><?php echo htmlspecialchars($Jordans1['ProductName']) ?><?php }?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($AdidasYee['ProductName']) ?><?php }?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($AdidasStan['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">R<?php echo htmlspecialchars($Jordans1['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($AdidasYee['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($AdidasStan['ProductCost'])?></span>
   <br></br>
   <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="jordanseries" value="Add to cart"/><input class="cart2" type="submit" name="yeezys" value="Add to cart"/><input class="cart3" type="submit" name="adidasstan" value="Add to cart"/>
  <br>
  <span id="new">Newly Available:</span>
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/13. Adidas Ultraboost.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/14. Adidas Slide.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/15. Adidas Superstar.png" width="100" height="100"></span>
  <span id="NewShoe"><img src="Pictures of shoes/11. Adidas Yeezy.png" width="100" height="100"><img src="Pictures of shoes/27. Crocs Salahe Bembury.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($AdidasBF as $AdidasB1){ ?><?php foreach($AdidasSF as $AdidasB2){ ?><?php foreach($AdidasstarF as $AdidasB3){ ?>
  <span class="Group1"><?php echo htmlspecialchars($AdidasB1['ProductName']) ?><?php }?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($AdidasB2['ProductName']) ?><?php }?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($AdidasB3['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">R<?php echo htmlspecialchars($AdidasB1['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($AdidasB2['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($AdidasB3['ProductCost'])?></span>
   <br></br>
   <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="adidasUB" value="Add to cart"/><input class="cart2" type="submit" name="adidasslide" value="Add to cart"/><input class="cart3" type="submit" name="adidasSS" value="Add to cart"/>
  <br></br>
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/16. Puma Long Sleeve Flip Flops.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/17. Puma Smash Buck Trainers.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/18. Puma Terrae Boots.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($PumaLFF as $PumaL1){ ?><?php foreach($PumaBTF as $PumaL2){ ?><?php foreach($PumaTBF as $PumaL3){ ?>
  <span class="Group1"><?php echo htmlspecialchars($PumaL1['ProductName']) ?><?php }?></span><span class="Group2"><?php echo htmlspecialchars($PumaL2['ProductName']) ?><?php }?></span><span class="Group3"><?php echo htmlspecialchars($PumaL3['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">R<?php echo htmlspecialchars($PumaL1['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($PumaL2['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($PumaL3['ProductCost'])?></span>
   <br></br>
   <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="PUMALSFF" value="Add to cart"/><input class="cart2" type="submit" name="PumaSBT" value="Add to cart"/><input class="cart3" type="submit" name="PUMATB" value="Add to cart"/>
  <br>
  </form>
  <!--This buttons will be used to navigate between the catalog pages-->
  <button id="Catalog1" OnClick="Page1()">1</button><button id="Catalog2" OnClick="Page2()">2</button><button id="Catalog3" OnClick="Page3()">3</button><button id="Catalog4" OnClick="Page4()">4</button><button id="Catalog5" OnClick="Page5()">5</button>
  <?php
    //Each of these functions will execute when the specific button is clicked for it
    if ($_POST['jordanseries']==True){
    $shoe10 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('10','Jordan series','800')";
	mysqli_query($conn,$shoe10);
	echo '<script>alert("Order Placed!")</script>'; //This will alert that an order has been added
	}
    if ($_POST['yeezys']==True){
    $shoe11 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('11','Adidas Yeezy','2000')";
	mysqli_query($conn,$shoe11);
	echo '<script>alert("Order Placed!")</script>';
	}
    if ($_POST['adidasstan']==True){
    $shoe12 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('12','Adidas Stan smith','900')";
	mysqli_query($conn,$shoe12);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['adidasUB']==True){
    $shoe13 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('13','Adidas Ultraboost','900')";
	mysqli_query($conn,$shoe13);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['adidasslide']==True){
    $shoe14 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('14','Adidas Slide','300')";
	mysqli_query($conn,$shoe14);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['adidasSS']==True){
    $shoe15 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('15','Adidas Superstar','600')";
	mysqli_query($conn,$shoe15);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['PUMALSFF']==True){
    $shoe16 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('16','Puma Long Sleeve Flip Flops','300')";
	mysqli_query($conn,$shoe16);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['PumaSBT']==True){
    $shoe17 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('17','Puma Smash Buck Trainers','700')";
	mysqli_query($conn,$shoe17);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['PUMATB']==True){
    $shoe18 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('18','Puma Terrae Boots','700')";
	mysqli_query($conn,$shoe18);
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
