<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasthuri</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>
<body>
    
    <?php include './variables.php' ?> 
    <nav>
       <div>
        <img class="logoimg" src="./images/logo.jpeg" alt="Logo Here">
        <p>Kasthuri</p>
        </div>
        <div>
        <img id="contrastcontrol" class="contrast" src="contrast.png" alt="">
        <button onclick="login()" id="logbtn" class="longinbtn">Login</button>
        </div>
       
    </nav>
    <main>
    <aside>
            <ul class="unorderedlist">
            <li onclick="location.href='/kasthuriupdated'"><img class="linksside" src="./images/home.png" alt="">
                    <p class="linkinfo" style="color:orange">Home</p>
                </li>
                <li><img class="linksside" src="./images/vehicle.png" alt="">
                    <p class="linkinfo">Services</p>
                </li>
                <li onclick="location.href='myevents.php'"><img class="linksside" src="./images/calendar.png" alt="">
                    <p class="linkinfo" >My Events</p>
                </li>
                <li><img class="linksside" src="./images/inf.png" alt="">
                    <p class="linkinfo">About Us</p>
                </li>
                <li id="expand"><img class="linksside bottomone " src="./images/exp.png" alt="">
                    <p class="linkinfo">Expand/<br> Collapse</p>
                </li>
            </ul>
        </aside>
        <div class="container">
        <header>
            <div>
            <p class="heading">Make Your  <span class="orange">Marriage </span> More <span class="orange">Memorable </span> with: <br> <span class="orange">Kasthuri </span> </p>
            <p class="context">All Your Marriage Needs At One Place <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></span></p>
</div>
<div class="slider">
        <img id="decrease" class="rightarrow" src="./images/arrow.png" alt="">
        <div id="imagechange">
            
            </div>
            <img id="increase" class="leftarrow" src="./images/arrow.png" alt="">
           <div class="circles">
           
           </div>
        </div>
        </header>
       
        <div class="templates">
            <div>
        <article class="cardarticle" data-card-id="invcards">
            <img class="articleimg" src="./images/inv.jpg" alt="">
            <p class="articlename">Invitation Card</p>
            <p class="articlecontext">This Card is best to go with basic to premium</p>
            <button class="articlebtn">More Designs <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></span></button>
        </article>
        <article class="cardarticle" data-card-id="concert">
            <img class="articleimg" src="./images/inv.jpg" alt="">
            <p class="articlename">Special Card <sup style="color:red;">*</sup> </p>
            <p class="articlecontext">This card special QR code for photo sharing</p>
            <button class="articlebtn">More Designs <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></span></button>
        </article>
        <article class="cardarticle" data-card-id="invcards2">
            <img class="articleimg" src="./images/mehandi.jpeg" alt="">
            <p class="articlename">Kasthuri Decors</p>
            <p class="articlecontext">Special and customized decoration with natural flowers</p>
            <button class="articlebtn">More Designs <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></span></button>
        </article>
        <article class="cardarticle" data-card-id="invcards3">
            <img class="articleimg" src="./images/dining.jpg" alt="">
            <p class="articlename">Kasthuri Dinning</p>
            <p class="articlecontext">Lets make tummy full ,with our delicious food </p>
            <button class="articlebtn">More Designs <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></span></button>
        </article>
        <article class="cardarticle" data-card-id="invcards4">
            <img class="articleimg" src="./images/orchestra.jpg" alt="">
            <p class="articlename"> Kasthuri Orchestra</p>
            <p class="articlecontext">Lets celebrate the moment</p>
            <button class="articlebtn">More Designs <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></span></button>
        </article>
       
        
       
        </div>
        </div>
        </div>
        
    </main>
    <div class="splash">
        <div id="closetab">

        </div>
       
    <section class="loginsec">
      
        <div id="logindiv">
        <input class="input" type="text" placeholder="UserName">
        <input class="input" type="text" placeholder="Password" name="" >
        <button id="mainlogin" class="reg longinbtn" name="action" value="login">Login</button>
       
        <div>
            <p style="padding:0px" class="notuser">Not a User?</p>
        <button class="reg longinbtn" name="action" value = "reg" id="Register">Click here to Register</button>
        </div>
        </div>
  
       <div id="registerdiv">
        
        <input class="input" type="text" name="" id="regname" placeholder="Create Username">
            <input class="input" type="text" name=""  placeholder="Enter Gmail">
            <input type="password" name="pwd" id="regpwd" placeholder="Create Password">
            <button class="reg longinbtn" name="action" value = "reg" id="mainreg">Register</button>
            <p class="notuser">Already a User? <span id="revertlogin" style="color: blue ; text-decoration:underline ; cursor:pointer;"> Login!!</p>
            </div>
       
        </section>
    
    </div>
    <script src="index.js?v=6">

    </script>
</body>
</html>