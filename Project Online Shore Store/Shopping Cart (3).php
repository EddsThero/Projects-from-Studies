<?php



?>




<html>
 <head>
  <link rel="stylesheet" href="Shopping Cart (3).css"/>
  <title>Shopping Cart</title>
 </head>
 <body>
  <button id="Homebtn" OnClick="Home()">Home & About</button>
  <button id="Productsbtn" OnClick="Products()">Catalog</button>
  <button id="Cartbtn" OnClick="Cart()">Shopping Cart Info</button>
  <hr>
  <h1>Shopping Cart & Checkout</h1>
  <span><u>List of Products:</u></span> 
  <br></br>
  <span id="productdetail">Product Name and Price: <span id="GetOrder"></span> R</span><button id="Remove" type="submit" name="Remove">Remove</button>
  <br>
  <span id="Totalitems">Total number of items:</span>
  <br></br>
  <span><u>Total Cost:</u></span>
  <br></br>
  <span id="Subtotal">Subtotal (without VAT): R:</span>
  </br>
  <span id="VAT">VAT amount: R:</span>
  <br></br>
  <span id="TotalCost">Final Cost (with VAT): R:</span>
  <hr>
  <br></br>
  <span><u>Payment Info:</u><button id="card" name="cardinfo" class="Dropdown">Choose your type of card...</button></span><input id="carddetails" type="text" value="Card Number MM/YYYY"><input id="CVcode" type="text" value="CVV">
  <br></br>
  <span><u>Billing Adress:</u></span><input id="city" type="text" value="City">
  <br></br>
  <span><input id="area" type="text" value="Area"></span>
  <br></br>
  <span><input id="post-code" type="text" value="Postal Code"></span>
  <br></br>
  <span><input id="street" type="text" value="Street Name"></span>
  <br></br>
  <br></br>
  <span><input id="order" type="submit" name="btn" type="click" value="Place Order"></span>
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
   var GetOrder =JSON.parse(sessionStorage.getItem("SetOrder"));
  </script> 
 </body>
</html>