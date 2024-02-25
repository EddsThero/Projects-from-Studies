<?php
 $conn = mysqli_connect('localhost','root','Thunderdrake21','dbmoonwalk');
 if(!$conn){
	 echo 'Could not find DB:'.mysqli_connect_error();
 }
         //NikeAIRMAX
         $NikeAirMS='Select ProductName,ProductCost From Catalog Where ProductID = 1'; 
         $NikeAirMC= mysqli_query($conn,$NikeAirMS);
         $NikeAirF = mysqli_fetch_all($NikeAirMC, MYSQLI_ASSOC); 
		 
		 //Nike Infinity Run
		 $NikeInfS='Select ProductName,ProductCost From Catalog Where ProductID = 2'; 
         $NikeInfC= mysqli_query($conn,$NikeInfS);
         $NikeInfF = mysqli_fetch_all($NikeInfC, MYSQLI_ASSOC); 
		 
		 //Nike Air Force 1
		 $NikeAFS='Select ProductName,ProductCost From Catalog Where ProductID = 3'; 
         $NikeAFC= mysqli_query($conn,$NikeAFS);
         $NikeAFF = mysqli_fetch_all($NikeAFC, MYSQLI_ASSOC); 
		 
		 //Nike Blazer
		 $NikeBS='Select ProductName,ProductCost From Catalog Where ProductID = 4'; 
         $NikeBC= mysqli_query($conn,$NikeBS);
         $NikeBF = mysqli_fetch_all($NikeBC, MYSQLI_ASSOC); 
		 
		 //Nike Solay Flip Flops
		 $NikeSS='Select ProductName,ProductCost From Catalog Where ProductID = 5'; 
         $NikeSC= mysqli_query($conn,$NikeSS);
         $NikeSF = mysqli_fetch_all($NikeSC, MYSQLI_ASSOC); 
		 
		 //Jordan Break Slides
		 $JordanBSS='Select ProductName,ProductCost From Catalog Where ProductID = 6'; 
         $JordanBSC= mysqli_query($conn,$JordanBSS);
         $JordanBSF = mysqli_fetch_all($JordanBSC, MYSQLI_ASSOC); 
		 
		 //Air Jordan
		 $AirJS='Select ProductName,ProductCost From Catalog Where ProductID = 7'; 
         $AirJC= mysqli_query($conn,$AirJS);
         $AirJF = mysqli_fetch_all($AirJC, MYSQLI_ASSOC); 
		 
		 //Jordan Max Aura
		 $JordanMS='Select ProductName,ProductCost From Catalog Where ProductID = 8'; 
         $JordanMC= mysqli_query($conn,$JordanMS);
         $JordanMF = mysqli_fetch_all($JordanMC, MYSQLI_ASSOC);
         
		 //Jordan Delta
         $JordanDS='Select ProductName,ProductCost From Catalog Where ProductID = 9'; 
         $JordanDC= mysqli_query($conn,$JordanDS);
         $JordanDF = mysqli_fetch_all($JordanDC, MYSQLI_ASSOC); 
?>

<html>
 <head>
  <!--reference the CSS page used for this page-->
  <link rel = "stylesheet" href = "Catalog 1 (2).css" />
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
  <form action="Catalog 1 (2).php" name="Catalog1shoes" Method="POST">
   <!--Every img src function is used to display an image of the specific shoe mentioned-->
   <span class="pic1"><img src="Pictures of shoes/1.Nike Air Max.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/2.Nike Infinity Run.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/3.Nike Air Force 1.png" width="100" height="100"></span>
   <span id="Topshoe"><img src="Pictures of shoes/28. Crocs Original.png" width="100" height="100"><img src="Pictures of shoes/37. Converse Classic Chuck Taylor.png" width="100" height="100"></span>
   <br></br>
   <!--This function will fetch all and display all the productnames and prices mentioned-->
   <?php foreach($NikeAirF as $NikeAirMax){ ?><?php foreach($NikeInfF as $NikeIn){ ?><?php foreach($NikeAFF as $NikeAir1){ ?>
   <span class="Group1"><?php echo htmlspecialchars($NikeAirMax['ProductName']) ?><?php }?></span><span class="Group2"><?php echo htmlspecialchars($NikeIn['ProductName']) ?><?php }?></span><span class="Group3">&ensp;<?php echo htmlspecialchars($NikeAir1['ProductName']) ?><?php }?> </span>
   <br></br>
   <span class="Group1">R<?php echo htmlspecialchars($NikeAirMax['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($NikeIn['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($NikeAir1['ProductCost'])?></span>
   <br></br>
   <!--This function will add the product selected to the shopping cart table-->   
   <input class="cart1" type="submit" name="NikeAirM" value="Add to cart"/><input class="cart2" type="submit" name="NikeInfinity" value="Add to cart"/><input type="submit" class="cart3" name="NikeAir1" value="Add to cart"/>
   <br>
   <span id="new">Newly Available:</span>
   <!--Every img src function is used to display an image of the specific shoe mentioned-->
   <span class="pic1"><img src="Pictures of shoes/4.Nike Blazer.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/5. Nike Solay Flip Flops.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/6. Jordan Break Slides.png" width="100" height="100"></span>
   <span id="NewShoe"><img src="Pictures of shoes/11. Adidas Yeezy.png" width="100" height="100"><img src="Pictures of shoes/27. Crocs Salahe Bembury.png" width="100" height="100"></span>
   <br></br>
   <!--This function will fetch all and display all the productnames and prices mentioned-->
   <?php foreach($NikeBF as $NikeB){ ?><?php foreach($NikeSF as $NikeSFF){ ?><?php foreach($JordanBSF as $JordanBSlides){ ?>
   <span class="Group1"><?php echo htmlspecialchars($NikeB['ProductName']) ?><?php }?></span><span class="Group2"><?php echo htmlspecialchars($NikeSFF['ProductName']) ?><?php }?></span><span class="Group3"><?php echo htmlspecialchars($JordanBSlides['ProductName']) ?><?php }?></span>
   <br></br>
   <span class="Group1">R<?php echo htmlspecialchars($NikeB['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($NikeSFF['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($JordanBSlides['ProductCost'])?></span>
   <br></br>
   <!--This function will add the product selected to the shopping cart table--> 
   <input class="cart1" type="submit" name="NikeBlazer" value="Add to cart"/><input class="cart2" type="submit" name="NikeFlipFlops" value="Add to cart"/><input class="cart3" type="submit" name="JordanSlides" value="Add to cart"/>
   <br></br>
   <!--Every img src function is used to display an image of the specific shoe mentioned-->
   <span class="pic1"><img src="Pictures of shoes/7. Air Jordan.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/8. Jordan Max Aura.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/9. Jordan Delta.png" width="100" height="100"></span>
   <br></br>
   <!--This function will fetch all and display all the productnames and prices mentioned-->
   <?php foreach($AirJF as $AirJor){ ?><?php foreach($JordanMF as $JordanMA){ ?><?php foreach($JordanDF as $JordanDel){ ?>
   <span class="Group1"><?php echo htmlspecialchars($AirJor['ProductName']) ?><?php }?></span><span class="Group2"><?php echo htmlspecialchars($JordanMA['ProductName']) ?><?php }?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($JordanDel['ProductName']) ?><?php }?></span>
   <br></br>
   <span class="Group1">R<?php echo htmlspecialchars($AirJor['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($JordanMA['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($JordanDel['ProductCost'])?></span>
   <br></br>
   <!--This function will add the product selected to the shopping cart table-->
   <input class="cart1" type="submit" name="AirJordan" value="Add to cart"/><input class="cart2" type="submit" name="JordanMax" value="Add to cart"/><input class="cart3" type="submit" name="JordanDelta" value="Add to cart"/>
   <br>
  </form>
  <!--This buttons will be used to navigate between the catalog pages-->
  <button id="Catalog1" OnClick="Page1()">1</button><button id="Catalog2" OnClick="Page2()">2</button><button id="Catalog3" OnClick="Page3()">3</button><button id="Catalog4" OnClick="Page4()">4</button><button id="Catalog5" OnClick="Page5()">5</button>
  <?php
    //Each of these functions will execute when the specific button is clicked for it
    if ($_POST['NikeAirM']==True){
    $shoe1 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('1','Nike Air Max','500')";
	mysqli_query($conn,$shoe1);
	echo '<script>alert("Order Placed!")</script>'; //This will alert that an order has been added 
	}
    if ($_POST['NikeInfinity']==True){
    $shoe2 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('2','Nike Infinity Run','600')";
	mysqli_query($conn,$shoe2);
	echo '<script>alert("Order Placed!")</script>';
	}
    if ($_POST['NikeAir1']==True){
    $shoe3 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('3','Nike Air Force 1','1000')";
	mysqli_query($conn,$shoe3);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['NikeBlazer']==True){
    $shoe4 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('4','Nike Blazer','800')";
	mysqli_query($conn,$shoe4);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['NikeFlipFlops']==True){
    $shoe5 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('5','Nike Solay Flip Flops','300')";
	mysqli_query($conn,$shoe5);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['JordanSlides']==True){
    $shoe6 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('6','Jordan Break Slides','300')";
	mysqli_query($conn,$shoe6);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['AirJordan']==True){
    $shoe7 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('7','Air Jordan','800')";
	mysqli_query($conn,$shoe7);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['JordanMax']==True){
    $shoe8 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('8','Jordan Max Aura','800')";
	mysqli_query($conn,$shoe8);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['JordanDelta']==True){
    $shoe9 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('9','Jordan Delta','1000')";
	mysqli_query($conn,$shoe9);
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

