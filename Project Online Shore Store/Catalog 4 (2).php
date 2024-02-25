<?php



?>

<html>
 <head>
  <link rel = "stylesheet" href = "Catalog 4 (2).css" />
  <title>Catalog</title>
 </head>
 <body>
  <button id="Homebtn" OnClick="Home()">Home & About</button>
  <button id="Productsbtn" OnClick="Products()">Catalog</button>
  <button id="Cartbtn" OnClick="Cart()">Shopping Cart Info</button>
  <h1>Catalog</h1>
  <button id="filter" name="cardinfo" class="Dropdown">Filter by Brand...</button><span id="top">Top Selling:</span> 
  <span class="pic1"><img src="Pictures of shoes/28. Crocs Original.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/29. Crocs Rainboots.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/30. Crocs Puff Boots.png" width="100" height="100"></span>
  <span id="Topshoe"><img src="Pictures of shoes/28. Crocs Original.png" width="100" height="100"><img src="Pictures of shoes/37. Converse Classic Chuck Taylor.png" width="100" height="100"></span>
  <br></br>
  <span class="Group1">Crocs Original</span><span class="Group2">&nbsp;&ensp;&ensp;&ensp;&ensp;Crocs Rainboots</span><span class="Group3">&ensp;&ensp;&ensp;Crocs Puff Boots</span>
  <br></br>
  <button class="cart1" OnClick="Add()">Add to cart</button><button class="cart2" OnClick="Add()">Add to cart</button><button class="cart3" OnClick="Add()">Add to cart</button>
  <br>
  <span id="new">Newly Available:</span>
  <span class="pic1"><img src="Pictures of shoes/31. DC Net Skate Shoe.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/32. DC Slip on shoe.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/33. DC Open Flip Flops.png" width="100" height="100"></span>
  <span id="NewShoe"><img src="Pictures of shoes/11. Adidas Yeezy.png" width="100" height="100"><img src="Pictures of shoes/27. Crocs Salahe Bembury.png" width="100" height="100"></span>
  <br></br>
  <span class="Group1">DC Net Skate Shoe</span><span class="Group2">DC Slip on shoe</span><span class="Group3">&ensp;&ensp;&ensp;&ensp;DC Open Flip Flops</span>
  <br></br>
  <button class="cart1" OnClick="Add()">Add to cart</button><button class="cart2" OnClick="Add()">Add to cart</button><button class="cart3" OnClick="Add()">Add to cart</button>
  <br></br>
  <span class="pic1"><img src="Pictures of shoes/34. DC Walking Boots.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/35. DC Villian Slip ons.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/36. Converse Run Star.png" width="100" height="100"></span>
  <br></br>
  <span class="Group1">DC Walking Boots</span><span class="Group2">DC Villian Slip ons</span><span class="Group3">&ensp;Converse Run Star</span>
  <br></br>
  <button class="cart1" OnClick="Add()">Add to cart</button><button class="cart2" OnClick="Add()">Add to cart</button><button class="cart3" OnClick="Add()">Add to cart</button>
  <br>
  <button id="Catalog1" OnClick="Page1()">1</button><button id="Catalog2" OnClick="Page2()">2</button><button id="Catalog3" OnClick="Page3()">3</button><button id="Catalog4" OnClick="Page4()">4</button><button id="Catalog5" OnClick="Page5()">5</button>
  <script>
   function Home(){
    window.location.href = "http://localhost/Project%20ITECA/Website%20(1).php";
   }
   function Products(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%201%20(2).php";
   }
   function Cart(){
    window.location.href = "http://localhost/Project%20ITECA/Shopping%20Cart%20(3).php";
   }
    function Page1(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%201%20(2).php";
   }
   function Page2(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%202%20(2).php";
   }
   function Page3(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%203%20(2).php";
   }
   function Page4(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%204%20(2).php";
   }
   function Page5(){
    window.location.href = "http://localhost/Project%20ITECA/Catalog%205%20(2).php";
   }
   function Add(){
    window.location.href = "file:///F:/Pearson/3de%20jaar/ITECA3W1/Project/Shopping%20Cart%20(3).html";
   }
  </script> 
 </body>
</html>