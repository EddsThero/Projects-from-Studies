<?php



?>

<html>
 <head>
  <link rel = "stylesheet" href = "Catalog 5 (2).css" />
  <title>Catalog</title>
 </head>
 <body>
  <button id="Homebtn" OnClick="Home()">Home & About</button>
  <button id="Productsbtn" OnClick="Products()">Catalog</button>
  <button id="Cartbtn" OnClick="Cart()">Shopping Cart Info</button>
  <h1>Catalog</h1>
  <button id="filter" name="cardinfo" class="Dropdown">Filter by Brand...</button><span id="top">Top Selling:</span> 
  <span class="pic1"><img src="Pictures of shoes/37. Converse Classic Chuck Taylor.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/38. Converse Classic All Star Canvas.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/39. Converse Flyease.png" width="100" height="100"></span>
  <span id="Topshoe"><img src="Pictures of shoes/28. Crocs Original.png" width="100" height="100"><img src="Pictures of shoes/37. Converse Classic Chuck Taylor.png" width="100" height="100"></span>
  <br></br>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Converse Classic Chuck Taylor</span><span class="Group2">Converse Classic All Star Canvas</span><span class="Group3">Converse Flyease</span>
  <br></br>
  <button class="cart1" OnClick="Add()">Add to cart</button><button class="cart2" OnClick="Add()">Add to cart</button><button class="cart3" OnClick="Add()">Add to cart</button>
  <br>
  <span id="new">Newly Available:</span>
  <span class="pic1"><img src="Pictures of shoes/40. Converse Weapon CX.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/41. Heelys Hustle.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/42. Heelys Wowza.png" width="100" height="100"></span>
  <span id="NewShoe"><img src="Pictures of shoes/11. Adidas Yeezy.png" width="100" height="100"><img src="Pictures of shoes/27. Crocs Salahe Bembury.png" width="100" height="100"></span>
  <br></br>
  <span class="Group1">&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Converse Weapon CX</span><span class="Group2">&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Heelys Hustle</span><span class="Group3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Heelys Wowza</span>
  <br></br>
  <button class="cart1" OnClick="Add()">Add to cart</button><button class="cart2" OnClick="Add()">Add to cart</button><button class="cart3" OnClick="Add()">Add to cart</button>
  <br></br>
  <span class="pic1"><img src="Pictures of shoes/43. Heelys Pro 20.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/44. Heelys Voyager.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/45. Heelys Premium 1 LO.png" width="100" height="100"></span>
  <br></br>
  <span class="Group1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Heelys Pro 20</span><span class="Group2">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Heelys Voyager</span><span class="Group3">&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Heelys Premium 1 LO</span>
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
    sessionstorage
   }
  </script>  
 </body>
</html>