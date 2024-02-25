<?php
 $conn = mysqli_connect('localhost','root','Thunderdrake21','dbmoonwalk');
 if(!$conn){
	 echo 'Could not find DB:'.mysqli_connect_error();
 }
		 //Converse Classic Chuck Taylor
         $ConCTS='Select ProductName,ProductCost From Catalog Where ProductID = 37'; 
         $ConCTC= mysqli_query($conn,$ConCTS);
         $ConCTF = mysqli_fetch_all($ConCTC, MYSQLI_ASSOC); 
		 
		 //Converse Classic All Star Canvas
		 $ConCASS='Select ProductName,ProductCost From Catalog Where ProductID = 38'; 
         $ConCASC= mysqli_query($conn,$ConCASS);
         $ConCASF = mysqli_fetch_all($ConCASC, MYSQLI_ASSOC); 
		 
		 //Converse Flyease
		 $ConFlyS='Select ProductName,ProductCost From Catalog Where ProductID = 39'; 
         $ConFlyC= mysqli_query($conn,$ConFlyS);
         $ConFlyF = mysqli_fetch_all($ConFlyC, MYSQLI_ASSOC); 
		 
		 //Converse Weapon CX
		 $ConCXS='Select ProductName,ProductCost From Catalog Where ProductID = 40'; 
         $ConCXC= mysqli_query($conn,$ConCXS);
         $ConCXF = mysqli_fetch_all($ConCXC, MYSQLI_ASSOC); 
		 
		 //Heelys Hustle
		 $HeelHS='Select ProductName,ProductCost From Catalog Where ProductID = 41'; 
         $HeelHC= mysqli_query($conn,$HeelHS);
         $HeelHF = mysqli_fetch_all($HeelHC, MYSQLI_ASSOC); 
		 
		 //Heelys Wowza
		 $HeelWoWS='Select ProductName,ProductCost From Catalog Where ProductID = 42'; 
         $HeelWoWC= mysqli_query($conn,$HeelWoWS);
         $HeelWoWF = mysqli_fetch_all($HeelWoWC, MYSQLI_ASSOC); 
		 
		 //Heelys Pro 20
		 $HeelP20S='Select ProductName,ProductCost From Catalog Where ProductID = 43'; 
         $HeelP20C= mysqli_query($conn,$HeelP20S);
         $HeelP20F = mysqli_fetch_all($HeelP20C, MYSQLI_ASSOC); 
		 
		 //Heelys Voyager
		 $HeelVoyS='Select ProductName,ProductCost From Catalog Where ProductID = 44'; 
         $HeelVoyC= mysqli_query($conn,$HeelVoyS);
         $HeelVoyF = mysqli_fetch_all($HeelVoyC, MYSQLI_ASSOC);
         
		 //Heelys Premium 1 LO
         $HeelP1S='Select ProductName,ProductCost From Catalog Where ProductID = 45'; 
         $HeelP1C= mysqli_query($conn,$HeelP1S);
         $HeelP1F = mysqli_fetch_all($HeelP1C, MYSQLI_ASSOC);
?>

<html>
 <head>
  <!--reference the CSS page used for this page-->
  <link rel = "stylesheet" href = "Catalog 5 (2).css" />
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
  <form action="Catalog 5 (2).php" name="Catalog1shoes" Method="POST">
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/37. Converse Classic Chuck Taylor.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/38. Converse Classic All Star Canvas.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/39. Converse Flyease.png" width="100" height="100"></span>
  <span id="Topshoe"><img src="Pictures of shoes/28. Crocs Original.png" width="100" height="100"><img src="Pictures of shoes/37. Converse Classic Chuck Taylor.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($ConCTF as $Converse2){ ?><?php foreach($ConCASF as $Converse3){ ?><?php foreach($ConFlyF as $Converse4){ ?>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($Converse2['ProductName']) ?><?php }?></span><span class="Group2"><?php echo htmlspecialchars($Converse3['ProductName']) ?><?php }?></span><span class="Group3"><?php echo htmlspecialchars($Converse4['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Converse2['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Converse3['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Converse4['ProductCost'])?></span>
  <br></br>
  <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="ConverseCCTaylor" value="Add to cart"/><input class="cart2" type="submit" name="ConverseCAllstar" value="Add to cart"/><input class="cart3" type="submit" name="ConverseFly" value="Add to cart"/>
  <br>
  <span id="new">Newly Available:</span>
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/40. Converse Weapon CX.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/41. Heelys Hustle.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/42. Heelys Wowza.png" width="100" height="100"></span>
  <span id="NewShoe"><img src="Pictures of shoes/11. Adidas Yeezy.png" width="100" height="100"><img src="Pictures of shoes/27. Crocs Salahe Bembury.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($ConCXF as $Converse5){ ?><?php foreach($HeelHF as $Heelys1){ ?><?php foreach($HeelWoWF as $Heelys2){ ?>
  <span class="Group1">&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($Converse5['ProductName']) ?><?php }?></span><span class="Group2">&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($Heelys1['ProductName']) ?><?php }?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($Heelys2['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Converse5['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Heelys1['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Heelys2['ProductCost'])?></span>
  <br></br>
  <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="ConverseWCX" value="Add to cart"/><input class="cart2" type="submit" name="HeelysHustle" value="Add to cart"/><input class="cart3" type="submit" name="HeelysWowza" value="Add to cart"/>
  <br></br>
  <!--Every img src function is used to display an image of the specific shoe mentioned-->
  <span class="pic1"><img src="Pictures of shoes/43. Heelys Pro 20.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/44. Heelys Voyager.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/45. Heelys Premium 1 LO.png" width="100" height="100"></span>
  <br></br>
  <!--This function will fetch all and display all the productnames and prices mentioned-->
  <?php foreach($HeelP20F as $Heelys3){ ?><?php foreach($HeelVoyF as $Heelys4){ ?><?php foreach($HeelP1F as $Heelys5){ ?>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($Heelys3['ProductName']) ?><?php }?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($Heelys4['ProductName']) ?><?php }?></span><span class="Group3">&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo htmlspecialchars($Heelys5['ProductName']) ?><?php }?></span>
  <br></br>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Heelys3['ProductCost'])?></span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Heelys4['ProductCost'])?></span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;R<?php echo htmlspecialchars($Heelys5['ProductCost'])?></span>
  <br></br>
  <!--This function will add the product selected to the shopping cart table--> 
  <input class="cart1" type="submit" name="HeelysPro20" value="Add to cart"/><input class="cart2" type="submit" name="HeelysVoyager" value="Add to cart"/><input class="cart3" type="submit" name="HeelysP1LO" value="Add to cart"/>
  <br>
  </form>
  <!--This buttons will be used to navigate between the catalog pages-->
  <button id="Catalog1" OnClick="Page1()">1</button><button id="Catalog2" OnClick="Page2()">2</button><button id="Catalog3" OnClick="Page3()">3</button><button id="Catalog4" OnClick="Page4()">4</button><button id="Catalog5" OnClick="Page5()">5</button>
  <?php
    //Each of these functions will execute when the specific button is clicked for it
    if ($_POST['ConverseCCTaylor']==True){
    $shoe37 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('37','Converse Classic Chuck Taylor','600')";
	mysqli_query($conn,$shoe37);
	echo '<script>alert("Order Placed!")</script>'; //This will alert that an order has been added
	}
    if ($_POST['ConverseCAllstar']==True){
    $shoe38 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('38','Converse Classic All Star Canvas','600')";
	mysqli_query($conn,$shoe38);
	echo '<script>alert("Order Placed!")</script>';
	}
    if ($_POST['ConverseFly']==True){
    $shoe39 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('39','Converse Flyease','1100')";
	mysqli_query($conn,$shoe39);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['ConverseWCX']==True){
    $shoe40 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('40','Converse Weapon CX','1500')";
	mysqli_query($conn,$shoe40);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['HeelysHustle']==True){
    $shoe41 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('41','Heelys Hustle','900')";
	mysqli_query($conn,$shoe41);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['HeelysWowza']==True){
    $shoe42 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('42','Heelys Wowza','1100')";
	mysqli_query($conn,$shoe42);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['HeelysPro20']==True){
    $shoe43 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('43','Heelys Pro 20','900')";
	mysqli_query($conn,$shoe43);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['HeelysVoyager']==True){
    $shoe44 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('44','Heelys Voyager','800')";
	mysqli_query($conn,$shoe44);
	echo '<script>alert("Order Placed!")</script>';
	}
	if ($_POST['HeelysP1LO']==True){
    $shoe45 = "INSERT INTO ShoppingCart(OrderID,OrderName,OrderPrice) VALUES('45','Heelys Premium 1 LO','1800')";
	mysqli_query($conn,$shoe45);
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