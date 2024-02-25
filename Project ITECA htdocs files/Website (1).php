<html>
 <head>
  <!--reference the CSS page used for this page-->
  <link rel="stylesheet" href="Website(1).css"/>
  <title>Home & About</title>
 </head>
 <body>
  <!--Create the buttons at the top to switch between pages-->
  <button id="Homebtn" OnClick="Home()">Home & About</button>
  <button id="Productsbtn" OnClick="Products()">Catalog</button>
  <button id="Cartbtn" OnClick="Cart()">Shopping Cart Info</button>
  <hr>
  <h1>MoonWalk</h1>
  <br></br>
  <!--The info about the website is displayed below-->
  <p id="info">Welcome to MoonWalk! Feel free to browse our store by clicking on one of the individual headings above. Our Catalog of shoes available on our online store can be viewed by navigating to the 'Catalog' page. More information about the website are accessible for you on this current page named the 'Home & About' page. To check your current shopping cart, just click on the heading labelled 'Shopping cart info' next to the cart icon.</p>
  <br></br>
  <!--The 'about' info of the website is displayed below-->
  <h2>About</h2>
  <p id="about">This website was created to give everyone the opportunity to buy shoes online at reasonable prices and have them delivered to your doorstep. We as a company strive to provide everyone with the top quality brands of shoes at the most affordable prices available. For any queries feel free to contact us via e-mail or phone by dialing the number of our customer care or sending us an e-mail to our business e-mail provided below.</p>   
  <br></br>
  <br></br>
  <br></br>
  <hr>
  <!--All the Contact info is displayed below-->
  <span id ="contactUS"><u>Contact Us:</u></span>
  <br>
  <span id ="phone"><u>Phone: 378 054 6182</u></span>
  <br>
  <span>Est. 2022</span><span id ="email"><u>Business E-Mail: moonwalk&1@gmail.co</u></span>
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
 </body>
</html>