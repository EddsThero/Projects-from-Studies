<?php



?>

<html>
 <head>
  <link rel = "stylesheet" href = "Catalog 1 (2).css" />
  <title>Catalog</title>
 </head>
 <body>
  </form action="Shopping Cart (3).html">
  <button id="Homebtn" OnClick="Home()">Home & About</button>
  <button id="Productsbtn" OnClick="Products()">Catalog</button>
  <button id="Cartbtn" OnClick="Cart()">Shopping Cart Info</button>
  <h1>Catalog</h1>
  <button id="filter" name="cardinfo" class="Dropdown">Filter by Brand...</button><span id="top">Top Selling:</span> 
  <span class="pic1"><img src="Pictures of shoes/1.Nike Air Max.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/2.Nike Infinity Run.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/3.Nike Air Force 1.png" width="100" height="100"></span>
  <span id="Topshoe"><img src="Pictures of shoes/28. Crocs Original.png" width="100" height="100"><img src="Pictures of shoes/37. Converse Classic Chuck Taylor.png" width="100" height="100"></span>
  <br></br>
  <span class="Group1">Nike Air Max</span><span class="Group2">Nike Infinity Run</span><span class="Group3">&ensp; Nike Air Force 1</span>
  <br></br>
  <button class="cart1" OnClick="Add1()" id="NikeAirM" value="Nike Air Max">Add to cart</button><button class="cart2" OnClick="Add2()" id="NikeInfinity" value="Nike Infinity Run">Add to cart</button><button class="cart3" OnClick="Add3()" id="NikeAir1" value="Nike Air Force 1">Add to cart</button>
  <br>
  <span id="new">Newly Available:</span>
  <span class="pic1"><img src="Pictures of shoes/4.Nike Blazer.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/5. Nike Solay Flip Flops.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/6. Jordan Break Slides.png" width="100" height="100"></span>
  <span id="NewShoe"><img src="Pictures of shoes/11. Adidas Yeezy.png" width="100" height="100"><img src="Pictures of shoes/27. Crocs Salahe Bembury.png" width="100" height="100"></span>
  <br></br>
  <span class="Group1">Nike Blazer</span><span class="Group2">Nike Solay Flip Flops</span><span class="Group3">Jordan Break Slides</span>
  <br></br>
  <button class="cart1" OnClick="Add4()" id="NikeBlazer" value="Nike Blazer">Add to cart</button><button class="cart2" OnClick="Add5()" id="NikeFlipFlops" value="Nike Solay Flip Flops">Add to cart</button><button class="cart3" OnClick="Add6()" id="JordanSlides" value="Jordan Break Slides">Add to cart</button>
  <br></br>
  <span class="pic1"><img src="Pictures of shoes/7. Air Jordan.png" width="100" height="100"></span><span class="pic2"><img src="Pictures of shoes/8. Jordan Max Aura.png" width="100" height="100"></span><span class="pic3"><img src="Pictures of shoes/9. Jordan Delta.png" width="100" height="100"></span>
  <br></br>
  <span class="Group1">Air Jordan</span><span class="Group2">Jordan Max Aura</span><span class="Group3">&ensp;&ensp;&ensp;&ensp;Jordan Delta</span>
  <br></br>
  <button class="cart1" OnClick="Add7()" id="AirJordan" value="Air Jordan">Add to cart</button><button class="cart2" OnClick="Add8()" id="JordanMax" value="Jordan Max Aura">Add to cart</button><button class="cart3" OnClick="Add9()" id="JordanDelta" value="Jordan Delta">Add to cart</button>
  <br>
  <button id="Catalog1" OnClick="Page1()">1</button><button id="Catalog2" OnClick="Page2()">2</button><button id="Catalog3" OnClick="Page3()">3</button><button id="Catalog4" OnClick="Page4()">4</button><button id="Catalog5" OnClick="Page5()">5</button>
  </form>
  <script>
   const Order = [];
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
   function Add1(){
	var Item=document.getElementById("NikeAirM").value; 
	Order.push(Item.value);
    sessionstorage.setItem("SetOrder", JSON.stringify(Order));
	}
	function Add2(){
	var Item=document.getElementById("NikeInfinity"); 
	Order.push(Item.value);
    sessionstorage.setItem("SetOrder", JSON.stringify(Order));
	}
	function Add3(){
	var Item=document.getElementById("NikeAir1"); 
	Order.push(Item.value);
    sessionstorage.setItem("SetOrder", JSON.stringify(Order));
	}
	function Add4(){
	var Item=document.getElementById("NikeBlazer"); 
	Order.push(Item.value);
    sessionstorage.setItem("SetOrder", JSON.stringify(Order));
	}
	function Add5(){
	var Item=document.getElementById("NikeFlipFlops"); 
	Order.push(Item.value);
    sessionstorage.setItem("SetOrder", JSON.stringify(Order));
	}
	function Add6(){
	var Item=document.getElementById("JordanSlides"); 
	Order.push(Item.value);
    sessionstorage.setItem("SetOrder", JSON.stringify(Order));
	}
   function Add7(){
	var Item=document.getElementById("Air"); 
	Order.push(Item.value);
    sessionstorage.setItem("SetOrder", JSON.stringify(Order));
	}
	function Add8(){
	var Item=document.getElementById("JordanMax"); 
	Order.push(Item.value);
    sessionstorage.setItem("SetOrder", JSON.stringify(Order));
	}
	function Add9(){
	var Item=document.getElementById("JordanDelta"); 
	Order.push(Item.value);
    sessionstorage.setItem("SetOrder", JSON.stringify(Order));
	}
  </script> 
 </body>
</html>